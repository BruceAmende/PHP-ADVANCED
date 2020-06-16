<?php
function maakRij($ik, $table = true)
{
    $out = '';
    foreach ($ik as $key => $value) {
        if (is_array($value)) {
            if (!isset($tableHeader)) {
                $tableHeader = 
                    '<th>' .
                    implode('</th><th>', array_keys($value)) .
                    '</th>';
            }
            array_keys($value);
            $out .= '<tr>';
            $out .= maakRij($value, false);
            $out .= '</tr>';
        } else {
            $out .= "<td>$value</td>";
        }
    }

    if ($table) {
        return '<table>' .   $out . '</table>';
    } else {
        return $out;
    }
}


    $ik = array ("Naam" => "Bruce",
    "Leeftijd" => 17,
    "Muzieksmaak" => "Hip-Hop/Rap",
    "Woonplaats" => "Amstelveen",
    "Sport"  => "Fitness");
    ?>

  

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Mij</title>
</head>
<body style="background-color:<?php  echo $_POST["background"]; ?>;" >
<style>
body {
    color: <?php  echo $_POST["tekstkleur"]; ?>
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: <?php  echo $_POST["border"]; ?>  solid black;
  text-align: left;
  padding: <?php  echo $_POST["padding"]; ?>
}
tr:nth-child(even) {
  background-color:"green";
  
}
</style>
       

<table>
<th>Naam</th>
<th>Leeftijd</th>
<th>Muzieksmaak</th>
<th>Sport</th>
</table>

<?php

print maakRij($ik);
?>
    

</body>
</html>



  


    

  
  


