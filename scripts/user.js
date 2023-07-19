$('.user').click(function() {
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
            console.log(response);
            // пользователь успешно вошел в систему в серверной части                
            // давайте перенаправим

       }
   });
});