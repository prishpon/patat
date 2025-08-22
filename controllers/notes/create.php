<?php
require base_path('Validator.php');

$config = require base_path('config.php');

$db = new Database( $config['database'] );

$errors = [];

if( $_SERVER['REQUEST_METHOD'] === 'POST') {

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


require view("notes/create.view.php" , [
    'heading' => 'Create note',
    'errors'  => $errors
]);