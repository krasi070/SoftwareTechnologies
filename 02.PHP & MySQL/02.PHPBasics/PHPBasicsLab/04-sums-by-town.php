<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sums by town</title>
</head>
<body>
    <?php
    if (isset($_GET['towns-incomes'])) {
        $townsIncomes = explode("\n", $_GET['towns-incomes']);
        $townsIncomes = array_map("trim", $townsIncomes);
        $townsIncomes = array_filter($townsIncomes, "isNotEmpty");
        $sumsByTown = calcSumsByTown($townsIncomes);
        foreach ($sumsByTown as $town => $sum) {
            echo "$town -> $sum<br>\n";
        }
    }

    function calcSumsByTown(array $townsIncomes) : array
    {
        $sums = [];
        foreach ($townsIncomes as $townIncome) {
            $tokens = explode(":", $townIncome);
            $town = $tokens[0];
            $income = $tokens[1];
            if (isset($sums[$town])) {
                $sums[$town] += $income;
            } else {
                $sums[$town] = $income;
            }
        }

        ksort($sums);
        return $sums;
    }

    function isNotEmpty($line)
    {
        return $line != "";
    }
    ?>
    <form>
        <textarea rows="10" name="towns-incomes"></textarea>
        <br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>