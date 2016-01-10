<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/SpeakServer/Objects/SpeakObject.php';
require_once __DIR__ . '/SpeakServer/Service/Speak.php';
require_once __DIR__ . '/SpeakServer/Service/Voices.php';

use SpeakServer\Service\Speak;
use SpeakServer\Objects\SpeakObject;

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

$controller = new __DIR__ . '/' . $controllerName;

var_dump($controller, $method);die;