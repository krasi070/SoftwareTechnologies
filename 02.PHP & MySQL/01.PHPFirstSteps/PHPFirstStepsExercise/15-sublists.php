<!DOCTYPE html>
<html>
<head>
    <title>Sub-Lists</title>
</head>
<body>
    <form>
        First Number: <input type="number" name="num1" />
        Second Number: <input type="number" name="num2" />
        <input type="submit" value="Print Sub-Lists">
    </form>
    <ul>
        <?php
        if (isset($_GET['num1']) && $_GET['num2']) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            for ($i = 1; $i <= $num1; $i++) {
        ?>
        <li>
            <?php
            echo "List $i";
            ?>
            <ul>
                <?php
                for ($j = 1; $j <= $num2; $j++) {
                    echo "<li>Element $i.$j</li>";
                }
                ?>
            </ul>
        </li>
        <?php
            }
        }
        ?>
    </ul>
</body>
</html>