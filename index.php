<?php

require 'autoloader.php';

$config = [
    'page' => [
        'login' => 'Controllers\\Login.php',
        'speak' => 'Controllers\\Speak.php',
        'button' => 'Controllers\\Button.php',
        '' => 'Controllers\\Login.php',
        ]
];

$controllerName = $config['page'][$_GET['page']];
$methodName = $_SERVER['REQUEST_METHOD'];
var_dump($controllerName);
$controller = new $controllerName;
var_dump($controller);die;
$controller->get();