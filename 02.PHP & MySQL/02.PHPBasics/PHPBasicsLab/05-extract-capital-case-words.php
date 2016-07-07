<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Extract Capital-Case Words</title>
</head>
<body>
    <?php
    if (isset($_GET['text'])) {
        $text = $_GET['text'];
        preg_match_all('/\w+/', $text, $words);
        $words = $words[0];
        $upperWords = array_filter($words, "isUpperWord");
        echo implode(", ", $upperWords);
    }

    function isUpperWord($word)
    {
        return strtoupper($word) == $word;
    }
    ?>
    <form>
        <textarea rows="10" style="width: 400px" name="text"></textarea>
        <br>
        <input type="submit" value="Extract" />
    </form>
</body>
</html>