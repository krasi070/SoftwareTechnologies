<!DOCTYPE html>
<html>
<head>
    <title>Odd numbers from N to 1</title>
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
            if ($n % 2 == 1) {
                echo "$n ";
            }
        }
    }
    ?>
</body>
</html>