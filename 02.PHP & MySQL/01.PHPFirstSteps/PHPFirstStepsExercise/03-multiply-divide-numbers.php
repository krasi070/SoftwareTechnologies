<!DOCTYPE html>
<html>
<head>
    <title>Multiply / Divide Numbers</title>
</head>
<body>
    <form>
        First Number: <input type="number" name="num1" />
        Second Number: <input type="number" name="num2" />
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        if ($num1 <= $num2) {
            echo $num1 * $num2;
        } else {
            echo $num1 / $num2;
        }
    }
    ?>
</body>
</html>