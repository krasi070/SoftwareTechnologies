<!DOCTYPE html>
<html>
<head>
    <title>Multiply a number by 2</title>
</head>
<body>
    <form>
        Number: <input type="number" name="num" />
        <input type="submit" value="Multiply by 2" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        echo $num * 2;
    }
    ?>
</body>
</html>