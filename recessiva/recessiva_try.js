class animal{
    constructor(name, color, spots, features){
        this.name = name;
        this.color = color;
        this.spots = spots;
        this.features = features;
    }
};
//добавить ссылку на мать и отца добавить расчет степени родства при нажатии на элемент

let ani = new animal("ягода","red", "a lot of", "wgite tale" );
console.log(ani);
let i =0;
$(`tr#${i}`).after(
    `   <td>${ani.name}</td>
        <td>${ani.color}</td>
        <td>${ani.spots}</td>
        <td>${ani.features}</td>`
)