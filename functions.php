<?php
function dd( $value ) {
    echo '<pre>';
    var_dump ( $value );
    echo '</pre>';

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