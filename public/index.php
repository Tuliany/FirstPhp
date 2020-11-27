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

$customer1 = new Customer('John', 'Doe', 'joe@mail.com');
$customer2 = new Customer('Pelle', 'jan', 'jan@mail.com');


var_dump($customer1);
var_dump($customer2);

echo Customer::getLastId();

echo $customer2::getLastId();
?>