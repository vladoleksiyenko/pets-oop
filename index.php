<?php

// Include the class file
require('pet.php');
require('dog.php');



// Instantiate a pet object
$pet1 = new Pet('Pluto', 'pink');
$pet2 = new Pet('Bob');
$pet3 = new Pet();

echo "<pre>";
var_dump($pet1);
var_dump($pet2);
var_dump($pet3);
echo "</pre>";

// Invoke the eat method
$pet1 -> eat();

$pet1 -> sleep();

$pet1 -> talk();

$pet1 -> setName("Mark");

echo $pet1 -> getName();

$dog_1 = new Dog("John", "Brown");

var_dump($dog_1);

$dog_1 -> fetch();