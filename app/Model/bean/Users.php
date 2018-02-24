<?php
/**
 * User entity model class
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package Model\bean
 */

namespace Model\bean;


class Users implements \JsonSerializable {
    /**
     * @var integer $iduser   Identifier code
     * @var string $fname     First name user
     * @var string $lname     Last name user
     * @var string $username  Username of user
     * @var string $password  Password of user
     */
    private $iduser;
    private $fname;
    private $lname;
    private $username;
    private $password;

    public function getId() {
        return $this->iduser;
    }

    public function setId( $value ) {
        $this->iduser = $value;
    }

    public function getFname() {
        return $this->fname;
    }

    public function setFname( $value ) {
        $this->fname = $value;
    }

    public function getLname() {
        return $this->lname;
    }

    public function setLname( $value ) {
        $this->lname = $value;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername( $value ) {
        $this->username = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword( $value ) {
        $this->password = $value;
    }

    /**
     * method to transform object into array for json
     *
     * @return array object array of this class
     */
    public function jsonSerialize() {
        return
        [
            'id'        => $this->getId(),
            'fname'     => $this->getFname(),
            'lname'     => $this->getLname(),
            'username'  => $this->getUsername(),
            'password'  => $this->getPassword()
        ];
    }
}
