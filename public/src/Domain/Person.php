<?php

namespace Bookstore\Domain;

class Person
{
  protected $firstname;
  protected $surname;

  public function __construct(string $firstname, string $surname)
  {
    $this->firstname = $firstname;
    $this->surname = $surname;  
  }

  public function getFirstName() : string 
  {
    return $this->firstname;
  }

   public function getSurName() : string 
  {
    return $this->surname;
  }



}




?>