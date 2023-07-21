<ul>
    <?php
        $dir = 'C:/xampp/htdocs/edu/contents/'.$data;
        /*
        Подумать над очерденостью загрузки скриптов, чтобы не возникали ошибки undefined
        */

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file == '.' || $file == '..') continue;
                    echo "<li>$file</li>";
                }
                closedir($dh);
            }
        }
    ?>
</ul>