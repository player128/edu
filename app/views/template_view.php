<html>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="http://192.168.0.104:80/edu/css/norm.css">
        <link rel="stylesheet" href="http://192.168.0.104:80/edu/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <?php
            use \Edu\app\core\File;

            $folder = 'template';
            $file = new File();
            $file->loadScript($folder);
        ?>
    </head>
    <body>
        <div class="top">
            <div class="top-main">
                <a href="http://localhost/edu/">На главную</a>
            </div>
            <div class="user">
                
            </div>
            <div class="top-reg form-hide">
                Регистрация
            </div>
        </div>
        <div class="content content-center">
        <form class = "myform form-user form-hide" >
            <div class = "myform-label-name-form">Авторизация</div>
            <div class = "label-name">Имя:</div>
            <div>
                <input name= "name" type="text">
            </div>
            <div class = "label-pass">Пароль:</div>
            <div>
                <input name="pass" type="text">
            </div>
            <div class="myform-close form-user-close">X</div>
            <div class = "myform-send form-user-send">O</div>
        </form>
        <div class="menu-user form-hide">
            <div class="logout">Выйти</div>
        </div>
        <div class="menu-top">
            <div class="info">
                <a href="http://localhost/edu/info">Контент</a>
            </div>
            <div>Text2</div>
            <div>Text3</div>
            <div>Text4</div>
            <div>Text5</div>
            <hr>
        </div>
        <?php include 'app/views/'.$content_view; ?>
        </div>
        <div class="myform-back form-hide"></div>
    </body>
</html>