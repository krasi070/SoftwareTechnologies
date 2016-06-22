function sumThreeInts(arr) {
    let nums = arr[0].split(/\s+/).filter(x => x != "").map(Number);
    return check(nums[0], nums[1], nums[2]) ||
            check(nums[1], nums[2], nums[0]) ||
            check(nums[2], nums[0], nums[1]) ||
            'No';
    function check(num1, num2, num3) {
        if (num1 + num2 != num3) {
            return false;
        }

        if (num1 > num2) {
            [num1, num2] = [num2, num1];
        }

        return `${num1} + ${num2} = ${num3}`;
    }
}

console.log(sumThreeInts(['8 15 7']));