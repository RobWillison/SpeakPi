<?php

namespace SpeakServer\Service;

use SpeakServer\Objects\SpeakObject;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = str_replace('\'', '', $object->getText());
        $voice = $object->getVoice();
        $from = $object->getFrom();
        //$text = $from === '' ? $text : $from . ' Says ' . $text;

        $block = 1;

        $fp = fopen(__DIR__ . '/../../lock', "w");
        flock($fp, LOCK_EX, $block);

        exec("espeak -k5 -s150 '$text' -v $voice");
    }

}