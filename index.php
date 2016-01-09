<?php

require_once __DIR__ . '/vendor/autoload.php';

use SpeakServer\Service\Speak;
use SpeakServer\Objects\SpeakObject;

var_dump(get_included_files());die;

if (isset($_POST['text'])) {
    $toSpeak = new SpeakObject();
    $toSpeak->addText($_POST['text']);

    $speaker = new Speak();
    $speaker->speak($toSpeak);
} else {
    include 'mainPage.html';
}

