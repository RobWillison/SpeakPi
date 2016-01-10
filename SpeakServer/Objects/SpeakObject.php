<?php
namespace SpeakServer\Objects;

class SpeakObject
{
    private $text;
    private $voice = 'en';
    private $from = null;
    private $gender;

    const MALE = 0;
    const FEMALE = 1;

    public function addText($text) {
        $this->text .= $text;
    }

    public function getText() {
        return $this->text;
    }

    public function setFrom($name) {
        $this->from = $name;
        if (in_array($name, ['Emily', 'Priyanka'])) {
            $this->setVoice('en+f3');
        }
    }

    public function setGender($gender) {
        if($gender == MALE){
            $this->gender = '';
        } else {
            $this->gender = '+f3';
        }
    }

    public function getGenderExtension() {
        return $this->gender;
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