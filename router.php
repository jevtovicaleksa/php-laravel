<?php 

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routes = [
        '/php-laravel/' => 'controllers/index.php',
        '/php-laravel/about' => 'controllers/about.php',
        '/php-laravel/contact' => 'controllers/contact.php',
    ];

    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }else {
        require 'views/404.php';
    }

?>