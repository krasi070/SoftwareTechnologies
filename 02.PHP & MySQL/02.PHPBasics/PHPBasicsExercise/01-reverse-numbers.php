<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reverse Numbers</title>
</head>
<body>
    <form>
        Delimiter: <input type="text" name="delimiter" />
        Input: <textarea name="numbers"></textarea>
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET['delimiter']) && isset($_GET['numbers'])) {
        $delimiter = $_GET['delimiter'];
        $numbers = $_GET['numbers'];
        $arr = explode($delimiter, $numbers);
        array_map("trim", $arr);
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            echo "$arr[$i]<br>";
        }
    }
    ?>
</body>
</html>