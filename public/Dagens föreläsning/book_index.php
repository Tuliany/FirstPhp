<?php 
declare(strict_types=1);
require_once 'functions.php' 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Filmanipulering</title>
</head>
<body>
<h1>Books</h1>
<h3>Books below</h3>
<?php 

  $booksJson = file_get_contents('books.json');
  $books = json_decode($booksJson, true);
  //var_dump($books);

?>
<ul>
  <?php  foreach($books as $book) {?>
    <li><?php echo printableTitle($book); ?></li>
    
  <?php } ?>
</ul>
  
</body>
</html>