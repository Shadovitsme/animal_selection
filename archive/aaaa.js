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



// эксперементы с автонастройкой графика
const dataArr = [1,7,10,5,8,4];
//заполнение нулевого элемента
const del = 15;
let nu = dataArr[0]/del;
let sec = dataArr[1]/del;
$("caption").after(`
    <tbody>
        <tr id = '0'>
            <td style="--start: ${nu}; --size: ${sec}">
                <span class="data"> ${dataArr[0]}  </span>
            </td>
        </tr>
        </tbody>`);
        nu = sec;
        sec = dataArr[2]/del;
//цикл заполнения остальных элементов
for (var i = 1; i<dataArr.length; i++) {
    $(`tr#${i-1}`).after(
        `<tr id = "${i}">
            <td style="--start: ${nu}; --size: ${sec}">
                <span class="data"> ${dataArr[i]}  </span>
            </td>
        </tr>`
    )
    nu = sec;
    if (i+1 <= dataArr.length) sec = dataArr[i+1]/del;
}
});