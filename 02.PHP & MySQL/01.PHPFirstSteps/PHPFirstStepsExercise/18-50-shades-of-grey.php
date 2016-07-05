<!DOCTYPE html>
<html>
<head>
    <title>50 Shades of Grey</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 0; $i < 255; $i += 51) {
        for ($j = 0; $j < 50; $j += 5) {
            $color = $i + $j;
            echo "<div style=\"background-color: rgb($color, $color, $color);\"></div>";
        }

        echo "<br>";
    }
    ?>
</body>
</html>