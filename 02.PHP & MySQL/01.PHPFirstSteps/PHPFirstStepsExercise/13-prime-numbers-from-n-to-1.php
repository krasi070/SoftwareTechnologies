<!DOCTYPE html>
<html>
<head>
    <title>Prime numbers from N to 1</title>
</head>
<body>
    <form>
        Number: <input type="number" name="num" />
        <input type="submit" value="Print Prime Numbers" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        for ($i = 1; $i <= $num; $i++) {
            $n = $num - $i + 1;
            if (isPrime($n)) {
                echo "$n ";
            }
        }
    }

    function isPrime($num)
    {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }

        return true;
    }
    ?>
</body>
</html>