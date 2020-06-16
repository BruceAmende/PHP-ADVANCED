  <?php
  $kleuren = array("red", "blue", "green", "black", "brown")
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopdracht PHP</title>
</head>
<body>
    <h3>Eindopdracht</h3>

<form name="invoerform" action="advanced-2.php" method="post">

<select name="tekstkleur" id="tekstkleur">
<option selected="selected">Kies tekstkleur:</option>
<?php
  foreach($kleuren as $value) { ?>
    <option value="<?= $value ?>"><?= $value ?></option>
<?php
  } ?>
</select>

<br></br>

<select id="background" name="background" >
<option selected="selected">Kies achtergrondkleur:</option>
<?php
  foreach($kleuren as $value) { ?>
    <option value="<?= $value ?>"><?= $value ?></option>
<?php
  } ?>
</select>

<br></br>

<label>Tabel padding:(PX)</label><br>
  <input type="text"  id="padding" name="padding"><br>
  
<br></br>

<label>Tabel border dikte:(PX)</label><br>
  <input type="text" id="border" name="border"><br>



<br></br>

<input type="submit" value="Verstuur">
</form> 


 
</body>
</html>
 
  



    
