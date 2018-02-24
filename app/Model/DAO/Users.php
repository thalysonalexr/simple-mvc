<?php
/**
 * User entity's data access object (DAO) class
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package Model\DAO
 */

namespace Model\DAO;


use classes\Database;


class Users extends Database {
    /**
     * Create a nre object of class Users
     *
     * @see |Model\bean\Users
     * @see Database
     *
     * @return array array of objects of class \Model\bean\Users
     */
    public static function selectAll() {
        $query = self::query( "SELECT * FROM users" );
        $users = [];

        foreach ($query as $value) {
            $user = new \Model\bean\Users();
            $user->setId(       $value["id_user"] );
            $user->setFname(    $value["first_name"] );
            $user->setLname(    $value["last_name"] );
            $user->setUsername( $value["username"] );
            $user->setPassword( $value["password"] );
            $users[] = $user;
        }
        return $users;
    }
}
