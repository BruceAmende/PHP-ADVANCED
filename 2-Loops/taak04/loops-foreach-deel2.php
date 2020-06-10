

<?php


$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
?>

<!DOCTYPE html>
<html>
<body>



<form action="/action_page.php">
  <label for="fname">Voornaam:</label><br>
  <input type="text" id="fname" name="fname" value="naam"><br>
  <label for="lname">Achternaam:</label><br>
  <select name="per1" id="per1">
  <option selected="selected">Kies klas</option>
  <?php
    foreach($klassen as $value) { ?>
      <option value="<?= $value ?>"><?= $value ?></option>
  <?php
    } ?>
</select> 
  <input type="text" id="lname" name="lname" value="achternaam"><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
