
<?php
use namespace Bookstore\Domain\Book;
use namespace Bookstore\Domain\Customer;

function __autoload($classname){
  $lastSlash= strpos($classname, '\\') + 1;
  $classname = substr($classname, $lastSlash);
  $directory = str_replace('\\', '/', $classname);
  $filename = __DIR__ .'/src/' . $directory . '.php';
  require_once($filename);
}
$book1 = new book("9785267","Amour A Vegas", "Catherine Cooper", 12);
$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@gmail.com');
