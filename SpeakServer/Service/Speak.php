<?php

namespace SpeakServer\Service;

use SpeakServer\Objects\SpeakObject;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = addslashes($object->getText());
        $voice = $object->getVoice();

        $block = 1;

        $fp = fopen(__DIR__ . '/../../lock', "w");
        flock($fp, LOCK_EX, $block);

        exec("espeak -v $voice -k5 -s150 '$text' en-sc");
    }

}