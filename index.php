<?php

require 'autoloader.php';
session_start();
$config = [
    'page' => [
        'login' => 'Controllers\\Login',
        'speak' => 'Controllers\\Speak',
        'button' => 'Controllers\\Button',
        '' => 'Controllers\\Login',
        ]
];

if(isset($_GET['page'])){
    $page = $_GET['page'];
} elseif (isset($_SESSION['page'])) {
    $page = $_SESSION['page'];
}

$controllerName = $config['page'][$page];
$methodName = strtolower($_SERVER['REQUEST_METHOD']);

$controller = new $controllerName();


$controller->$methodName();
var_dump($_SESSION['page']);die;