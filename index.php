<?php
// 328/pets/index.php
// this file holds the controller for Fat-Free

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// instantiate the F3 framework Base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function () {
    echo "pet home";

});

// Run fat-free
$f3->run();

?>