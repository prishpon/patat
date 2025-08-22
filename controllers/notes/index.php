<?php

$config = require('config.php');

$db = new Database( $config['database'] );

$heading = "My Notes";


$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();


if( isset($_GET['act']) && $_GET['act'] === "delete") {
        $db->query('DELETE FROM notes WHERE id = :id' ,[
        'id' => $_GET['id']
    ]);
}

if( isset($_GET['act']) && $_GET['act'] === "edit") {
        $db->query('UPDATE FROM notes WHERE id = :id' ,[
        'id' => $_GET['id']
    ]);
}

require "view/notes/index.view.php";