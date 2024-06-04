<?php
// require_once __DIR__ . "/classes/category.php";
// // require_once __DIR__ . "/classes/product.php";
// require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/typeProduct.php";





$dogFood = new Food("Crocchette per cani", -1, $dogCategory, "Immagine");
$toyDog = new Toy("Giocattolo per cani", 9.99, $dogCategory, "Immagine");
$dogBed = new Bed("Cuccia per cani", 49.99, $dogCategory, "Immagine");
$catFood = new Food("Cibo per gatti", 19.99, $catCategory, "Immagine");
$toyCat = new Toy("Giocattolo per gatti", 9.99, $catCategory, "Immagine");
$catBed = new Bed("Cuccia per gatti", 49.99, $catCategory, "Immagine");

// $catFood = new Product("Crocchette per gatti", 21.99, $catCategory, "Immagine");
// $dogToy = new Product("Giocattolo per cani", 9.99, $dogCategory, "Immagine");
// $catToy = new Product("Giocattolo per gatti", 9.99, $catCategory, "Immagine");
// $dogBed = new Product("Cuccia per cani", 39.99, $dogCategory, "Immagine");
// $catBed = new Product("Cuccia per gatti", 39.99, $catCategory, "Immagine");

// var_dump($dogFood);
// var_dump($catFood);
// var_dump($toyDog);
// var_dump($toyCat);
// var_dump($dogBed);
// var_dump($catBed);
echo $dogFood->getTitle();
echo "<br>";
echo $dogFood->getPrice();
echo "<br>";
echo $dogFood->getCategory();
echo "<br>";

?>


