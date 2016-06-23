function addAndRemoveElements(arr) {
    let array = [];
    let length = 0;
    for (let i = 0; i < arr.length; i++) {
        let command = arr[i].split(/\s+/)[0];
        let argument = Number(arr[i].split(/\s+/)[1]);
        if (command == 'add') {
            array[length] = argument;
            length++;
        } else {
            if (array[argument]) {
                array[argument] = undefined;
                resetArray();
                length--;
            }
        }
    }

    for (let i = 0; i < length; i++) {
        console.log(array[i]);
    }

    function resetArray() {
        for (let i = 0; i < length; i++) {
            if (!array[i]) {
                array[i] = array[i + 1];
                array[i + 1] = undefined;
            }
        }
    }
}

addAndRemoveElements(['add 3', 'add 5', 'remove 2', 'remove 0', 'add 7']);