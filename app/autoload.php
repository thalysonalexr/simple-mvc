<?php

function __autoload( $class ) {

    $class = WWW . DS . str_replace( "\\" , DS , $class ) . ".php";

    if ( ! file_exists( $class ) )
        throw new \Exception("The file path \"{$class}\" not exists", 1);

    require_once( $class );
}
