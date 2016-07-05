<!DOCTYPE html>
<html>
<head>
    <title>HTML Buttons</title>
</head>
<body>
    <form>
        Number: <input type="number" name="num" />
        <input type="submit" value="Print Buttons" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        for ($i = 1; $i <= $num; $i++) {
            echo "<button>$i</button>";
        }
    }
    ?>
</body>
</html>