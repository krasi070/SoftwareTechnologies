<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prepare function</title>
</head>
<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "blog");
    if ($mysqli->connect_errno) {
        die("Error! Failed to connect to MySQL.");
    }

    $mysqli->set_charset("utf8");

    $statement = $mysqli->prepare("INSERT INTO userstable (username, password, fullname) VALUES (?, ?, ?)");
    $username = "Greta";
    $password = md5("IchLiebeWurtschen");
    $fullName = "Greta Berghoffen";
    $statement->bind_param("sss", $username, $password, $fullName);
    $statement->execute();
    if ($statement->affected_rows == 1) {
        echo "User successfully created!";
    } else {
        die("Inserting user failed!");
    }
    ?>
</body>
</html>