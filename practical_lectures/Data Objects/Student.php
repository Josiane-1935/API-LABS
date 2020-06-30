<?php
#@TO DO : USE AN our_autoloader
require_once 'RedBeanPHP5_5/rb.php';

class Student{

  #$properties here
  public $id;
  public $admNo;
  public $name;

  public function __construct(){

    //to do : use the congig.json to create connection
    R::setup('mysql:host=localhost;dbname=class_db(api)', 'root','');

    //create schema if it does not exist
    if(countR::find('student') == 0){
      $this->_init();
    }


  }
  private function _init(){
    $student = R::dispense('student');
    $student->admNo = 112657;
    $tudent->name = "Grace Muthengi";
    R::store($student);
  }
  public function getStudents($id){
    return R::load('student', $id);
  }


}
$test = new Student();
echo $test->getStudents(1);
