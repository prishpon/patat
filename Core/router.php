<?php
$routes = require('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


function abort( $c = 404 ) {
    http_response_code( $code = 404 );

    if($c == 403) {
         require "view/{$c}.php";
    } else {
        require "view/{$code}.php";
    }

    die();
}

function routeToController(  $uri , $routes ) {

    if (array_key_exists( $uri , $routes )) { 
        require $routes[ $uri ]; 
    } else {
        abort();
    };
}

routeToController(  $uri , $routes );

