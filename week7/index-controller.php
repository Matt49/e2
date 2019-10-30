<?php

require 'Catalog.php';
require 'Person.php';


$catalog = new Catalog('products.json');

$product = $catalog->getById(9);

var_dump($catalog->searchByName('Cheerios'));


$person = new Person;
$person->firstName = 'Matt';
$person->lastName = 'Griffing';
$person->age = 48;

//echo $person->firstName;

$person->summary();
