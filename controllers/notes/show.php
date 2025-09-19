<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// $config = require base_path('config.php');

// $db = new Database( $config['database'] );

$heading = "Single note";

// dd($_SERVER);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id' ,[
    'id' => $_GET['id']
])->findOrFail();


authorize( $note['user_id'] === $currentUserId );

//$notes = $db->query('SELECT * FROM notes WHERE user_id =2')->fetchAll();

require "view/notes/show.view.php";

require view("notes/show.view.php" , [
    'heading' => 'My note',
    'note'  => $note 
]);
