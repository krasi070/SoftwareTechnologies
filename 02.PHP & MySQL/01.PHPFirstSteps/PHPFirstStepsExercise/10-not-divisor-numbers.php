<!DOCTYPE html>
<html>
<head>
    <title>Not divisor numbers</title>
</head>
<body>
    <form>
        Number: <input type="number" name="num" />
        <input type="submit" value="Print Numbers" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        for ($i = 1; $i <= $num; $i++) {
            $n = $num - $i + 1;
            if ($num % $n != 0) {
                echo "$n ";
            }
        }
    }
    ?>
</body>
</html>