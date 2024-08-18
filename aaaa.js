$(document).ready(function () {
    $.ajaxSetup({
        url: "ttps://jsonplaceholder.typicode.com/posts",
        context: $(".content"),
        404: function () {
            alert("not found");
        },
        success: [function () {
            $("button").text("done");
        }],
        error: function (xhr) {
            console.log('1');
            alert(`Error ${xhr.status} error text ${xhr.statusText}`);
        },
    })
    $("button").click(function () {
        $.ajax();

    });
});


// эксперементы с автонастройкой графика
const attr = $('td[style]');
console.log(attr);