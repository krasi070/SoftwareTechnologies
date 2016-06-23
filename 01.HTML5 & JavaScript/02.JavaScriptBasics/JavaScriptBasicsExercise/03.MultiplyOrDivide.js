function multiplyOrDivideByGivenNumber(nums) {
    let n = Number(nums[0]);
    let x = Number(nums[1]);
    if (x >= n)
        console.log(n * x);
    else
        console.log(n / x);
}