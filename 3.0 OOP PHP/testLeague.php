<?php
require_once 'vendor/autoload.php';
use League\Csv\Reader;
use League\Csv\Writer;
use League\Csv\Statement;

$csv = Reader::createFromPath('student-data-1.csv', 'r');
$csv->setHeaderOffset(0);
$stmt=(new Statement())
     ->limit(25);
$records = $stmt->process($csv);
foreach ($records as $record) {
  print_r($record);
  print'<br/>';

}
//var_dump($records);
