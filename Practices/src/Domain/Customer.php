<?php
namespace src\Domain;


//require_once '../Models/Person.php;
//require_once __DIR__ . '/Person.php';

class Customer extends Person {
  private $id;
  private $email;
  private static $lastId = 0;
  public function __construct(int $id, string $firstname, string $surname, string $email)
    {

      if (empty($id)){
        $this->id = ++self::$lastId;
      }else {
        $this->id = $id;
        if ($id > self::$lastId){
          self::$lastId = $id;
        }
      }
      $this->email = $email;
      parent::__contruct();
    }
  public static function getLastId() : int {
    return self::$lastId;
  }
  public function getId() : int {
    return $this->id;
  }
  public function getEmail() : string {
    return $this->email;
  }
  public function setEmail($email) : string {
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
