<?php
/**
 * Class responsible for mysql connection with PDO object and declarations
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package simple-mvc
 */

namespace classes;


class Database {
    /**
     * @var string  $host      connecting host
     * @var integer $port      port host
     * @var string  $dbName    name database
     * @var string  $username  username database
     * @var string  $password  password database
     */
    public static $host = "localhost";
    public static $port = 3306;
    public static $dbName = "mvc";
    public static $username = "mvc";
    public static $password = "simple-mvc";

    /**
     * Connects to the mysql database
     *
     * @see \PDO
     *
     * @return \PDO object connection
     */
    private static function connect() {
        $pdo = new \PDO("mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$dbName . ";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    /**
     * Runs statements from a PDO connection
     *
     * @param string $query   query statement to be executed
     * @param array  $params  parameters to be linker to query
     *
     * @return array data returned from the query
     */
    public static function query($query, $params = []) {
        $statement = self::connect()->prepare( $query );
        $statement->execute( $params );

        if (explode( ' ' , $query )[0] == 'SELECT') {
            $data = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $data;
        }

    }

}
