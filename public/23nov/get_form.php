<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get Form</title>
</head>
<body>
  <?php if(empty($_GET['fullname'])) : ?>
  <h1>Kontakta oss</h1>
  <form action="#" method="GET">
    <label for="fullname">Namn:</label>
    <input type="text" name="fullname">
    <label for ="email">E-post:</label>
    <input type="email" name="email">
    <label for="message">Meddelande: </label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <button type="submit">Skicka</button>
  </form>
  
<?php  
    else:   
        /*       
              echo "<pre>";
              var_dump($_GET);
              echo "</pre>"; 
        */

      $name = trim($_GET['fullname']);
      $email =$_GET['email'];
      $msg = $_GET['message'];
    //var_dump($name, $email, $msg);

      $output ="<h1>Välkommen $name </h3>";
      $output .= "<a href='mailto:$email'> $email </a>";
      $output .= "<p>$msg</p>";

      echo $output;

    endif;

  ?>
</body>
</html>