<?php

function loadDirectory($dir)
{
    $files = scandir($dir);

    foreach ($files as $file) {

        if(($file == '.') || ($file == '..')) {
            continue;
        }
        if (is_dir($dir . '/' . $file)) {
            loadDirectory($dir . '/' . $file);
        } else {
            $file_parts = pathinfo($dir . '/' . $file);
            if($file_parts['extension'] == 'php') {
                require_once $dir . '/' . $file;
            }
        }
    }
}

loadDirectory('SpeakServer');
loadDirectory('Controllers');

