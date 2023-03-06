<?php

class Category {
    public $nameCategory;

    function __construct(string $nameCategory) {
        $this->nameCategory = $nameCategory;
    }

    public function printCategory() {
        echo '<li class="list-style">';
        echo $this->nameCategory;
        echo '</li>';
    }
}

?>