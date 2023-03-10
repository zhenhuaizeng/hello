<?php

//  This is my Controller for the hello project

//  Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

//  Create an instance of the Base class
$f3 = Base::instance();

//Java equivalent -> Base f3 = new Base();

//Define a default route ("home page for hello project")

$f3 -> route('GET /',function(){
    echo '<h1>Hello, Fat Free!</h1>';
});


$view = new Template();
echo $view -> render('views/home.html');



//   Run Fat-Free
$f3 ->run();

// Java -> f3.run
