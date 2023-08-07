$.ajax({
    type: "GET",
    url: 'http://localhost/edu/time/get',
    data: '',
    success: function(response)
    {
        var jsonData = JSON.parse(response);
        if (jsonData == -1) {
            alert('Не получилось..');
            location.reload();
        } else {
            console.log(jsonData);
            load(jsonData);
        }
   }
});

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