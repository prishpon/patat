<?php
use Core\Database;

$config = require base_path('config.php');

$db = new Database( $config['database'] );


$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();


if( isset($_GET['act']) && $_GET['act'] === "delete") {
        $db->query('DELETE FROM notes WHERE id = :id' ,[
        'id' => $_GET['id']
    ]);
}



require view("notes/index.view.php" , [
    'heading' => 'My Notes ff',
    'notes'  => $notes
]);
