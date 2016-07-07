<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sort Lines</title>
</head>
<body>
    <?php
    function isNotEmpty($line)
    {
        return $line != "";
    }

    $sortedLines = "";
    if (isset($_GET['lines'])) {
        $lines = explode("\n", $_GET['lines']);
        $lines = array_map("trim", $lines);
        $lines = array_filter($lines, "isNotEmpty");
        sort($lines, SORT_STRING);
        $sortedLines = join("\n", $lines);
    }
    ?>
    <form>
        <textarea rows="10" name="lines"><?= $sortedLines ?></textarea>
        <br>
        <input type="submit" value="Sort">
    </form>
</body>
</html>