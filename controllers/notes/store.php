<?php
use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);

// $config = require base_path('config.php');

// $db = new Database( $config['database'] );

$errors = [];

    $validator = new Validator();


    if ( Validator::string($_POST['body'], 1, 100 )) {
        $errors['body'] = "Oops this field shouldn't be empty or too much";
    } 

    if( !empty($errors) ) {
            return view("notes/show.view.php" , [
                'heading' => 'Create note',
                 'errors'  => $errors
            ]);
    } 

    $db->query('INSERT INTO notes( body,user_id ) VALUES(:body , :user_id)',[
            'body' => $_POST['body'],
            'user_id' => 1
    ]);

    header('location: /notes');
    die();    

