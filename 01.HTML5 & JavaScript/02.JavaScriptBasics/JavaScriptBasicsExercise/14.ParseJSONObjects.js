function parseJsonObjects(arr) {
    let objects = [];
    for (let i = 0; i < arr.length; i++) {
        objects[i] = JSON.parse(arr[i]);
        console.log(`Name: ${objects[i].name}`);
        console.log(`Age: ${objects[i].age}`);
        console.log(`Date: ${objects[i].date}`);
    }
}

parseJsonObjects(['{"name":"Gosho","age":10,"date":"19/06/2005"}', '{"name":"Tosho","age":11,"date":"04/04/2005"}']);