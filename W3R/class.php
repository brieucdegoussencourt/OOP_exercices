<?php
// Enforce strict type declarations
declare(strict_types=1);

// CLASS "RECTANGLE" with length and width to calculate the area and the perimeter
class Rectangle
{
    // Declare private properties
    private float $length;
    private float $width;

    // Constructor to initialize the properties
    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    // Method to calculate the area of the rectangle
    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }

    // Method to calculate the perimeter of the rectangle
    public function calculatePerimeter(): float
    {
        return 2 * ($this->length + $this->width);
    }
}

// Create an instance of the Rectangle class with length 10 and width 5
$rectangle = new Rectangle(10, 5);

// Output the area of the rectangle
echo "The area of the rectangle is " . $rectangle->calculateArea() . " square units. <br>";
// Output the perimeter of the rectangle
echo "The perimeter of the rectangle is " . $rectangle->calculatePerimeter() . " units. <br>";

// class Circle 