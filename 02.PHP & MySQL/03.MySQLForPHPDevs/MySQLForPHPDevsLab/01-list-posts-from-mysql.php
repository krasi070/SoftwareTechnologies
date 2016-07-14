<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List Posts from MySQL</title>
    <style>
        td, th {
            background: #DDD;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "blog");
    $mysqli->set_charset("utf8");
    $result = $mysqli->query("SELECT * FROM posts");
    if (!$result) {
        die("Cannot read `posts` table from MySQL");
    }

    echo "<table>\n";
    echo "<tr><th>Title</th><th>Content</th><th>Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $title = htmlspecialchars($row["title"]);
        $content = htmlspecialchars($row["content"]);
        $date = (new DateTime($row["date"]))->format("d.m.Y");
        echo "<tr><td>$title</td><td>$content</td><td>$date</td></tr>";
    }

    echo "</table>\n";
    ?>
</body>
</html>