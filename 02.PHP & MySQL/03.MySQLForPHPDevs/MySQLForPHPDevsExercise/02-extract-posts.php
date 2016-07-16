<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Extract posts</title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    die("Error! Failed to connect to MySQL.");
}

$mysqli->set_charset("utf8");

$result = $mysqli->query("SELECT * FROM poststable");
if (!$result) {
    die("Error! Failed to process query.");
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["post_id"] . "<br>"
            . "Title: " . $row["title"] . "<br>"
            . "Content: " . $row["content"] . "<br>"
            . "Date: " . $row['date'] . "<br>";
    }
} else {
    echo "0 results";
}
?>
</body>
</html>