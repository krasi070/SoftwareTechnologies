function positiveOrNegative(nums) {
    let num1 = Number(nums[0]);
    let num2 = Number(nums[1]);
    let num3 = Number(nums[2]);
    let negativeCount = 0;
    if (num1 < 0)
        negativeCount++;
    if (num2 < 0)
        negativeCount++;
    if (num3 < 0)
        negativeCount++;
    if (negativeCount % 2 == 1)
        console.log('Negative');
    else
        console.log('Positive');
}

positiveOrNegative(['-1', '-2', '2']);