<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function rekenUit($getal1, $getal2, $getal3) {

    $optellen = $getal1 + $getal2 + $getal3;
    return $optellen;
  
  }
  
 $som1 = rekenUit(5, 7, 8);
 echo $som1;
 echo "<br>";
 $som2 = rekenUit(20, 24, 12);
 echo $som2;
 echo "<br>";
 $som3 = rekenUit(90, 4, 56);
 echo $som3;
 echo "<br>";

?>
    
</body>
</html>