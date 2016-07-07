<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Custom Delimiter</title>
</head>
<body>
    <form>
        Delimiter: <input type="text" name="delimiter" />
        Input: <textarea name="lines"></textarea>
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET['delimiter']) && isset($_GET['lines'])) {
        $delimiter = $_GET['delimiter'];
        $lines = explode($delimiter, $_GET['lines']);
        $lines = array_map("trim", $lines);
        foreach ($lines as $line) {
            if ($line == "Stop") {
                break;
            }

            echo "$line<br>";
        }
    }
    ?>
</body>
</html>