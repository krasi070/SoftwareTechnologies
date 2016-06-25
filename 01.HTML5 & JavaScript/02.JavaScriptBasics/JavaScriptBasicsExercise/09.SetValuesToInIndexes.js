function setValuesToIndexes(arr) {
    let arrLength = Number(arr[0]);
    let array = [];
    for (let i = 1; i < arr.length; i++) {
        let index = Number(arr[i].split(/ - /)[0]);
        array[index] = Number(arr[i].split(/ - /)[1]);
    }

    for (let i = 0; i < arrLength; i++) {
        console.log(array[i] || 0);
    }
}

setValuesToIndexes(['2', '0 - 5', '0 - 6', '0 - 7']);