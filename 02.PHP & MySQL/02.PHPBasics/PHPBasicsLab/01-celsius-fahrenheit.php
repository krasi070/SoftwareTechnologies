<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Celsius to Fahrenheit</title>
</head>
<body>
    <?php
    function celsiusToFahrenheit(float $deg) : float
    {
        return $deg * 1.8 + 32;
    }

    function fahrenheitToCelsius(float $deg) : float
    {
        return ($deg - 32) / 1.8;
    }

    $msgAfterCelsius = "";
    if (isset($_GET['cel'])) {
        $cel = floatval($_GET['cel']);
        $fah = celsiusToFahrenheit($cel);
        $msgAfterCelsius = "$cel &deg;C = $fah &deg;F";
    }

    $msgAfterFahrenheit = "";
    if (isset($_GET['fah'])) {
        $fah = floatval($_GET['fah']);
        $cel = fahrenheitToCelsius($fah);
        $msgAfterFahrenheit = "$fah &deg;F = $cel &deg;C";
    }
    ?>
    <form>
        Celsius: <input type="text" name="cel" />
        <input type="submit" value="Convert" />
        <?= $msgAfterCelsius ?>
    </form>
    <form>
        Fahrenheit: <input type="text" name="fah" />
        <input type="submit" value="Convert" />
        <?= $msgAfterFahrenheit ?>
    </form>
</body>
</html>