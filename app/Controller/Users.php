<?php
/**
 * Control class for user entity
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package simple-mvc
 */

namespace Controller;


use Controller\Controller;


class Users extends Controller {
    /**
     * Executes the request to select all users
     */
    public static function selectUsers() {
        $_REQUEST["users"] = \Model\DAO\Users::selectAll();
    }

}
