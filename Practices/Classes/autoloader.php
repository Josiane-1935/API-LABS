<?php


use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

$book1 = new book("9785267","Amour A Vegas", "Catherine Cooper", 12);
$book2 = new book("9780061","To kill a Mockingbird", "Harper Lee", 2);
$book1->available = 2;
$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@gmail.com');
$customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@gmail.com');
$customer3 = new Customer(null, 'May', 'Pins', 'maypins@gmail.com');
var_dump($book1,$book2);
echo '<br>';
var_dump($customer1, $customer3);
