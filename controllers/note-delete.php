<?php
$config = require('config.php');

$db = new Database( $config['database'] );

$heading = "new delete";


$db->query('DELETE FROM notes WHERE id = :id' ,[
    'id' => $_GET['id']
]);



require "view/note-delete.view.php";