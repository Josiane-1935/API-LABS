<?php
if (isset($_POST["submit"]))
{
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$space_position=strpos("name",' ');
if ($space_position == false)
{
  $fname=$name;
}else {
  $fname=substr($name,0,$space_position);
}
$greeting=$fname;
if ($age <= 12 and $gender='m')
{
   $output="hello child ${greeting}";
   echo $output;
   echo $gender;
}
elseif ($age <= 12 and $gender='f') {
  $output="hello childish ${greeting}";
  echo $output;
   echo $gender;
}
elseif ($age >= 13 and $age <=19 and $gender='m') {
  $output="hello Teenie ${greeting}";
  echo $output;
}
elseif ($age >= 13 and $age <=19 and $gender='f') {
  $output="hello Teenie Teenie ${greeting}";
  echo $output;
}
elseif ($age >= 20 and $age <=30 and $gender='m') {
  $output="hello Youth ${greeting}";
  echo $output;
}
elseif ($age >= 20 and $age <=30 and $gender='f') {
  $output="hello Youthyyyy ${greeting}";
  echo $output;
}
elseif ($age >=31 and $gender='f') {
  $output="hello Great Woman ${greeting}";
  echo $output;
}
else {
  $output="hello Great Man ${greeting} ";
  echo $output;
}



}



 ?>
