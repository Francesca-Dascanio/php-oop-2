<?php
require_once __DIR__.'/product.php';

class Toy extends Product {
    public $material;

    function __construct(string $name, int $id, float $price, string $image, string $type, string $description, Category $category, string $material) 
    {
        parent::__construct($name,$id, $price, $image, $type, $description, $category);
        $this->material = $material;
    }
}


?>