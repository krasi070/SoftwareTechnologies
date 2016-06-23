function setValuesToIndexes(arr) {
    let arrLength = Number(arr[0]);
    let array = [];
    let firstIndex = Number(arr[1].split(/ - /)[0]);
    array[firstIndex] = Number(arr[1].split(/ - /)[1]);
    let secondIndex = Number(arr[2].split(/ - /)[0]);
    array[secondIndex] = Number(arr[2].split(/ - /)[1]);
    let thirdIndex = Number(arr[3].split(/ - /)[0]);
    array[thirdIndex] = Number(arr[3].split(/ - /)[1]);
    for (let i = 0; i < arrLength; i++) {
        console.log(array[i] || 0);
    }
}

setValuesToIndexes(['2', '0 - 5', '0 - 6', '0 - 7']);