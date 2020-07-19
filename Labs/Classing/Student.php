<?php
namespace Classing\Student;
require_once 'RedBeanPHP5_5/rb.php';
//require_once 'autoloader.php';

class Student{

  public $studentAdmNo;
  public $studentFName;
  public $studentLName;
  public $studentCourse;

  public function __construct()
  {

    R::setup( 'mysql:host=localhost;dbname=class_db(api)',
           'root', '');

    $student = R::dispense('students');

  }
  public function GetAll()
  {
     R::getAll( 'SELECT * FROM students');
  }
  public function GetBy($id)
  {
      $book = R::load( 'students', $id );
  }
  public function Add($studentAdmNo, $studentFName,$studentLName,$studentCourse )
  {
    $this->studId = $studentAdmNo;
    $this->studFnane= $studentFName;
    $this->studLname = $studentLName;
    $this->studCourse = $studentCourse;

    //R::exec( 'INSERT INTO students (studentAdmNo,studentFName,studentLName,studentCourse) VALUES ('$this->studId','$this->studFnane','$this->studLname','$this->studCourse') ' );

    $student->studentAdmNo = $this->studId;
    $student->studentFName = $this->studFnane;
    $student->studentLName = $this->studLname;
    $student->studentCourse = $this->studCourse;
    R::store($student);

  }
  public function Remove($student_id)
  {

  }
}
