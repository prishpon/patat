<?php

use Core\Response;
use Core\Validator;

function dd( $value ) {
    echo '<pre>';
    var_dump ( $value );
    echo '</pre>';

    die();
}

function abort( $code = 404 ) {
               http_response_code( $code );

               require base_path("view/{$code}.php");

            die();
}

function ursIs ($val) {
    return $_SERVER["REQUEST_URI"] === $val;
}

function authorize( $condition, $status =  Response::FORBIDDEN ) {
        if (!$condition) {
            abort( $status );
        }
}

function base_path( $path ) {
       return BASE_PATH . $path;
}

function view( $path , $attributes = [] ) {

    extract( $attributes );

    require base_path( 'view/' . $path ); // /view/index.view.php
}