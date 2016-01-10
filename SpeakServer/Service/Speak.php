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

        $text = $from === '' ? $text : $from . ' Says ' . $text;

        var_dump("espeak -k5 -s150 '$text' -v $voice");

        exec("espeak -k5 -s150 '$text' -v $voice");
    }

}