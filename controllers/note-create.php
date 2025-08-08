<?php

$heading = "Create note";

if( $_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($_POST['body']);
}

require 'view/note-create.view.php';