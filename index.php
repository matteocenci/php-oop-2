<?php
require_once __DIR__ . "/classes/category.php";
require_once __DIR__ . "/classes/product.php";

$catCategory = new Category("Gatti", "G" );
$dogCategory = new Category("Cani", "C");
var_dump($catCategory);
var_dump($dogCategory);

$dogFood = new Product("Crocchette", 21.99, $dogCategory, "Immagine");
var_dump($dogFood);
?>