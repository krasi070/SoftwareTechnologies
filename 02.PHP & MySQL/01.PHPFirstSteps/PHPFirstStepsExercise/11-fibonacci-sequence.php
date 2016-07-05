<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci sequence</title>
</head>
<body>
    <form>
        Number: <input type="number" name="num" />
        <input type="submit" value="Print Fibonacci Sequence" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        $fib1 = 0;
        $fib2 = 1;
        for ($i = 0; $i < $num; $i++) {
            echo "$fib2 ";
            $temp = $fib1;
            $fib1 = $fib2;
            $fib2 += $temp;
        }
    }
    ?>
</body>
</html>