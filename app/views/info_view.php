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
                    $file = str_replace(".txt", "", $file);
                    $html = <<< _END
                        <li>
                            <a href='http://localhost/edu/text/param/$file'>$file</a>
                        </li>
                    _END;
                    echo $html;
                }
                closedir($dh);
            }
        }
    ?>
</ul>