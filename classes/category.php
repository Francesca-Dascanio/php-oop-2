<?php

class Category {
    public $name;

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