<?php


namespace SpeakServer\Service;


class Voices
{
    public function __construct()
    {
        $fp = fopen(__DIR__ . '/../voices.csv', 'r');
        $array = fgetcsv($fp);
        var_dump($array);
    }
}