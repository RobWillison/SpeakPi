<?php

function loadDirectory($dir)
{
    $files = scandir($dir);

    foreach ($files as $file) {

        if(($file == '.') || ($file == '..')) {
            continue;
        }
        var_dump($dir . '/' . $file);
        if (is_dir($dir . '/' . $file)) {
            loadDirectory($dir . '/' . $file);
        } else {
            require_once $dir . '/' . $file;
        }
    }
}

loadDirectory('SpeakServer');
die;
loadDirectory('Controllers');

