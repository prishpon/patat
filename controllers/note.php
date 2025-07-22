<?php

$config = require('config.php');

$db = new Database( $config['database'] );

$heading = "Single note";


$note = $db->query('SELECT * FROM notes WHERE id = :id' ,[
    'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort();
}

$currentUserId = 1;

if ($note['user_id'] !== $currentUserId ) {
    abort(Response::FORBIDDEN);
}

//$notes = $db->query('SELECT * FROM notes WHERE user_id =2')->fetchAll();

require "view/note.view.php";