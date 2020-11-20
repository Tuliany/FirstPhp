<?php 
declare(strict_types=1);
  function printableTitle(array $book): string {
    
    $result = "<i>{$book['title']}</i> {$book['author']}";
    if(!$book['available']) {
      $result .= "<b> not available</b>";
    }
    return $result;
  };

  function bookingBook(array &$books, string $title): bool {
    foreach($books as $key => $book){
      if($book['title'] == $title){
        if($book['available']){
          $books[$key]['available'] = false;
          return true;
        } else {
          return false;
        }        
      }
    }
    return false;
  }

  function updateBook(array $books){
    $booksJson = json_encode($books);
    file_put_contents('books.json', $booksJson);
  }


?>