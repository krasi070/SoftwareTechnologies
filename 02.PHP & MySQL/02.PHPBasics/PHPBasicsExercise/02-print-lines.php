<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Print Lines</title>
</head>
<body>
    <form>
        Input: <textarea name="lines"></textarea>
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET['lines'])) {
        $lines = explode("\n", $_GET['lines']);
        $lines = array_map("trim", $lines);
        for ($i = 0; $i < count($lines); $i++) {
            if ($lines[$i] == "Stop") {
                break;
            }

            echo "$lines[$i]<br>";
        }
    }
    ?>
</body>
</html>