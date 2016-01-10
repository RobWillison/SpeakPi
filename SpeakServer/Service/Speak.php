<?php

namespace SpeakServer\Service;

use SpeakServer\Objects\SpeakObject;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = $object->getText();
        $this->parseVoice($text);


        $voice = $object->getVoice();
        $from = $object->getFrom();

        $text = $from == null ? $text : $from . ' Says ' . $text;

        exec("espeak -k5 -s150 '$text' -v $voice");
    }

    public function parseVoice(&$text)
    {
        $text = str_replace('\'', '', $text);

        $text = str_replace([':(', ':)'], ['unhappy face', 'happy face'], $text);
    }

}