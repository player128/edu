$('.user').css({'display':'none'});
$('.top-reg').css({'display':'none'});

$('.form-reg-send').click(function() {
    console.log($('.form-reg').serialize())
    $.ajax({
        type: "POST",
        url: 'http://localhost/edu/app/login/Reg.php',
        data: $('.form-reg').serialize(),
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