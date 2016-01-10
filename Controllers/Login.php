<?php
namespace Controllers;

class Login implements GenericController
{

    public function post()
    {
        echo 'Hello';
    }

    public function get()
    {
        include __DIR__ . '/../Pages/LoginPage.tpl.php';
    }
}