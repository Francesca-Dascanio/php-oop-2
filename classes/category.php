<?php

// Importa trait_name.php
require_once __DIR__.'/../traits/trait_name.php';

class Category {

    use Name;
    // public $name;

    function __construct(string $name) {
        $this->name = $name;
    }

    public function printCategory() {
        echo '<li class="list-style">';
        echo $this->name;
        echo '</li>';
    }
}

?>