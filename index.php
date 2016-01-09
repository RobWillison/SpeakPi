<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/SpeakServer/Objects/SpeakObject.php';
require_once __DIR__ . '/SpeakServer/Service/Speak.php';
require_once __DIR__ . '/SpeakServer/Service/Voices.php';

use SpeakServer\Service\Speak;
use SpeakServer\Objects\SpeakObject;


if (isset($_POST['text'])) {
    $toSpeak = new SpeakObject();
    $toSpeak->addText($_POST['text']);
    $voice = isset($_POST['voice']) ? $_POST['voice'] : 'en';
    $toSpeak->setVoice($voice);

    $speaker = new Speak();
    $speaker->speak($toSpeak);
} elseif (isset($_POST['addbutton'])) {
    $fp = fopen('Button.txt', 'a+');
    fwrite($fp, $_POST['addbutton']);
    fclose($fp);
} else {
    include 'mainPage.php';
}

