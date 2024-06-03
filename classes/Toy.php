<?php
require_once __DIR__ . "/product.php";

class Toy extends Product {
    private string $type = 'Toy';

    public function getType(): string {
        return $this->type;
    }
}
?>