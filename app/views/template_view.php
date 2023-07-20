<html>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="http://192.168.0.104:80/edu/css/norm.css">
        <link rel="stylesheet" href="http://192.168.0.104:80/edu/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body>
        <div class="top">\
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
        <form class = "form-user form-hide" >
            <div class = "label-name-form">Авторизация</div>
            <div class = "label-name">Имя:</div>
            <div>
                <input name= "name" type="text">
            </div>
            <div class = "label-pass">Пароль:</div>
            <div>
                <input name="pass" type="text">
            </div>
            <div class="form-close">X</div>
            <div class = "form-send">O</div>
        </form>
        <?php include 'app/views/'.$content_view; ?>
        </div>
        <div class="form-back form-hide"></div>
    </body>
</html>