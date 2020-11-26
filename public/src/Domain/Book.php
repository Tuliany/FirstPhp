<?php

namespace Bookstore\Domain;

class Book
{
  public $isbn;
  public $title;
  public $author;
  public $available;

  public function __construct(
    string $title,
    string $author,
    float $isbn,
    int $available
  ){
    $this->title = $title;
    $this->author = $author;
    $this->isbn = $isbn;
    $this->available = $available;
  }


  public function printableTitle(): string
  {
      $result = "<i>{$this->title}</i> 
      {$this->author}";
      if(!$this->available) {
        $result .= "<b> not available</b>";
      }
      return $result;
  }

  public function getCopy(): bool
  {
    if($this->available < 1){
      return false;
    } else {
      $this->available--;
      return true;
    }
  }
}

//$book = new Book("1984","George Orwell", 123456, 12);
//$book2 = new Book("1984","George Orwell", 123456, 0);


//var_dump($book, $book2);
?>