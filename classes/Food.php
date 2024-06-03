<?php
require_once __DIR__ . "/product.php";

class Food extends Product {
    private string $type = 'Food';

    public function getType(): string {
        return $this->type;
    }
}

?>