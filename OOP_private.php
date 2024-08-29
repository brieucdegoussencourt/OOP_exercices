<?php
// Enforce strict type declarations
declare(strict_types=1);

// THE CLASS


class Beverage 
{
    // The Properties (public, protected or private)
        // Public: Accessible from anywhere.
        // Protected: Accessible within the class and by inheriting classes.
        // Private: Accessible only within the class itself.

    // Declare a public property with the strict type string to store the color of the beverage
    private string $color;
    
    // Declare a public property with the strict type flaot to store the price of the beverage
    private float $price;
    
    // Declare a public property with the strict type string to store the temperature of the beverage
    private string $temperature;
    
    // The Constructor

    // Define a constructor method that initializes the properties
    // The constructor accepts three parameters: color, price, and temperature
    // The temperature parameter has a default value of "cold"
    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        // Assign the color parameter to the color property
        $this->color = $color;
        
        // Assign the price parameter to the price property
        $this->price = $price;
        
        // Assign the temperature parameter to the temperature property
        $this->temperature = $temperature;
    }

    // The Functions

    // Define a method to get information about the beverage
    // This method returns a string describing the beverage's temperature and color
    public function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color." . "\n";

    }
}




// EXTENDING THE BEVERAGE CLASS

class Beer extends Beverage
{
    // The Properties

    // Declare a public property with the strict type string to store the name of the beer
    private string $name;
    private float $alcohol;

    // The Constructor
    //TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    public function __construct(string $color, float $price, string $temperature, string $name, float $alcohol)
    {
        // Call the parent class constructor with the color, price, and temperature parameters
        parent::__construct($color, $price, $temperature);
        
        // Assign the name parameter to the name property
        $this->name = $name;
        
        // Assign the alcohol parameter to the alcohol property
        $this->alcohol = $alcohol;
    }


    //  function displayAlcoholPercentage() that returns the alcohol percentage of the beverage
    public function displayAlcoholPercentage(): string
    {
        return "This beverage has an alcohol percentage of $this->alcohol%." . "\n";

    }
}

// The Object
// Create an instance of the Beer class with the specified parameters
$duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);

// The Output
// Output the information about the beer using the displayAlcoholPercentage method
echo $duvel->displayAlcoholPercentage() . "<br>";


