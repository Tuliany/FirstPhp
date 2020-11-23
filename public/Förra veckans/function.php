<?php declare(strict_types=1); 
function printablePeople(array $person): string {
  $result = "<i>{$person['name']}</i>";
 if( $person['height'] > 150 ){
    $result .= "<b> {$person['height']}</b>";
  } 
  return $result;
}


/* function printableWoman(array $women): string {
  //$ladies = "<i>{$women["name"]}</i>";
  $ladies ="";
 if( $women["gender"] == "female" ){
    $ladies .= "<b> {$women["name"]}</b>";
  } 
  return $ladies;
} */

function printableWoman(array $women): string {
 foreach($women as $key => $lady) {
  if ($lady["gender"] === "female"){
    return "<b> {$lady["name"]}</b>";
  }
 }
} 


?>
