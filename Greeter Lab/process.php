<?php
//isset($_POST['rowID']) ? $_POST['rowID'] : '';
if (isset($_POST['submit'])) {
  $all_name = $_POST['full-name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  /*Getting the first name if it exists*/
$space_position = strpos($all_name,' ');

if($space_position == false){
  $first_name =  $all_name;
}else{
  $first_name =  substr($all_name,0,$space_position);
}
$greeting = $first_name;
  if ($age <= 12 && $gender=="M") {
    echo "Child ${greeting}";
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
