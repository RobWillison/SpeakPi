<?php
namespace SpeakServer\Objects;

class SpeakObject
{
    private $text;
    private $voice;

    public function addText($text) {
        $this->text .= $text;
    }

    public function getText() {
        return $this->text;
    }

    public function getVoice() {
        return $this->voice;
    }

    public function setVoice($voice) {
        $this->voice = $voice;
    }
}