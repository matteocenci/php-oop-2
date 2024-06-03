<?php
require_once __DIR__ . "/category.php";

class Product {
    private string $title;
    private float $price;
    private Category $category;
    private string $image;

    public function __construct(string $title, float $price, Category $category, string $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getCategory(): Category {
        return $this->category;
    }

    public function getImage(): string {
        return $this->image;
    }
}
?>