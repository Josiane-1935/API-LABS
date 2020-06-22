
<?php

use \src\Domain\Book;
use \src\Domain\Customer\Customer;

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Customer.php';


/* using __autoload function
function __autoload($classname){
  $lastSlash= strpos($classname, '\\') + 1;
  $classname = substr($classname, $lastSlash);
  $directory = str_replace('\\', '/', $classname);
  $filename = __DIR__ .'/src/' . $directory . '.php';
  require_once($filename);
}
$book1 = new book("9785267","Amour A Vegas", "Catherine Cooper", 12);
$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@gmail.com');
*/

// using the spl_autoload_register function

  function autoloader($classname){
    $lastSlash = strpos($classname, '\\') ;
    $classname=substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
    require_once($filename);
  }
  spl_autoload_register('autoloader');

  function checkIfValid(Customer $customer, array $books) : bool {
    return $customer->getAmountToBorrow() >= count ($books);
  }
  $customer1 = new Basic(5, 'John', 'Doe', 'johndoe@gmail.com');
  var_dump(checkIfValid($customer1, [$book1]));
  $customer2 = new Customer(7, 'James', 'Bond', 'jamesbond@gmail.com');
  var_dump(checkIfValid($customer2, [$book1]));
