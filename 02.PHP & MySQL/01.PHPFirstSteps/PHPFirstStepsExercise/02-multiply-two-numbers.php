<!DOCTYPE html>
<html>
<head>
    <title>Multiply two numbers</title>
</head>
<body>
    <form>
        First Number: <input type="number" name="num1" />
        Second Number: <input type="number" name="num2" />
        <input type="submit" value="Multiply">
    </form>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $product = $num1 * $num2;
        echo $product;
    }
    ?>
</body>
</html>