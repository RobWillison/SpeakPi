<?php
namespace SpeakServer;

class SpeakObject
{
    private $text;

    public function addText($text) {
        $this->text .= $text;
    }

    public function getText() {
        return $this->text;
    }
}