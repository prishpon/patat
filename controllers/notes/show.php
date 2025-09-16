<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database( $config['database'] );

$heading = "Single note";

// dd($_SERVER);

$currentUserId = 31;

if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

    $note = $db->query('SELECT * FROM notes WHERE id = :id' ,[
            'id' => $_GET['id']
        ])->findOrFail();

        authorize( $note['user_id'] === $currentUserId );

        $db->query('DELETE FROM notes WHERE id = :id' ,[
            'id' => $_GET['id']
        ]);

        header('location: /notes');
        exit;

}  else {

$note = $db->query('SELECT * FROM notes WHERE id = :id' ,[
    'id' => $_GET['id']
])->findOrFail();

$currentUserId = 1;

authorize( $note['user_id'] === $currentUserId );

//$notes = $db->query('SELECT * FROM notes WHERE user_id =2')->fetchAll();

require "view/notes/show.view.php";

require view("notes/show.view.php" , [
    'heading' => 'My note',
    'note'  => $note 
]);

}