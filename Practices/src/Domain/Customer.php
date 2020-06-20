<?php
namespace Bookstore\Domain;

class Customer{
  private $id;
  private $firstname;
  private $surname;
  private $email;
  private static $lastId = 0;

  public function __contruct(
    int $id,
    string $firstname,
    string $surname,
    string $email
    )
    {
      if ($id == null){
        $this->id = ++self::$lastId;
      }else {
        $this->id = $id;
        if ($id > self::$lastId){
          self::$lastId = $id;
        }
      }
      $this->firstname = $firstname;
      $this->surname = $surname;
      $this->email = $email;
    }
  public function getId() : int {
    return $this->id;
  }
  public static function getLastId() : int {
    return self::$lastId;
  }
  public function getFirstname() : string {
    return $this->firstname;
  }
  public function getSurname() : string {
    return $this->surname;
  }
  public function getEmail() : string {
    return $this->email;
  }
  public function setEmail(string $email){
    $this->email = $email;

  }
}
Customer::getLastId();
//$customer1::getLastId();

$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@gmail.com');
$customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@gmail.com');
$customer3 = new Customer(null, 'May', 'Pins', 'maypins@gmail.com');

var_dump($customer1, $customer2, $customer3);
 ?>
