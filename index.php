<?php
//This is my CONTROLLER

//Turn on output buffering
ob_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');


//Start the session
session_start();
var_dump($_SESSION);

//Create an instance of the Base class
$f3 = Base::instance();
$con = new Controller($f3);
$dataLayer = new DataLayer();

//instantiate new item object
$member = new Item();

//instantiate new customer object
$customer = new Customer();
//generate unique customer id

//Define a default route
$f3->route('GET /', function() {

    $GLOBALS['con']->home();

});

//Define an about us route
$f3->route('GET /aboutUs', function() {

    $GLOBALS['con']->about();
});

//Define a product route
$f3->route('GET|POST /products', function($f3) {

    $GLOBALS['con']->products();

});

//Define a product builder route
$f3->route('GET|POST /addToCart', function($f3) {

    $GLOBALS['con']->addToCart();

});

//Define a cart route
$f3->route('GET|POST /shopCart', function($f3) {

    $GLOBALS['con']->cart();

});

//Define a checkout route
$f3->route('GET|POST /checkout', function($f3) {

    $GLOBALS['con']->checkout();

});


// Define a summary route
$f3->route('GET /summary', function() {

    $GLOBALS['con']->summary();

});

//Run fat-free
$f3->run();

//Send output to the browser
ob_flush();