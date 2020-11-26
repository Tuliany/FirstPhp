<?php
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;

  function autoloader($classname)
    {
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/src/' . $directory . '.php';
    require_once($filename);
    }
  spl_autoload_register('autoloader');

$customer1 = new Customer(1,'John', 'Doe', 'joe@mail.com');


var_dump($customer1);
?>