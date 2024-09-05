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


$("button").click(function(){
    let name = document.getElementById('name');
    // let color = document.getElementById('color');
    // let spots = document.getElementById('spots');
    // let features = document.getElementById('features');
    // let ani = new animal(name.value, color.value, spots.value, features.value);

    $(`a#1`).after(
        `<ul>
        <li>
        <a href="#" id =2 > dddd </a>
        </li>
        </ul>`
    )
    return false;
});

