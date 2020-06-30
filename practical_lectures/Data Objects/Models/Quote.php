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
    var_dump($result->fetch_row());

    return (new \Konekta())

  }
}

$first_quote = new Quote();
$bad_id = "12 OR '1 = 1'";
//$first_quote->getQuote($bad_id);
Quote::getCount();
