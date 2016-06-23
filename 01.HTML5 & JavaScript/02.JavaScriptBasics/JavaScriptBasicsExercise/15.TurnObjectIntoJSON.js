function turnObjectIntoJSON(arr) {
    let object = {};
    object.name = arr[0].split(/ -> /)[1];
    object.surname = arr[1].split(/ -> /)[1];
    object.age = Number(arr[2].split(/ -> /)[1]);
    object.grade = Number(arr[3].split(/ -> /)[1]);
    object.date = arr[4].split(/ -> /)[1];
    object.town = arr[5].split(/ -> /)[1];
    console.log(JSON.stringify(object));
}

turnObjectIntoJSON(['name -> Angel', 'surname -> Georgiev', 'age -> 20', 'grade -> 6.00', 'date -> 23/05/1995', 'town -> Sofia']);