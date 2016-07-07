<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add / Remove Elements</title>
</head>
<body>
    <form>
        Commands: <textarea name="commands"></textarea>
        Delimiter: <input type="text" name="delimiter" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET['commands']) && isset($_GET['delimiter'])) {
        $delimiter = $_GET['delimiter'];
        $commands = explode("\n", $_GET['commands']);
        $commands = array_map("trim", $commands);
        $commands = array_filter($commands);
        $arr = [];
        foreach ($commands as $command) {
            $tokens = explode($delimiter, $command);
            $type = $tokens[0];
            $num = $tokens[1];
            if ($type == "add") {
                $arr[] = $num;
            } else {
                $arr[$num] = null;
                $arr = fixArray($arr);
            }
        }

        foreach ($arr as $item) {
            if ($item != null) {
                echo "$item<br>";
            }
        }
    }

    function fixArray(array $arr) : array
    {
        $newArr = [];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] != null) {
                $newArr[] = $arr[$i];
            }
        }

        return $newArr;
    }
    ?>
</body>
</html>