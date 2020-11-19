<?php declare(strict_types=1); 
function printablePeople(array $person): string {
  $result = "<i>{$person['results']}</i>";
 /*  if( $peeps['height'] > 150 ){
    $result .= "<b>{peeps.['height']}</b>";
  } */
  return $result;
}


?>
