<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = "Single note";

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);

view("notes/edit.view.php", [
    'heading' => 'Create note',
    //'errors'  => $errors,
    'note'    => $note
]);
