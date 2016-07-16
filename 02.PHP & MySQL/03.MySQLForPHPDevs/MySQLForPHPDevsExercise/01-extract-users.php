<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Extract users</title>
</head>
<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "blog");
    if ($mysqli->connect_errno) {
        die("Error! Failed to connect to MySQL.");
    }

    $mysqli->set_charset("utf8");

    $result = $mysqli->query("SELECT * FROM userstable");
    if (!$result) {
        die("Error! Failed to process query.");
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . htmlspecialchars($row["id"]) . "<br>"
                . "Username: " . htmlspecialchars($row["username"]) . "<br>"
                . "Full name: " . htmlspecialchars($row["fullname"]) . "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
</body>
</html>