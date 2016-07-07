<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dates</title>
</head>
<body>
    <form>
        Commands: <textarea name="commands"></textarea>
        Date: <input type="text" name="date" />
        Format: <input type="text" name="format" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET['commands']) && isset($_GET['date']) && isset($_GET['format'])) {
        $format = $_GET['format'];
        $date = DateTime::createFromFormat("d/m/Y", $_GET['date']);
        $commands = explode("\n", $_GET['commands']);
        $commands = array_map("trim", $commands);
        $commands = array_filter($commands);
        foreach ($commands as $command) {
            $tokens = explode(" ", $command);
            $type = $tokens[0];
            $argument = $tokens[1];
            if ($type == "add") {
                $date->modify("+$argument days");
            } else {
                $date->modify("-$argument days");
            }
        }

        echo $date->format($format);
    }
    ?>
</body>
</html>