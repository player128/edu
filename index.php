<?php
namespace edu;
ini_set('display_errors', 1);
use edu\app\core\Route;
require 'vendor/autoload.php';
echo "sdfds";
Route::start(); // запускаем маршрутизатор

function elem($text) {
    echo "<div class='elem elem-text border'>$text</div>";
}
?>
<html>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="css\norm.css">
        <link rel="stylesheet" href="css\style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body>
        <div class="content content-center">
            <?php
                // $dir = 'content';

                // if (is_dir($dir)) {
                //     if ($dh = opendir($dir)) {
                //         while (($file = readdir($dh)) !== false) {
                //             $path = $dir.'\\'.$file;
                //             if (is_dir($path)) {
                //                 if ($file == '.' || $file == '..') continue;
                //                 elem($file);
                //             }
                //         }
                //         closedir($dh);
                //     }
                // }

                // echo is_dir('');
            ?>
        </div>
    </body>
</html>