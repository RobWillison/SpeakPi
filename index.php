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

$controller = $config['page'][$_GET['page']];
var_dump($controller);die;