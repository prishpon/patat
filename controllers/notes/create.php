<?php
require('Validator.php');

$config = require('config.php');

$db = new Database( $config['database'] );

$heading = "Create note";

if( $_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    $validator = new Validator();


    if ( Validator::string($_POST['body'], 1, 100 )) {
        $errors['body'] = "Oops this field shouldn't be empty or too much";
    } 

    if( empty($errors) ) {
         $db->query('INSERT INTO notes( body,user_id ) VALUES(:body , :user_id)',[
                'body' => $_POST['body'],
                'user_id' => 1
            ]);
    }


}

require 'view/notes/create.view.php';