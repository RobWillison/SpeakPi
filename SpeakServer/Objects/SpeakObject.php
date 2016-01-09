<?php
namespace SpeakServer\Objects;

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