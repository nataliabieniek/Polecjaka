<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('dashboard', 'ProjectController');
Routing::post('login', 'SecurityController');
Routing::post('addPlace', 'ProjectController');
Routing::post('register', 'SecurityController');

Routing::run($path);