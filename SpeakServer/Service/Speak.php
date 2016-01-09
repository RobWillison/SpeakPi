<?php

namespace SpeakServer\Service;

use SpeakServer\Objects\SpeakObject;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = addslashes($object->getText());

        $block = 1;

        $fp = fopen(__DIR__ . '/../../lock', "w");
        flock($fp, LOCK_EX, $block);

        exec("espeak -ven+f3 -k5 -s150 '$text'");
    }

}