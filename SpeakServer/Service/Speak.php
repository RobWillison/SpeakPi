<?php

namespace SpeakServer;

class Speak
{

    public function speak(SpeakObject $object)
    {
        $text = addslashes($object->getText());

        exec(" echo '$text' | festival --tts");
    }

}