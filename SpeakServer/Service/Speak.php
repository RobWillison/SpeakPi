<?php

namespace SpeakServer\Service;

use SpeakServer\Objects\SpeakObject;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = addslashes($object->getText());
        flock(__DIR__ . '/../../lock', LOCK_EX, 1);
        exec(" echo '$text' | festival --tts");
    }

}