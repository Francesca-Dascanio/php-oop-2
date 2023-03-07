<?php
require_once __DIR__.'/classes/category.php';
require_once __DIR__.'/classes/product.php';
require_once __DIR__.'/classes/food.php';
require_once __DIR__.'/classes/toy.php';

// Variabile vuota
$notAccepted = [];

// Istanze dalla classe Categoria
$dog = new Category('Dog');
$cat = new Category('Cat');
$bird = new Category('Bird');
$fish = new Category('Fish');
$reptile = new Category('Reptiles');


// Istanze dalla classe prodotti
$bed = new Product('Comfy Dog Bed', 1, 36.10, 'https://www.refinery29.com/images/10629943.jpg?crop=40%3A21', 'Beds', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque varius tellus, ac consectetur orci.', $dog);

$dryFood = new Food ('Dry Food for fatties', 2, 12.99, 'https://assets.petco.com/petco/image/upload/f_auto,q_auto/2161211-center-1', 'Food', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque varius tellus, ac consectetur orci.', $cat, '12/03/2021');

$catToy = new Toy ('Wild Mouse with LED Eyes', 3, 6.59, 'https://m.media-amazon.com/images/I/51-EG8QtZLL.jpg', 'Toys', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque varius tellus, ac consectetur orci.', $cat, 'plastic');

$dogToy = new Toy ('Chuckit! Ultra Ball', 4, 8.75, 'https://cdn.shopify.com/s/files/1/2492/9050/products/5ce344d681b8e1.04569549_2048x.jpg?v=1579779499', 'Toys', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque varius tellus, ac consectetur orci.', $dog, 'pl');

// Array prodotti
$products = [];
$products[] = $bed;
$products[] = $dryFood;
$products[] = $catToy;
$products[] = $dogToy;

// Array categorie
$categories = [];
$categories[] = $dog;
$categories[] = $cat;
$categories[] = $bird;
$categories[] = $fish;
$categories[] = $reptile;



?>