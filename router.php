<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =
[
  '/' => 'controllers/index.php',
  '/about' => 'controllers/about.php',
  '/contact' => 'controllers/contact.php',
];

function abort() {
    http_response_code( $code = 404 );

    require "view/{$code}.php";

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