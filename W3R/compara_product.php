<?php
declare(strict_types=1);

// declara an interface called 'Comparable' with a method 'compareTo()'
interface Comparable
{
    public function compareTo($other): string;
}

// Create a class called 'Product' that implements the 'Comparable' interface
class Product implements Comparable
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // Implement the 'compareTo()' method to compare the price of two products.
    // If a product is a higher price than the other, return "this is more expensive than the other"
    // If a product is a lower price than the other, return "this is cheaper than the other"
    // If a product is the same price as the other, return "this is the same price as the other"
    public function compareTo($other): string
    {
        if ($this->price > $other->price) {
            return $this->name . " is more expensive than the " . $other->name;
        } elseif ($this->price < $other->price) {
            return $this->name . " is cheaper than the " . $other->name;
        } else {
            return $this->name . " is the same price as " . $other->name;
        }
    }
}

// Create two instances of the 'Product' class with different prices
$product1 = new Product("Product 1", 100);
$product2 = new Product("Product 2", 200);

// Compare the two products and output the result
echo $product1->compareTo($product2) . "<br>";
