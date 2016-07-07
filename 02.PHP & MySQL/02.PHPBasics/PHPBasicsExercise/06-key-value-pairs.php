<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Key - Value Pairs</title>
</head>
<body>
    <form>
        Key-Value pairs: <textarea name="key-value-pairs"></textarea>
        Delimiter: <input type="text" name="delimiter" />
        Target-Key: <input type="text" name="target-key" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET['key-value-pairs']) && isset($_GET['delimiter']) && isset($_GET['target-key'])) {
        $delimiter = $_GET['delimiter'];
        $targetKey = $_GET['target-key'];
        $pairs = explode("\n", $_GET['key-value-pairs']);
        $pairs = array_map("trim", $pairs);
        $pairs = array_filter($pairs);

        $arr = [];
        foreach ($pairs as $pair) {
            $tokens = explode($delimiter, $pair);
            $key = $tokens[0];
            $value = $tokens[1];
            $arr[$key] = $value;
        }

        if (isset($arr[$targetKey])) {
            echo $arr[$targetKey];
        } else {
            echo "None";
        }
    }
    ?>
</body>
</html>