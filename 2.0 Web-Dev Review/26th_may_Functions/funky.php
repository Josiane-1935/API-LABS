<?php

function NameAgeReturner($name,$age,$greetMe=false)
{
  //echo $name.' '.$age;
  return $name.' '.$age;
}
$Age=NameAgeReturner("mango",34);
var_dump($Age);
 ?>
