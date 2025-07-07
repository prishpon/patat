<?php

$config = require('config.php');

$db = new Database( $config['database'] );

$heading = "Single note";


$note = $db->query('SELECT * FROM notes WHERE id = :id' , ['id' => $_GET['id']])->fetch();

//$notes = $db->query('SELECT * FROM notes WHERE user_id =2')->fetchAll();

require "view/note.view.php";