<?php
require_once __DIR__.'/product.php';

class Food extends Product {
    public $expiringDate;

    function __construct(string $name, int $id, float $price, string $image, string $type, string $description, Category $category, string $expiringDate) 
    {
        parent::__construct($name,$id, $price, $image, $type, $description, $category);
        $this->expiringDate = $expiringDate;
    }
}


?>