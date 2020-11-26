<?php 
include_once'Player.php';

class Unit extends Player
{
  private $name;
  private $attack;
  private $health;

 public function __construct(
   string $name,
   int $attack,
   int $health
 ) {
   parent::__construct($name);

   $this->attack = $attack;
   $this->health = $health;
 }

  public function getAttack(): int 
  {
    return $this->attack;
  }

  public function removeHealth(int $amount)
  {
    return $this->health -= $amount; 
  }
}

?>