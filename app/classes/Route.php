<?php
/**
 * Class responsible for valid URL routes
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package simple-mvc
 */

namespace classes;


class Route {
    /**
     * @var array $validRoute validated routes
     */
    public static $validRoutes = [];

    /**
     * @param string   $route    url route to be validated
     * @param mixed    $function call to be invoked
     */
    public static function set( $route , $function ) {

        self::$validRoutes[] = $route;

        // print_r( self::$validRoutes );

        if ( $_GET["url"] == $route ) {
            $function->__invoke();
        }
    }
}
