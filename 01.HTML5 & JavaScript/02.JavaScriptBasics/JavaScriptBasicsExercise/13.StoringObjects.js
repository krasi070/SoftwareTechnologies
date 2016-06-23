function storeObjects(arr) {
    let students = [];
    for (let i = 0; i < arr.length; i++) {
        students[i] = {};
        let name = arr[i].split(/ -> /)[0];
        let age = Number(arr[i].split(/ -> /)[1]);
        let grade = Number(arr[i].split(/ -> /)[2]);
        students[i].name = name;
        students[i].age = age;
        students[i].grade = grade;
    }

    for (let i = 0; i < students.length; i++) {
        console.log(`Name: ${students[i].name}`);
        console.log(`Age: ${students[i].age}`);
        console.log(`Grade: ${students[i].grade.toFixed(2)}`);
    }
}