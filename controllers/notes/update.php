<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$currentUserId = 1;

//find the corresponding note
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();


//authorize that current user can edit the note
authorize($note['user_id'] ===  $currentUserId);

//validate the form

$errors = [];

if (Validator::string($_POST['body'], 1, 100)) {
    $errors['body'] = "Oops this field shouldn't be empty or too much";
}


//if no validation errors, update the record in the notes in database

if (count($errors)) {
    view("notes/edit.view.php", [
        'heading' => 'Create note',
        'errors'  => $errors,
        'note'    => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

//redirect user
header('location: /notes');
die();
