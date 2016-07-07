<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exclude Towns</title>
</head>
<body>
    <?php
    if (isset($_GET['towns']) && isset($_GET['townsToExclude'])) {
        $towns = explode("\n", $_GET['towns']);
        $towns = array_map("trim", $towns);
        $towns = array_filter($towns, "isNotEmpty");

        $townsToExclude = explode("\n", $_GET['townsToExclude']);
        $townsToExclude = array_map("trim", $townsToExclude);
        $townsToExclude = array_filter($townsToExclude, "isNotEmpty");

        $remainingTowns = excludeFromArray($towns, $townsToExclude);
        printAsList($remainingTowns);
    } else {
    ?>
        <form>
            <div style="display: inline-block">
                <div>Towns</div>
                <textarea rows="10" name="towns"></textarea>
            </div>
            <div style="display: inline-block">
                <div>Towns to exclude</div>
                <textarea rows="10" name="townsToExclude"></textarea>
            </div>
            <div>
                <input type="submit" value="Exclude" />
            </div>
        </form>
    <?php
    }
    ?>
    <?php
    function isNotEmpty($line)
    {
        return $line != "";
    }

    function excludeFromArray(array $arr, array $excludeFromArray) : array
    {
        $result = [];
        foreach ($arr as $item) {
            if (!in_array($item, $excludeFromArray)) {
                $result[] = $item;
            }
        }

        return $result;
    }

    function printAsList(array $arr)
    {
        echo "<ul>\n";
        foreach ($arr as $item) {
            echo "<li>$item</li>\n";
        }

        echo "</ul>\n";
    }
    ?>
</body>
</html>