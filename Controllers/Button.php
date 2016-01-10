<?php
namespace Controllers;

namespace Controllers;
use SpeakServer\Objects\SpeakObject;
use SpeakServer\Service\Speak as Speaker;

class Button implements GenericController
{

    public function post()
    {
        $text = $_POST['text'];

        $speakObject = new SpeakObject();
        $speakObject->addText($text);

        $speaker = new Speaker();
        $speaker->speak($speakObject);
    }

    public function get()
    {
        include __DIR__ . '/../Pages/ButtonsPage.php.tpl.php';
    }
}