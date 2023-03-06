<?php

require_once __DIR__.'/category.php';

class Product extends Category {
    public $title;
    public $id;
    public $price;
    public $image;
    public $type;
    public $description;

    function __construct(string $title, int $id, float $price, string $image, string $type, string $description, string $nameCategory) {
        $this->title = $title;
        $this->id = $id;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;
        $this->description = $description;
        $this->nameCategory = $nameCategory;
    }

    public function printProduct() {

        // Immagine
        echo '<div style="width: 100%; height: 40%;">';
        echo '<img class="card-img-top" style="height: 100%; object-fit: cover;" src="'.$this->image.'" alt="Card image cap">';
        echo '</div>';

        // Titolo
        echo '<div class="card-body"><h5 class="card-title">';
        echo $this->title;
        echo '</h5>';

        // Categoria
        echo '<div>';
        echo $this->nameCategory;
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