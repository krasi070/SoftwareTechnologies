<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Object to JSON String</title>
</head>
<body>
    <form>
        Input: <textarea name="input"></textarea>
        Delimiter: <input type="text" name="delimiter" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET['input']) && isset($_GET['delimiter'])) {
        $delimiter = $_GET['delimiter'];
        $lines = explode("\n", $_GET['input']);
        $lines = array_map("trim", $lines);
        $lines = array_filter($lines);
        $object = [];
        foreach ($lines as $line) {
            $tokens = explode($delimiter, $line);
            $key = $tokens[0];
            $value = $tokens[1];
            if ($key == "age") {
                $value = intval($value);
            } else if ($key == "grade") {
                $value = floatval($value);
            }

            $object[$key] = $value;
        }

        echo json_encode($object, JSON_UNESCAPED_SLASHES);
    }
    ?>
</body>
</html>