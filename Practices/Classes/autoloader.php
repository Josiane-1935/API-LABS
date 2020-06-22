<?php


use Inheritance\Domain\Pops;
use Inheritance\Domain\Child;

require_once __DIR__ . '/Pops.php';
require_once __DIR__ . '/Child.php';

$child= new Child();
$pops = new Pops();
echo $child->sayHi();
echo "<br/>";
echo $pops->sayHi();
?>
