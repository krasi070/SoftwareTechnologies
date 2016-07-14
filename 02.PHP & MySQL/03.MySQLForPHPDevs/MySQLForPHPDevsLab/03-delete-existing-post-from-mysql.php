<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete existing post from MySQL</title>
</head>
<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "blog");
    $mysqli->set_charset("utf8");

    if (isset($_GET["id"])) {
        $statement = $mysqli->prepare("DELETE FROM posts WHERE id = ?");
        $statement->bind_param("i", $_GET["id"]);
        $statement->execute();
        if ($statement->affected_rows == 1) {
            echo "Post deleted.";
        }
    }

    $result = $mysqli->query("SELECT id, title FROM posts");
    while ($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $deleteLink = "03-delete-existing-post-from-mysql.php?id=" . $row["id"];
        echo "<p><a href='$deleteLink'>Delete post. $title</a></p>";
    }
    ?>
</body>
</html>