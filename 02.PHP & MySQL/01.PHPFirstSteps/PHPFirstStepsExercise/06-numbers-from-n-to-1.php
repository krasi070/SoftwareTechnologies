<!DOCTYPE html>
<html>
<head>
    <title>Numbers from N to 1</title>
</head>
<body>
    <form>
        Number: <input type="number" name="num" />
        <input type="submit" value="Print Numbers" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        for ($i = $num; $i > 0; $i--) {
            echo "$i ";
        }
    }
    ?>
</body>
</html>