<?php
if (isset($_POST["submit"]))
{
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$space_position=strpos("name",'');
if ($space_position == false)
{
  $fname=$name;
}else {
  $fname=substr($name,0,$space_position);
}
$greeting=$fname;
if ($age <= 12 and $gender='m')
{
   header("Location: index.php");
   echo "hello child";
}



}



 ?>
