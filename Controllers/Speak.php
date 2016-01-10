<?php
namespace Controllers;

namespace Controllers;
use SpeakServer\Objects\SpeakObject;
use SpeakServer\Service\Speak as Speaker;

class Speak implements GenericController
{

    public function post()
    {
        $text = str_replace('\'', '', $_POST['text']);
        var_dump($text);die;
        $speakObject = new SpeakObject();
        $speakObject->setFrom($_SESSION['name']);
        $speakObject->addText($text);

        $speaker = new Speaker();
        $speaker->speak($speakObject);
    }

    public function get()
    {
        include __DIR__ . '/../Pages/mainPage.tpl.php';
    }
}