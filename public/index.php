<?php 
declare(strict_types=1);
require_once 'function.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>People API</title>
</head>
<body>
<h1>People</h1>


<?php 
  $peopleJson = file_get_contents('people.json');
  $people = json_decode($peopleJson, true);
  //var_dump($people);
?>  
<ul>
<?php foreach($people as $person) {?>
 <li><?php echo printablePeople($person); ?></li>
  <?php } ?>
</ul>
</body>
</html>