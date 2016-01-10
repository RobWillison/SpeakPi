<?php

require 'autoloder.php';

$config = [
    'page' => [
        'login' => 'Controllers/Login.php',
        'speak' => 'Controllers/Speak.php',
        'button' => 'Controllers/Button.php',
        '' => 'Controllers/Login.php',
        ]
];

$controllerName = $config['page'][$_GET['page']];
$methodName = $_SERVER['REQUEST_METHOD'];

$controller = new $controllerName;

var_dump($controller, $method);die;