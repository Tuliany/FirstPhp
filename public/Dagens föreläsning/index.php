<?php 
declare(strict_types=1);
require_once 'books_functions.php' 
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
  //var_dump($_GET);
  if(isset($_GET['title'])){
    echo "<p>Looking for <b>{$_GET['title']}</b></p>";
    if(bookingBook($books, $_GET['title'])){
      echo "booked";
    } else {
      echo "the book is not available";
    }
    updateBook($books);
  }

?>
<ul>
  <?php  foreach($books as $book) {?>
    <li><a href="?title=<?php echo $book['title']; ?> ">
    <?php echo printableTitle($book); ?></li>
    </a>
  <?php } ?>
</ul>
  
</body>
</html>