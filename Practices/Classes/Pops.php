<?php
namespace Inheritance\Domain;
/*
class Pops {
  public $greet;
  public function SayHi($greet) : string {
    $this->greet = $greet;  
  }
}
$pops = new Pops();
$greeting= $pops->SayHi("hello Pops");
echo $greeting;
*/

class Pops {
  public function sayHi () {
    echo "Hi, I am pops.";
  }
}
