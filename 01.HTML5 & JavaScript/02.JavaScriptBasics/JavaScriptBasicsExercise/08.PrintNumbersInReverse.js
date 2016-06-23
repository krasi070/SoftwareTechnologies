function printNumbersInReverse(nums) {
    for (let i = nums.length - 1; i >= 0; i--) {
        console.log(nums[i]);
    }
}

printNumbersInReverse(['1', '-2', '12', '5']);