<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Form</title>
</head>
<body>
    <h2>POST Form</h2>
    <form action="post.php" method="POST">
        Naam: <input type="text" name="naam"><br>
        Achternaam: <input type="text" name="achternaam"><br>
        Leeftijd: <input type="text" name="leeftijd"><br>
        Adres: <input type="text" name="adres"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Verzenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Ingevoerde data:</h2>";
        $naam = isset($_POST["naam"]) ? $_POST["naam"] : "";
        $achternaam = isset($_POST["achternaam"]) ? $_POST["achternaam"] : "";
        $leeftijd = isset($_POST["leeftijd"]) ? $_POST["leeftijd"] : "";
        $adres = isset($_POST["adres"]) ? $_POST["adres"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";

        echo "Naam: " . $naam . "<br>";
        echo "Achternaam: " . $achternaam . "<br>";
        echo "Leeftijd: " . $leeftijd . "<br>";
        echo "Adres: " . $adres . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>

