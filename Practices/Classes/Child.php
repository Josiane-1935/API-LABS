<?php
namespace Inheritance\Domain;
/*
class Child extends Pops {

  public $greetchild;

  public function SayHi($greetchild) : string{
    $this->greetchild = $greetchild;
  }
}
 $child = new Child;
 $greeter = $child->SayHi("Hello Child");
 echo $greeter;
 */
 class Child extends Pops {
   public function sayHi(){
     echo "Hi, I am a child.";
     parent::sayHi();
   }
 }
 $pops = new Pops();
 $child = new Child();
 //echo $pops->sayHi();
 //echo $child->sayHi();
