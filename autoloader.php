<?php

function loadDirectory($name)
{
    $files = scandir($name);

    foreach ($files as $file) {

        if(($file == '.') || ($file == '..')) {
            continue;
        }

        if (is_dir($file)) {
            loadDirectory($file);
        } else {
            require_once $file;
        }
    }

}

loadDirectory('Controllers');
var_dump('hello');die;
loadDirectory('SpeakServer');
