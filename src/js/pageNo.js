// var pageNo = 1;


// function indexIncr()
// {
//     pageNo++;
//     console.log(pageNo);
//     var hiddenField = document.getElementById('pageNo');

//     hiddenField.innerHTML = pageNo;
// }

var json_data = {
    "Name": "Anuj"
}

$.ajax({
    type: 'POST',
    url: '/php/httpreq.php',
    data: {json: JSON.stringify(json_data)},
    dataType: 'json',
    success: function(response) {
        console.log(response);
      }
});