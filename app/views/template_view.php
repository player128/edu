<html>
    <head>
        <?php
        global $host;
        ?>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="<?="http://$host/edu/css/norm.css"?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <?php
            use \Edu\app\core\File;

            $file = new File();
            $file->loadScript('template');
            $file->loadStyle('template');
        ?>
    </head>
    <body>
        <div class="top">
            <div class="top-main">
                <a href="<?="http://$host/edu"?>">На главную</a>
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
                    <a href="<?="http://$host/edu/info"?>">Контент</a>
                </div>
                <div class="time">
                    <a href="<?="http://$host/edu/time"?>">График</a>
                </div>
                <div class="game">
                    <a href="<?="http://$host/edu/game"?>">Игра</a>
                </div>
                <div class="video">
                    <a href="<?="http://$host/edu/video"?>">Видео</a>
                </div>
                <div class="chat">
                    <a href="<?="http://$host/edu/chat"?>">Чат</a>
                </div>
                <hr>
            </div>
            <?php include 'app/views/'.$content_view; ?>
        </div>
        <div class="myform-back form-hide"></div>
    </body>
</html>