<?php

class Unit {
  private $name;
  private $attack;
  private $health;

  public function __construct(
    string $name,
    int $attack, 
    int $health
    ){
      $this->name = $name;
      $this->attack = $attack;
      $this->health = $health;
    }
  
  public function getName(): string 
      {
        return $this->name;
      }

  public function getAttack(): int 
    {
      return $this->attack;
    }

  public function removeHealth(int $amount)
    {
      return $this->health -= $amount; 
      if($this->health <=0){
        $this->alive = false;
      }
    }
}

$player3 = new Player("name", 1,2);
echo $player3->getName();
echo $player3->getAttack();
echo $player3->removeHealth(5);

var_dump($player3);

/* ************************************** */
class Player extends Unit{
    public function __construct (
        string $name,
        int $attack,
        int $health
    ) {
        parent::__construct($name, $attack, $health);
    }
    function heal(){
        return $this->health += 10;
    }
}

class Enemy extends Unit {
    public function __construct (
        string $name,
        int $attack,
        int $health
    ) {
        parent::__construct($name, $attack, $health);
    }
    function attackBoost(){
        return $this->attack += 10;
    }
}























?>