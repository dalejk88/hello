<?php

// Controller for the hello project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base Class
$f3 = Base::instance();
// Java equivalent -> Base f3 = new Base();

// Define default route ("Home page")
$f3->route('GET /', function(){
    echo '<h1>Hello, Fat-Free</h1>';
});

// Run fat-free
$f3->run();
// Java -> f3.run();