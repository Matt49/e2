<?php

require 'Catalog.php';

$catalog = new Catalog('products.json');

//$product = $catalog->getById($_GET['productId']);


$product = $catalog->getById(9);

//var_dump($catalog->products);
//var_dump($catalog->getAll());

var_dump($catalog->searchByName('ee'));
