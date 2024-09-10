<?php
declare(strict_types=1);

//Write a PHP class called 'Shape' with an abstract method 'calculateArea()'.
abstract class Shape
{
    abstract public function calculateArea(): float;
}   

//Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
class Triangle extends Shape
{
    private float $base;
    private float $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape
{
    private float $length;
    private float $width;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }
}

//Create an instance of the 'Triangle' class with base 10 and height 5.
$triangle = new Triangle(10, 5);

//Create an instance of the 'Rectangle' class with length 10 and width 5.
$rectangle = new Rectangle(10, 5);

//Output the area of the triangle.
echo "The area of the triangle is " . $triangle->calculateArea() . " square units. <br>";

//Output the area of the rectangle.
echo "The area of the rectangle is " . $rectangle->calculateArea() . " square units. <br>";
