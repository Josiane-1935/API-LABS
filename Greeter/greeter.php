<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="greeter.css">
</head>
<body>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <h2>Salimia Me</h2>
<div id="my_form" >
<div id="age">
<label for="age">Age: </label>
<input type="number" id="age" name="age" min="5" max="80" required>
</div>
<div id="gender">
<label for="gender"> Gender: </label>
<input type="radio" id="male" name="gender" value="M">Male
<input type="radio" id="female" name="gender" value="F">Female
</div>
<div id="button">
<input type="submit" name="submit" value="Salimia me">
</div>
</div>
</form>

<?php
//isset($_POST['rowID']) ? $_POST['rowID'] : '';
if (isset($_POST['submit'])) {
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  if ($age <= 12 && $gender=="M") {
    echo "Child";
  }
  elseif ($age<=12 && $gender=="F") {
    echo "Young lady";
  }
  elseif ($age>=13 && $age<=19 && $gender=="M") {
    echo "Adolescent";
  }
  elseif ($age>=13 && $age<=19 && $gender=="F") {
    echo "Teenie";
  }
  elseif ($age>=20 && $age<=30 && $gender=="M") {
    echo "Youth";
  }
  elseif ($age>=20 && $age<=30 && $gender=="F") {
    echo "Miss";
  }
  elseif ($age>30 && $gender=="F") {
    echo "Woman";
  }
  else {
    echo "Mzito";
  }
}

 ?>

</body>
</html>
