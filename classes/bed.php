<?php
require_once __DIR__.'/product.php';

class Bed extends Product {
    public $size;

    function __construct(string $name, int $id, float $price, string $image, string $type, string $description, Category $category, string $size) 
    {
        parent::__construct($name,$id, $price, $image, $type, $description, $category);
        $this->size = $size;
    }
}


?>