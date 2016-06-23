function workWithKeyValuePairs(arr) {
    let objects = {};
    for (let i = 0; i < arr.length - 1; i++) {
        let key = arr[i].split(/\s+/)[0];
        objects[key] = arr[i].split(/\s+/)[1];
    }

    let key = arr[arr.length - 1];
    console.log(objects[key] || 'None');
}

workWithKeyValuePairs(['key value', 'key eulav', 'test tset', 'key']);