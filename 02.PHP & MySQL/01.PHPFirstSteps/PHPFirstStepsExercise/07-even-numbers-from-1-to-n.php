<!DOCTYPE html>
<html>
<head>
    <title>Even numbers from 1 to N</title>
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
            if ($i % 2 == 0) {
                echo "$i ";
            }
        }
    }
    ?>
</body>
</html>