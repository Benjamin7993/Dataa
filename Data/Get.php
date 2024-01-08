<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Form</title>
</head>
<body>
    <h2>GET Form</h2>
    <form action="get.php" method="GET">
        Naam: <input type="text" name="naam"><br>
        Achternaam: <input type="text" name="achternaam"><br>
        Leeftijd: <input type="text" name="leeftijd"><br>
        Adres: <input type="text" name="adres"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Verzenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h2>Ingevoerde data:</h2>";
        $naam = isset($_GET["naam"]) ? $_GET["naam"] : "";
        $achternaam = isset($_GET["achternaam"]) ? $_GET["achternaam"] : "";
        $leeftijd = isset($_GET["leeftijd"]) ? $_GET["leeftijd"] : "";
        $adres = isset($_GET["adres"]) ? $_GET["adres"] : "";
        $email = isset($_GET["email"]) ? $_GET["email"] : "";

        echo "Naam: " . $naam . "<br>";
        echo "Achternaam: " . $achternaam . "<br>";
        echo "Leeftijd: " . $leeftijd . "<br>";
        echo "Adres: " . $adres . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>
