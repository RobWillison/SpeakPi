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
            require_once $dir . '/' . $file;
        }
    }

}

loadDirectory('Controllers');
//loadDirectory('SpeakServer');
