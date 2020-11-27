<?php
namespace Bookstore\Domain;

class Customer extends Person
{
  private $id;
  private $email;
  private static $lastId = 0;

  public function __construct(
    string $firstname,
    string $surname,
    string $email,
    int $id = null
    ) {
      if($id === null) {
        $this->id = ++self::$lastId;
      } else {
        $this->id =$id;
        if($id > self::$lastId){
          self::$lastId = $id;
        }
      }
    parent::__construct($firstname, $surname);
    $this->email = $email;
    }
  

    public function getId(): int
    {
      return $this->id;
    }
    public function setEmail(string $email)
    {
      $this->email = $email;
    }
    public static function getLastId(){
      return self::$lastId;
    }
  }





?>