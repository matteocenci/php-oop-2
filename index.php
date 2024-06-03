<?php
require_once __DIR__ . "/classes/category.php";
require_once __DIR__ . "/classes/product.php";

$catCategory = new Category("Gatti", "G" );
$dogCategory = new Category("Cani", "C");
var_dump($catCategory);
var_dump($dogCategory);

$dogFood = new Product("Crocchette per cani", 21.99, $dogCategory, "Immagine");
$catFood = new Product("Crocchette per gatti", 21.99, $catCategory, "Immagine");
$dogToy = new Product("Giocattolo per cani", 9.99, $dogCategory, "Immagine");
$catToy = new Product("Giocattolo per gatti", 9.99, $catCategory, "Immagine");
$dogBed = new Product("Cuccia per cani", 39.99, $dogCategory, "Immagine");
$catBed = new Product("Cuccia per gatti", 39.99, $catCategory, "Immagine");

var_dump($dogFood);
var_dump($catFood);
var_dump($dogToy);
var_dump($catToy);
var_dump($dogBed);
var_dump($catBed);
?>