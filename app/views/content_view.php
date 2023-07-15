<?php
    $dir = 'contents';

    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                $path = $dir.'\\'.$file;
                if (is_dir($path)) {
                    if ($file == '.' || $file == '..') continue;
                    elem($file);
                }
            }
            closedir($dh);
        }
    }

    function elem($text) {
        echo "<div class='elem elem-text border'>$text</div>";
    }
?>