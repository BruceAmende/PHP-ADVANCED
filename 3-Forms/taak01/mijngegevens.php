<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn gegevens</title>
</head>
<body>

<?php

        echo "Voornaam is:" . $_POST["voornaam"];
        echo "Achternaam is:" . $_POST["achternaam"];
        echo "Klas is:" . $_POST["klas"];
        echo "Leeftijd is:" . $_POST["leeftijd"];
        echo "Adres is:" . $_POST["adres"];
        echo "Plaatsnaam is:" . $_POST["pnaam"];
        echo "Muziekband  is:" . $_POST["band"];


?>


    
</body>
</html>