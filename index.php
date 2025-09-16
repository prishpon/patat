<?php 
const BASE_PATH = __DIR__ . '/';

require BASE_PATH . "Core/functions.php";

spl_autoload_register( function($class)  {

    //Core\Database

    $class = str_replace( '\\' , '/', $class );

    require base_path( "{$class}.php");

});


// require base_path("Core/router.php");
$router = new Core\Router;


$routes = require base_path('Core\routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset( $_POST['_method'] ) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router -> route( $uri , $method );
