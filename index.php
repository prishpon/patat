<?php 
const BASE_PATH = __DIR__ . '/';


require BASE_PATH . "functions.php";

spl_autoload_register( function($class)  {
    
    require base_path('Core/' . $class . '.php');

});

// dd(BASE_PATH . 'functions.php');

// require base_path("Database.php");

// require base_path("Response.php");

require base_path("Core/router.php");



// $config = require('config.php');

// $db = new Database( $config['database'] );


//$db->query('DELETE FROM  posts WHERE id=7');

//$db->query('INSERT INTO posts (id,title) VALUES (6,"vogels singen"),(7,"de honden aan  het wandelen")');

//$id = $_GET['id'];

// $query = "SELECT * FROM posts";

// $posts = $db->query($query)->fetchAll();

// $posts =$stmt->fetchAll( PDO::FETCH_ASSOC );


// foreach ( $posts as $post ) {
//     echo "<h2>{$post['title']}</h2>";
//     echo "<h3>{$post['id']}</h3>";

// }