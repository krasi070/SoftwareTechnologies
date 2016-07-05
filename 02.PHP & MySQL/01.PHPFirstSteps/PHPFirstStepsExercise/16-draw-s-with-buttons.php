<!DOCTYPE html>
<html>
<head>
    <title>Draw an S with buttons</title>
</head>
<body>
    <?php
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($i == 0 || $i == 4 || $i == 8) {
                echo "<button style='background-color: blue'>1</button>";
            } else if ($i > 0 && $i < 4 && $j == 0) {
                echo "<button style='background-color: blue'>1</button>";
            } else if ($i > 4 && $i < 8 && $j == 4) {
                echo "<button style='background-color: blue'>1</button>";
            } else {
                echo "<button>0</button>";
            }
        }

        echo "<br>";
    }
    ?>
</body>
</html>