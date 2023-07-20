$('.user').css({'display':'none'});

$('.form-send').click(function() {
    console.log($('.form-user').serialize())
    $.ajax({
        type: "POST",
        url: 'http://localhost/edu/app/login/Reg.php',
        data: $('.form-user').serialize(),
        success: function(response)
        {
            var jsonData = JSON.parse(response);
            if (jsonData == -1) {
                alert('Не получилось..');
                location.reload();
            } else {
                alert('Аккаунт зарегестрирован. Зайдите под аккаунт.');
                window.location = "http://localhost/edu/";
            }
       }
   });
});