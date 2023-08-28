$('.add span').click(function () {
    $('.form-time').css({'display':'block'});
});

$('.form-time-send').click(function () {
    $.ajax({
        type: "POST",
        url: 'http://localhost/edu/time/add',
        data: $('.form-time').serialize(),
        success: function(response)
        {   
            var jsonData = JSON.parse(response);
            if (jsonData == -1) {
                alert('Не получилось..');
            } else {
                // alert('Аккаунт зарегестрирован. Зайдите под аккаунт.');
                // window.location = "http://localhost/edu/";
                alert(jsonData);
            }
            location.reload();
       }
   });
});


$('.form-time').css({'display':'none'});