<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/SpeakServer/Objects/SpeakObject.php';
require_once __DIR__ . '/SpeakServer/Service/Speak.php';
require_once __DIR__ . '/SpeakServer/Service/Voices.php';

use SpeakServer\Service\Speak;
use SpeakServer\Objects\SpeakObject;

if (isset($_SESSION['username'])) {

} else {
    include 'LoginPage.tpl.php';
    exit;
}

//If no session
//Login Page
//Check for $_POST Speak
//Call func
//Check for $_POST Page
//Show Page

if (isset($_POST['text'])) {
    $toSpeak = new SpeakObject();
    $toSpeak->addText($_POST['text']);
    $voice = isset($_POST['voice']) ? $_POST['voice'] : 'en';
    $name = isset($_POST['from']) ? $_POST['from'] : '';
    $toSpeak->setVoice($voice);
    $toSpeak->setFrom($name);
    $speaker = new Speak();
    $speaker->speak($toSpeak);
} elseif (isset($_POST['addbutton'])) {
    $fp = fopen('Buttons.txt', 'a+');
    fwrite($fp, $_POST['addbutton'] . PHP_EOL);
    fclose($fp);
} else {
    include 'mainPage.tpl.php';
}

