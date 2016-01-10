<?php

require 'autoloader.php';

$config = [
    'page' => [
        'login' => 'Controllers\\Login',
        'speak' => 'Controllers\\Speak',
        'button' => 'Controllers\\Button',
        '' => 'Controllers\\Login',
        ]
];

$controllerName = $config['page'][$_GET['page']];
$methodName = strtolower($_SERVER['REQUEST_METHOD']);

$controller = new $controllerName();


$controller->$methodName();