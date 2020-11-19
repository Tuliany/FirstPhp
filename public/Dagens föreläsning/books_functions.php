<?php 
declare(strict_types=1);
  function printableTitle(array $book): string {
    
    $result = "<i>{$book['title']}</i> {$book['author']}";
    if(!$book['available']) {
      $result .= "<b> not available</b>";
    }
    return $result;
  };


?>