<!DOCTYPE html>
<html>
<head>
    <title>N Factorial</title>
</head>
    <form>
        Number: <input type="number" name="num" />
        <input type="submit" value="Calculate factorial" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        $fact = 1;
        for ($i = 2; $i <= $num; $i++) {
            $fact *= $i;
        }

        echo $fact;
    }
    ?>
</html>