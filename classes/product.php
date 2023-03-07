<?php

require_once __DIR__.'/category.php';
// Importa file trait_name.php
require_once __DIR__.'/../traits/trait_name.php';

class Product {

    // Utilizzo di trait per il nome
    use Name;
    // public $name;
    public $id;
    public $price;
    public $image;
    public $type;
    public $description;
    // Composizione con classe Category
    public $category;

    function __construct(string $name, int $id, float $price, string $image, string $type, string $description, Category $category) {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;
        $this->description = $description;
        $this->category = $category;
        
    }

    public function getNameCategory() {
        return $this->category->name;
    }

    public function printProduct() {

        // Immagine
        echo '<div style="width: 100%; height: 40%;">';
        echo '<img class="card-img-top" style="height: 100%; object-fit: cover;" src="'.$this->image.'" alt="Card image cap">';
        echo '</div>';

        // Titolo
        echo '<div class="card-body"><h5 class="card-title">';
        echo $this->name;
        echo '</h5>';

        // Categoria
        echo '<div>';
        echo $this->getNameCategory();
        echo '</div>';

        // Tipo
        echo '<div>';
        echo $this->type;
        echo '</div>';

        // Descrizione
        echo '<p class="card-text">';
        echo $this->description;
        echo '</p>';

        // Prezzo
        echo '<h5 class="card-title">$ ';
        echo $this->price;
        echo '</h5></div>';


    }


}

?>