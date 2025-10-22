<?php

$_SESSION['name'] = 'Olya';
$_SESSION['last'] = 'Prish';

require view("index.view.php", [
    'heading' => 'Home',
]);
