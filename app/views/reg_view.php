<?php
    $dir = 'C:/xampp/htdocs/edu/scripts/reg';
    /*
    Подумать над очерденостью загрузки скриптов, чтобы не возникали ошибки undefined
    */
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file == '.' || $file == '..') continue;
                echo "<script defer src='http://192.168.0.104:80/edu/scripts/reg/$file'></script>";
            }
            closedir($dh);
        }
    }
?>
<form class = "myform form-reg" >
    <div class = "myform-label-name-form">Регистрация</div>
    <div class = "label-name">Имя:</div>
    <div>
        <input name= "name" type="text">
    </div>
    <div class = "label-pass">Пароль:</div>
    <div>
        <input name="pass" type="text">
    </div>
    <div class = "myform-send form-reg-send">O</div>
</form>