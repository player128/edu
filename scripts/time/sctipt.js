$('.add span').click(function () {
    $('.form-time').removeClass('form-hide');
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

$('.form-time-close').click(function (){
    $('.form-time').addClass('form-hide');
});

// ////
// console.log("===================");
// let array = [
//     1,2,5,6,8,10,12
// ];

// let ob = {
//     min : 5,
//     max : 9,

//     check(n) {
//         return n > this.min && n < this.max;
//     }
// };

// console.log(array.filter(ob.check, ob));