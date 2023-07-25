$('.user').click(function() {
    if (isLogin()) {
        logOut();
        location.reload();
        return true;
    }
    $('.form-user').removeClass('form-hide');
    $('.myform-back').removeClass('form-hide');
});

$('.form-user-close').click(function() {
    $('.form-user').addClass('form-hide');
    $('.myform-back').addClass('form-hide');
});

$('.top-reg').click(function() {
    window.location = "http://localhost/edu/reg";
});

$('.form-user-send').click(function() {
    console.log($('.form-user-send').serialize())
    $.ajax({
        type: "POST",
        url: 'http://localhost/edu/auth',
        data: $('.form-user').serialize(),
        success: function(response)
        {
            var jsonData = JSON.parse(response);
            let name = jsonData['name'];
            let login = jsonData['login'];
            console.log(response);
            if (login == 1) {
                // 3 дня жизни куки
                logIn(name);
                location.reload();
            } else {
                alert('Неверный логин или пароль!');
                location.reload();
            }
       }
   });
});

function logIn(name) {
    setCookie('login', 1, {'max-age' : '259200'});
    setCookie('name', name, {'max-age' : '259200'});
}

function logOut() {
    deleteCookie('login');
    deleteCookie('name');
}

function isLogin() {
    return getCookie('login') ? true : false;
}

function putUserBlock() {
    let content = "";
    if (isLogin()) {
        let name = getCookie('name');
        content = name + '<br>(Выйти)';
    } else {
        content = "Войти";
        $('.top-reg').removeClass('form-hide');
    }

    $('.user').html('<p>' + content + '</p>');
}

putUserBlock();
