function getLargest3Nums(arr) {
    let nums = arr.map(Number);
    nums.sort((a, b) => b-a);
    let length = Math.min(3, nums.length);
    for (let i = 0; i < length; i++) {
        console.log(nums[i]);
    }
}

getLargest3Nums(['10', '30', '15', '20', '50', '5']);