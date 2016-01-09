<?php

namespace SpeakServer\Service;

use SpeakServer\Objects\SpeakObject;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = addslashes($object->getText());

        $fp = fopen(__DIR__ . '/../../lock', "w");
        flock($fp, LOCK_EX);

        exec("espeak -ven+f3 -k5 -s150 '$text'");
    }

}