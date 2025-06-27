<?php 
require "functions.php";

require "Database.php";

//require "router.php";

$config = require('config.php');

$db = new Database( $config['database'] );


//$db->query('DELETE FROM  posts WHERE id=7');

//$db->query('INSERT INTO posts (id,title) VALUES (6,"vogels singen"),(7,"de honden aan  het wandelen")');

$posts = $db->query('SELECT * FROM posts')->fetchAll( PDO::FETCH_ASSOC );

// $posts =$stmt->fetchAll( PDO::FETCH_ASSOC );

//dd($posts);

foreach ( $posts as $post ) {
    echo "<h2>{$post['title']}</h2>";
    echo "<h3>{$post['id']}</h3>";

}

