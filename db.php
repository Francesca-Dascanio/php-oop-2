<?php
require_once __DIR__.'/classes/category.php';
require_once __DIR__.'/classes/product.php';


// Istanze dalla classe prodotti
$bed = new Product('Comfy Dog Bed', 1, 36.10, 'https://www.refinery29.com/images/10629943.jpg?crop=40%3A21', 'Beds', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque varius tellus, ac consectetur orci.', 'Dog');

$dryFood = new Product('Dry Food for fatties', 2, 12.99, 'https://assets.petco.com/petco/image/upload/f_auto,q_auto/2161211-center-1', 'Food', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque varius tellus, ac consectetur orci.', 'Cat');

$catToy = new Product('Wild Mouse with LED Eyes', 3, 6.59, 'https://m.media-amazon.com/images/I/51-EG8QtZLL.jpg', 'Toys', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque varius tellus, ac consectetur orci.', 'Cat');

$dogToy = new Product('Chuckit! Ultra Ball', 4, 8.75, 'https://cdn.shopify.com/s/files/1/2492/9050/products/5ce344d681b8e1.04569549_2048x.jpg?v=1579779499', 'Toys', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque varius tellus, ac consectetur orci.', 'Dog');

?>