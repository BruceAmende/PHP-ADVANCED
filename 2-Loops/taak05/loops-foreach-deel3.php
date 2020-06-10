

<?php
$klassen = array(
        $student  = array (
        "voornaam" => "Jan",
        "achternaam" => "Janssen",
        "klas" => "9A",
        "Leeftijd" => 17,
        "Woonplaats" => "Amstelveen" 
    );

foreach($klassen as $key => $value) {
     
  }


?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<table>
  <tr>
    <th>Naam</th>
    <th>Lengte</th>
    
  </tr>
  <tr>
    <td><?php echo $key;     ?></td>
    <td><?php echo $value; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $key;     ?></td>
    <td><?php echo $value; ?></td>

  </tr>
  <tr>
    <td><?php echo $key;     ?></td>
    <td><?php echo $value; ?></td>
  </tr>
  <tr>
    <td><?php echo $key;     ?></td>
    <td><?php echo $value; ?></td>
  </tr>
  
 
  
</table>

</body>
</html>