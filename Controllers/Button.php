<?php
namespace Controllers;

use SpeakServer\Objects\SpeakObject;
use SpeakServer\Service\Speak as Speaker;

class Button implements GenericController
{

    public function post()
    {
        if(isset($_POST['text'])) {
            $this->say();
        }
        if(isset($_POST['addbutton'])) {
            $this->addButton();
        }
    }

    public function say()
    {
        $text = $_POST['text'];

        $speakObject = new SpeakObject();
        $speakObject->addText($text);

        $speaker = new Speaker();
        $speaker->speak($speakObject);
    }

    public function addButton()
    {
        $button = $_POST['addbutton'];
        file_put_contents(__DIR__ . '/../Buttons.txt', $button, FILE_APPEND);

    }

    public function get()
    {
        include __DIR__ . '/../Pages/ButtonsPage.tpl.php';
    }
}