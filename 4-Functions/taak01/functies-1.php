<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
function schrijfKleur($kleur) {

    echo "Deze tekst heeft de kleur:" .  "<font color='$kleur'>" .$kleur."</font>";
   
  
  }


  schrijfKleur("red"); echo "<br>";
  schrijfKleur("blue"); echo "<br>";
  schrijfKleur("orange"); echo "<br>";
  schrijfKleur("green"); echo "<br>";
  

?>
    
</body>
</html>