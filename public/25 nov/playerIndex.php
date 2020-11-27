<?php 
//include_once'Player.php';
include_once'Unit.php';

$unit = new Unit('bob', 15, 150);
$unit2 = new Unit('rob', 25, 350);

$unit->removeHealth($unit2->getAttack());

var_dump($unit);

//var_dump($player3);

?>