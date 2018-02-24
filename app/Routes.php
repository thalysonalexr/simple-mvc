<?php

use classes\Route;
use Controller\Index;
use Controller\AboutUs;
use Controller\ContactUs;
use Controller\Users;


Route::set( "index.php" , function() {
    Index::createView( "Index" );
});

Route::set( "about-us" , function() {
    AboutUs::createView( "AboutUs" );
});

Route::set( "contact-us" , function() {
    ContactUs::createView( "ContactUs" );
});

Route::set( "data-users", function() {
    Users::selectUsers();
    Users::createView( "Users" );
});

Route::set( "users" , function() {
    require_once( "users.html" );
});
