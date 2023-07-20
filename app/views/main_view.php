<?php
    $dir = 'C:/xampp/htdocs/edu/scripts/user';
    /*
    Подумать над очерденостью загрузки скриптов, чтобы не возникали ошибки undefined
    */
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file == '.' || $file == '..') continue;
                echo "<script defer src='http://192.168.0.104:80/edu/scripts/user/$file'></script>";
            }
            closedir($dh);
        }
    }
?>
<h1>Добро пожаловать!</h1>
<p>
<img src="/images/office-small.jpg" align="left" >
<a href="/">ОЛОЛОША TEAM</a> - команда первоклассных специалистов в области разработки веб-сайтов с многолетним опытом коллекционирования мексиканских масок, бронзовых и каменных статуй из Индии и Цейлона, барельефов и изваяний, созданных мастерами Экваториальной Африки пять-шесть веков назад...
</p>

<?php
// require_once('app/core/login.php');
?>
