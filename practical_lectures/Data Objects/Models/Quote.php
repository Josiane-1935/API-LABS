<?php
namespace models;
require_once '../our_autoloader.php';
class Quote{
  private $db;
  public $qid;
  public $quote;
  public $author;
  public $dob;
  public $dod;
  public $category;

  public function __construct(){
    #connect to the database
    $this->db = new \Konekta();
  }
  public function getQuote($id){
    $id = $this->db->konn->real_escape_string($id);
    $sql = "SELECT * FROM quote WHERE quid=$id";

    #execute
    $result = $this->db->konn->query($sql);
    $row = $result->fetch_row();
    $this->qid = $row[0];
    $this->quote = $row[1];
  }
  public static function getCount(){
    $db = (new \Konekta()); // we add the slash if the file does not have a namespace
    $sql = "SELECT COUNT(*) as count FROM quote";
    $result = $db->konn->query($sql);
    $row = $result->fetch_row();
    echo $count = $row[0];

    /*return (new \Konekta())
                         ->konn
                         ->query("SELECT COUNT(*) as count FROM quote")
                         ->fetch_row()[0];*/

  }
}

$first_quote = new Quote();
$good_id = " 1";
//$first_quote->getQuote($good_id);
Quote::getCount();
