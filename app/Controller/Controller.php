<?php
/**
 * Class responsible for creating views
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package simple-mvc
 */


namespace Controller;


class Controller {
    /**
     * Creates a new view
     *
     * @param string name of view selected
     */
    public static function createView( $viewName ) {
        require_once("./app/View/".$viewName.".php");
    }
}
