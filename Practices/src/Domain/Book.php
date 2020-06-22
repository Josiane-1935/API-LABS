<?php
namespace src\Domain;

class Book{

  public $isbn;
  public $title;
  public $author;
  public $available;

  public function __construct(int $isbn, string $title, string $author, int $available = 0){
    $this->isbn = $isbn;
    $this->title = $title;
    $this->author = $author;
    $this->available = $available;
  }
  public function getIsbn() : int {
    return $this->isbn;
  }
  public function getTitle() : string {
    return $this->title;
  }
  public function getAuthor() : string {
    return $this->author;
  }
  public function isAvailable() : bool {
    return $this->available;
  }

  /* one of the MAGIC METHODS, return the string values
  public function __toString() : string{
    $result = '<i>'.$this->title. '</i> -'.$this->author;
    if(!$this->available){
      $result .= '<b> Not available</b>';
    }
    return $result;
  }
  */
  public function __getPrintableTitle() : string{
    $result = '<i>'.$this->title. '</i> -'.$this->author;
    if(!$this->available){
      $result .= '<b> Not available</b>';
    }
    return $result;
  }
  public function getCopy() : bool {
    if($this->available < 1){
      return false;
    }else {
      $this->available--;
      return true;
    }
  }
  public function addCopy() {
    $this->available++;
  }

}
//set values of each property manually
/*
$book = new Book();
$book->title = "1984";
$book->author = "George Orwell";
$book->isbn = 9785267006323;
$book->available = 12;
*/

// you can create as many instances as you need, as long as you assign them to different variables.
/*
$book1 = new Book();
$book1->title = "1984";
$book2 = new Book();
$book2->title = "To kill a Mockingbird";
var_dump($book1, $book2);
*/

//set values of each proprerty using the __construct method
$book = new Book("97835267","title", "George Orwell");
//$string = (string) $book;
if ($book->getCopy()){
  echo 'Here, your copy.';
}else {
  echo 'I am afraid that book is not available.';
}

echo '<br>';
var_dump($book);
echo '<br>';
//print_r($string);

?>
