<?php
    use \Edu\app\core\File;

    $file = new File();
    $file->loadScript('reg');
    $file->loadStyle('reg');
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