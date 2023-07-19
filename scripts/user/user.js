$('.user').click(function() {
    if (isLogin()) return true;
    $('.form-user').removeClass('form-hide');
    $('.form-back').removeClass('form-hide');
});

$('.form-close').click(function() {
    $('.form-user').addClass('form-hide');
    $('.form-back').addClass('form-hide');
});

$('.form-send').click(function() {
    console.log($('.form-user').serialize())
    $.ajax({
        type: "POST",
        url: 'http://localhost/edu/app/login/Login.php',
        data: $('.form-user').serialize(),
        success: function(response)
        {
            var jsonData = JSON.parse(response);
            let name = jsonData['name'];
            let login = jsonData['login'];
            console.log(response);
            if (login == 1) {
                // 3 дня жизни куки
                setCookie('login', 1, {'max-age' : '259200'});
                setCookie('name', name, {'max-age' : '259200'});
                location.reload();
            } else {
                alert('Неверный логин или пароль!');
                location.reload();
            }
       }
   });
});

function isLogin() {
    return getCookie('login') ? true : false;
}

let content = "";
if (isLogin()) {
    let name = getCookie('name');
    content = name;
} else {
    content = "Войти";
}

$('.user').html('<p>' + content + '</p>');