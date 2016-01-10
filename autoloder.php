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
            var_dump($file);die;
            require_once $file;
        }
    }

}

loadDirectory('Controllers');
loadDirectory('SpeakServer');
