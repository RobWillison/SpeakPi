<?php
namespace Controllers;

class Login implements GenericController
{

    public function post()
    {

    }

    public function get()
    {
        include __DIR__ . '/../Pages/LoginPage.tpl.php';
    }
}