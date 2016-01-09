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
    $toSpeak->setVoice('en');

    $speaker = new Speak();
    $speaker->speak($toSpeak);
} else {
    include 'mainPage.php';
}

