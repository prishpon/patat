<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


function abort( $c = 404 ) {
    http_response_code( $code = 404 );

    if($c == 403) {
         require base_path("view/{$c}.php");
    } else {
        require base_path("view/{$code}.php");
    }

    die();
}



function routeToController(  $uri , $routes ) {

    if (array_key_exists( $uri , $routes )) { 
        require base_path ($routes[ $uri ]); 
    } else {
        abort();
    };
}

$routes = require 'routes.php';

routeToController(  $uri , $routes );

