<?php

// require 'functions.php';


$uri = $_SERVER['REQUEST_URI'];

echo($uri);

if($uri == '/php-laravel/'){
    require 'controllers/index.php';
}elseif($uri == '/php-laravel/about') {
    require 'controllers/about.php';
}else {
    require 'controllers/contact.php';
}

// if($uri == '/php-laravel/about') {
//     echo($uri);
// }

?>