<?php

namespace SpeakServer\Service;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = addslashes($object->getText());

        exec(" echo '$text' | festival --tts");
    }

}