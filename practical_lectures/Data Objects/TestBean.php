<?php

require_once 'RedBeanPHP5_5/rb.php';

R::setup('mysql:host=localhost;dbname=class_db(api)', 'root','');

$book = R::dispense('book');

$book->title = "Data Objects";
$book->pages = 120;
$book->isbn = '10906474899';
$book->author = 'Don Kamoya';
$book->price = 'KES 10,000';

$id = R::store($book);
