<?php

namespace SpeakServer\Service;

use SpeakServer\Objects\SpeakObject;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = addslashes($object->getText());
        flock(__DIR__ . '/../../lock', LOCK_EX, 1);
        exec("espeak -ven+f3 -k5 -s150 '$text");
    }

}