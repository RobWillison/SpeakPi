<?php

function loadDirectory($dir)
{
    $files = scandir($dir);

    foreach ($files as $file) {

        if(($file == '.') || ($file == '..')) {
            continue;
        }

        if (is_dir($file)) {
            loadDirectory($dir . '/' . $file);
        } else {
            var_dump($file);
            require_once $dir . '/' . $file;
        }
    }die;

}

loadDirectory('Controllers');
var_dump('hello');die;
loadDirectory('SpeakServer');
