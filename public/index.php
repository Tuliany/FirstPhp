<?php
include_once'Book.php';
include_once'Custumor.php';

 $book = new Book("1984","George Orwell", 123456, 0);
$customer1 = new Customer(1,'John', 'Doe', 'joe@mail.com');



echo $customer1->setEmail("ab@mail.com");
var_dump($customer1);
?>