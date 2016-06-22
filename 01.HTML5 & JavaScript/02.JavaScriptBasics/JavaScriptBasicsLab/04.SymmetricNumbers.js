function getSymmetricNums(range) {
    let rangeNum = Number(range[0]);
    let result = "";
    for (let i = 1; i <= rangeNum; i++) {
        if (isSymmetric(i + "")) {
            result += i + " ";
        }
    }

    return result;
    function isSymmetric(num) {
        for (let i = 0; i < num.length / 2; i++) {
            if (num[i] != num[num.length - i - 1]) {
                return false;
            }
        }

        return true;
    }
}

console.log(getSymmetricNums(['1000']));