<?php


class Login implements GenericController
{

    public function post()
    {

    }

    public function get()
    {
        echo 'Hello';
        include '../Pages/LoginPage.tpl.php';
    }
}