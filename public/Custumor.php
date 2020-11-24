<?php
class Customer
{
  private $id;
  private $firstname;
  private $surname;
  private $email;

  public function __construct(
    int $id,
    string $firstname,
    string $surname,
    string $email
    ) {
    $this->id = $id;
    $this->firstname = $firstname;
    $this->surname = $surname;
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
  

  }





?>