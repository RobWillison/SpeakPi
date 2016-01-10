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
        $gender = $object->getGenderExtension();

        $text = $from == null ? $text : $from . ' Says ' . $text;

        exec("espeak -k5 -s150 '$text' -v $voice$gender");
    }

}