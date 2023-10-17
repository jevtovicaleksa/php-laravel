<?php
    require 'functions.php';
    // require 'router.php';

    // Connect to our database.

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php-laravel";

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $statement = $pdo->prepare('select * from posts');
    $statement->execute();

    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

    
    foreach ($posts as $key => $post) {
        dd($post['column_name']);
    }



    // class Person {
    //     public $name;
    //     public $age;

    //     public function breathe() {
    //         echo $this->name . ' is breathing';
    //     }
    // }

    // $person = new Person();

    // $person->name = 'Aleksa';
    // $person->age = 26;

    // $person->breathe();

?>