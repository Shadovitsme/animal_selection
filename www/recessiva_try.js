class animal{
    constructor(name, color, spots, features, mother, father, male){
        this.name = name;
        this.color = color;
        this.spots = spots;
        this.features = features;
        this.mother = mother;
        this.father = father;
        this.male = male;
    }
};
//добавить ссылку на мать и отца добавить расчет степени родства при нажатии на элемент
// 

$("button").click(function(){
    let name = document.getElementById('name');
    let color = document.getElementById('color');
    let spots = document.getElementById('spots');
    let features = document.getElementById('features');
    let ani = new animal(name.value, color.value, spots.value, features.value);
    console.log(name);
    let i =0;
    $(`tr#${i}`).after(
        `<tr id = ${i++}>
        <td>${ani.name}</td>
        <td>${ani.color}</td>
        <td>${ani.spots}</td>
        <td>${ani.features}</td>
        </tr>`
    )
    i++;
    return false;
});
