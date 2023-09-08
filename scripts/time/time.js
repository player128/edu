// $.ajax({
//     type: "GET",
//     url: 'http://localhost/edu/time/get',
//     data: '',
//     success: function(response)
//     {
//         var jsonData = JSON.parse(response);
//         if (jsonData == -1) {
//             alert('Не получилось..');
//             location.reload();
//         } else {
//             console.log(jsonData);
//             load(jsonData);
//         }
//    }
// });


function load(data) {
    for (row in data) {
        let tr = `
            <tr>
                <td>${data[row]['date']}</td>
                <td>${data[row]['minute']}</td>
            </tr>
        `;
        console.log(data[row]);
        $('table.time tbody').append(tr);
    }
}

function getData() {
    let data;
    $.ajax({
        type: "GET",
        url: 'http://localhost/edu/time/get',
        data: '',
        success: function(response)
        {
            var jsonData = JSON.parse(response);
            if (jsonData == -1) {
                alert('Не получилось..');
                // location.reload();
            } else {
                draw(jsonData);
                //console.log(jsonData);
                // load(jsonData);
            }
        }
    });
    return data;
}

getData();

function draw(data) {

    let a = []
    console.log(typeof data, data)

    for (let i = 1; i <= 30; i++) {
        a[i] = 0;
    }

    for (let obj of data) {
        let str = obj.fields.date;
        let ar = str.split('-');
        let index = Number(ar[2]);
        a[index] = Number(obj.fields.minute);
    }

    console.log(a);
    let days = [];
    for (let i = 1; i <= 30; i++) {
        days[i] = i;
    }

    new Chart( // инициализируем плагин
      document.querySelector('.chart'), // первым параметром передаем элемент canvas по селектору
      // вторым параметром передаем настройки в виде объекта
      { 
        type: 'line', // тип графика, в данном случае линейный
        data: { // общие данные графика в виде объекта
          labels: days, // метки по оси X
          datasets: [ // набор данных, который будет отрисовываться в виде массива с объектами
            { 
                label: 'График повторений', // название для определенного графика в виде строки
                data: a, // данные в виде массива с числами, количество должно совпадать с количеством меток по оси X
                borderColor: 'red'
            }
          ]
        },
        options: {} // дополнительные опции для графика в виде объекта, если не нужны - передаем пустой объект
      }
    );
}

