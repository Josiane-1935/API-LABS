<?php
namespace Classing\tester;

use Classing\Student;
require_once 'Student.php';


$student = new Student();
$getAll = $student->GetAll(110124,'Heri','Mango','BBIT');
print_r($getAll);


 ?>
