<?php
namespace SpeakServer\Objects;

class SpeakObject
{
    private $text;
    private $voice;
    private $from;

    public function addText($text) {
        $this->text .= $text;
    }

    public function getText() {
        return $this->text;
    }

    public function setFrom($name) {
        $this->from = $name;
        if ($name === 'Emily') {
            $this->setVoice('en+f3');
        }
    }

    public function getFrom() {
        return $this->from;
    }

    public function getVoice() {
        return $this->voice;
    }

    public function setVoice($voice) {
        $this->voice = $voice;
    }
}