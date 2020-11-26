<?php
namespace Bookstore\Domain;

class Customer extends Person
{
  private $id;
  private $email;

  public function __construct(
    int $id,
    string $firstname,
    string $surname,
    string $email
    ) {
    parent::__construct($firstname, $surname);

    $this->id = $id;
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