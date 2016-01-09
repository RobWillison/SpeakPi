<?php


namespace SpeakServer\Service;


class Voices
{
    private $voices;

    public function __construct()
    {
        $fp = fopen(__DIR__ . '/../voices.csv', 'r');
        while (!feof($fp)) {
            $tempArray = fgetcsv($fp);
            $array[] = ['value' => $tempArray[0], 'name' => $tempArray[1]];
        }
        $this->voices = $array;
    }

    public function getVoices()
    {
        return $this->voices;
    }
}