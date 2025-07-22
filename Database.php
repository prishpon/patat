<?php

class Database {

public $connection;

public $statement;

protected $mysql;
protected $host;
protected $dbname;
protected $user;

public function __construct( $config , $user = 'root', $password = '' ) {

   $dsn = 'mysql:' . http_build_query( $config, '', ';' ); //host=localhost;port=3308;dbname=patat;charset=utf8mb4

    //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";


    $this->connection = new PDO($dsn , $user ,  $password , [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
    ]);
}


public function query($query ,$params = []) {

        $this->statement = $this->connection->prepare($query);

        $this->statement-> execute( $params ); 

        return $this;

}

public function find() {

    return $this->statement->fetch();

}

public function get() {
    return $this->statement->fetchAll();
}

public function findOrFail() {
    $result = $this->find();

    if ( !$result ) {
        abort();
    }

    return $result;

}

}

// $dsn = 'mysql:host=localhost;port=3308;dbname=patat;charset=utf8mb4';
// $username = 'root';
// $password = ''; 

// $stmt = $pdo->prepare('INSERT INTO posts (id,title)
// VALUES (1,"Birds are flying"),(2,"Dogs are barking")');

 //$stmt = $pdo->prepare('SELECT * FROM posts');
