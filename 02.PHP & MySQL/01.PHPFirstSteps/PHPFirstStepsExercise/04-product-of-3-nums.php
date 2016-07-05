<!DOCTYPE html>
<html>
<head>
    <title>Product of 3 numbers</title>
</head>
<body>
    <form>
        First Number: <input type="number" name="num1" />
        Second Number: <input type="number" name="num2" />
        Third Number: <input type="number" name="num3" />
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
        $negativeCount = 0;
        foreach ($_GET as $num) {
            if ($num < 0) {
                $negativeCount++;
            } else if ($num == 0) {
                $negativeCount = 0;
                break;
            }
        }

        if ($negativeCount % 2 == 0) {
            echo "Positive";
        } else {
            echo "Negative";
        }
    }
    ?>
</body>
</html>