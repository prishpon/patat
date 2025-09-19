<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// $config = require base_path('config.php');

// $db = new Database( $config['database'] );


$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();


require view("notes/index.view.php" , [
    'heading' => 'My Notes ff',
    'notes'  => $notes
]);
