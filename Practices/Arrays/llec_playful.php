<?php
//ARRAYS-19th May, 2020

#square bracket notation
$students = ["Mango",110124,"Suzy",112376,"Ariane"];

#using the array()
$students = array('Samy',123455);

//associative array
$students_list = [
  123456 => "mongo",
  134588 => "gogo",
  134588 => "gogo1",
  134588 => "gogo2"
// keys are unique, so if you output the array, it will pick the last one 134588 => "gogo2"
  ];
  print_r($students);
  var_dump($students);
