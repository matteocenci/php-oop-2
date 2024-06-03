<?php
require_once __DIR__ . "/Bed.php";

class Bed extends Product {
    private string $type = 'Bed';

    public function getType(): string {
        return $this->type;
    }
}

?>