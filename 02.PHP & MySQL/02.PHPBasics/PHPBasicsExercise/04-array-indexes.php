<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array Indexes</title>
</head>
<body>
    <form>
        Delimiter: <input type="text" name="delimiter" />
        Key-Value pairs: <textarea name="key-value-pairs"></textarea>
        Array size: <input type="number" name="array-size" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET['delimiter']) && isset($_GET['key-value-pairs']) && isset($_GET['array-size'])) {
        $delimiter = $_GET['delimiter'];
        $size = $_GET['array-size'];
        $pairs = explode("\n", $_GET['key-value-pairs']);
        $pairs = array_map("trim", $pairs);
        $pairs = array_filter($pairs);
        $arr = [];
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = 0;
        }

        foreach ($pairs as $pair) {
            $tokens = explode($delimiter, $pair);
            $key = $tokens[0];
            $value = $tokens[1];
            $arr[$key] = $value;
        }

        for ($i = 0; $i < $size; $i++) {
            echo "$arr[$i]<br>";
        }
    }
    ?>
</body>
</html>