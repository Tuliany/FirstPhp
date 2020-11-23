<?php 
if(empty($_POST['fullname'])) {
  echo "no name sent";
} else {
  $name = trim($_POST['fullname']);
  $email =$_POST['email'];
  $msg = $_POST['message'];
}
//var_dump($name, $email, $msg);

$output ="<h1>Välkommen $name </h3>";
$output .= "<a href="mailto:$email"> $email </a>";
$output .= "<p>$msg</p>";

echo $output;

?>