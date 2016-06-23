function printKeyWithMultipleValues(arr) {
    let objects = {};
    for (let i = 0; i < arr.length - 1; i++) {
        let key = arr[i].split(/\s+/)[0];
        if (objects[key]) {
            objects[key][objects[key].length] = arr[i].split(/\s+/)[1];
        } else {
            objects[key] = [];
            objects[key][0] = arr[i].split(/\s+/)[1];
        }
    }

    let key = arr[arr.length - 1];
    if (objects[key]) {
        for (let obj of objects[key]) {
            console.log(obj);
        }
    } else {
        console.log('None');
    }
}

printKeyWithMultipleValues(['key value', 'key eulav', 'test tset', 'key']);