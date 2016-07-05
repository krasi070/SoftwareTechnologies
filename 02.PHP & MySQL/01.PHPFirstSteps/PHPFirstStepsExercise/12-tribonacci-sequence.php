<!DOCTYPE html>
<html>
<head>
    <title>Tribonacci sequence</title>
</head>
<body>
    <form>
        Number: <input type="number" name="num" />
        <input type="submit" value="Print Tribonacci Sequence" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        $trib1 = 0;
        $trib2 = 0;
        $trib3 = 1;
        for ($i = 0; $i < $num; $i++) {
            echo "$trib3 ";
            $temp1 = $trib1;
            $temp2 = $trib2;
            $trib1 = $trib2;
            $trib2 = $trib3;
            $trib3 += $temp1 + $temp2;
        }
    }
    ?>
</body>
</html>