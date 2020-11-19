<?php declare(strict_types=1); 
function printablePeople(array $person): string {
  $result = "<i>{$person['name']}</i>";
 if( $person['height'] > 150 ){
    $result .= "<b>{person.['height']}</b>";
  } 
  return $result;
}


?>
