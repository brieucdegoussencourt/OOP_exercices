<?php
declare(strict_types=1);    
//Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'. Implement a method to display the vehicle details.
class Vehicle
{
    private string $brand;
    private string $model;
    private int $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDetails(): string
    {
        return "The vehicle is a $this->year $this->brand $this->model. <br>";
    }
}   

//Create an instance of the 'Vehicle' class with the brand 'Toyota', model 'Corolla', and year 2020.
$vehicle = new Vehicle("Toyota", "Corolla", 2020);

echo $vehicle->getDetails();
