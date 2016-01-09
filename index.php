<?php

require_once __DIR__ . '/vendor/autoload.php';

use SpeakServer\Speak;
use SpeakServer\SpeakObject;

if (isset($_POST['text'])) {
    $toSpeak = new SpeakObject();
    $toSpeak->addText($_POST['text']);

    $speaker = new Speak();
    $speaker->speak($toSpeak);
} else {
    include 'mainPage.html';
}

