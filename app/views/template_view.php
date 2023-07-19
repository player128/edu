<html>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="http://192.168.0.104:80/edu/css/norm.css">
        <link rel="stylesheet" href="http://192.168.0.104:80/edu/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script defer src="http://192.168.0.104:80/edu/scripts/user.js"></script>
    </head>
    <body>
        <div class="top">
            <div class="user">
                
            </div>
        </div>
        <div class="content content-center">
        <form class = "form-user form-hide" >
            <input name= "name" type="text">
            <input name="pass" type="text">
            <div class="form-close"></div>
            <div class = "form-send">O</div>
        </form>
        <?php include 'app/views/'.$content_view; ?>
        </div>
        <div class="form-back form-hide"></div>
    </body>
</html>