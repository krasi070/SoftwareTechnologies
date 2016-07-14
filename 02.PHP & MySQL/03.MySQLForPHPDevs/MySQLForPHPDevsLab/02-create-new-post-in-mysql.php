<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create new post in MySQL</title>
</head>
<body>
    <form>
        <div>Title</div>
        <div><input type="text" name="title" /></div>
        <div>Content</div>
        <div><textarea name="content"></textarea></div>
        <div><input type="submit" value="Post" /></div>
    </form>
    <?php
    if (isset($_GET["title"]) && isset($_GET["content"])) {
        $title = $_GET["title"];
        $content = $_GET["content"];
        $mysqli = new mysqli("localhost", "root", "", "blog");
        $mysqli->set_charset("utf8");
        $statement = $mysqli->prepare("INSERT INTO blog.posts(title, content) VALUES (?, ?)");
        $statement->bind_param("ss", $title, $content);
        $statement->execute();
        if ($statement->affected_rows == 1) {
            echo "Post created.";
        } else {
            die("Insert post failed.");
        }
    }
    ?>
</body>
</html>