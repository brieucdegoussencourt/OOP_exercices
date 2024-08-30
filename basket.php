<?php
// Enforce strict type declarations
declare(strict_types=1);

// NO CLASSES
echo "NO CLASSES <br>";

// Declare the variables
$bananas = 1;
$apples = 1.5;
$wineBottles = 10;
$fruitTaxes = 0.06;
$wineTaxes = 0.21;

// Calculate the total cost of the items in the basket
$basket = 6 * $bananas + 3 * $apples + 2 * $wineBottles;

// Output the total cost of the items in the basket
echo "total basket cost = " . $basket . "Eur <br>";

// Calculate the total cost of the items in the basket with taxes
$totalFruitTaxes = (6 * $bananas + 3 * $apples) * $fruitTaxes;
$totalWineTaxes = 2 * $wineBottles * $wineTaxes;

// Output the total cost of taxes on fruits and wine
echo "total taxes = " . $totalFruitTaxes + $totalWineTaxes . "Eur <br>";

// WITH CLASSES
echo "WITH CLASSES <br>";

// Define a class to handle the basket and tax calculations
class BasketCalculator {
    // Declare private properties
    private float $bananas;
    private float $apples;
    private int $wineBottles;
    private float $fruitTaxes;
    private float $wineTaxes;
    private float $discount;

    // Constructor to initialize the properties
    public function __construct(float $bananas, float $apples, int $wineBottles, float $fruitTaxes, float $wineTaxes, float $discount = 0.5) {
        $this->bananas = $bananas;
        $this->apples = $apples;
        $this->wineBottles = $wineBottles;
        $this->fruitTaxes = $fruitTaxes;
        $this->wineTaxes = $wineTaxes;
        $this->discount = $discount;
    }

    // Method to calculate the total cost of items in the basket
    public function calculateTotalCost(): float {
        return 6 * $this->bananas + 3 * $this->apples + 2 * $this->wineBottles;
    }

    // Method to calculate the total cost of items in the basket with discount
    public function calculateTotalCostWithDiscount(): float {
        return $this->calculateTotalCost() * $this->discount;
    }

    // Method to calculate the total taxes
    public function calculateTotalTaxes(): float {
        $totalFruitTaxes = (6 * $this->bananas + 3 * $this->apples) * $this->fruitTaxes;
        $totalWineTaxes = 2 * $this->wineBottles * $this->wineTaxes;
        return $totalFruitTaxes + $totalWineTaxes;
    }

    // Method to output the results
    public function displayResults(): void {
        $totalCost = $this->calculateTotalCost();
        $totalTaxes = $this->calculateTotalTaxes();
        $totalCostWithDiscount = $this->calculateTotalCostWithDiscount();
        echo "total basket cost = " . $totalCost . "Eur <br>";
        echo "total taxes = " . $totalTaxes . "Eur <br>";
        echo "total basket cost with discount = " . $totalCostWithDiscount . "Eur <br>";
    }
}

// Create an instance of the BasketCalculator class
$calculator = new BasketCalculator(bananas: 1, apples: 1.5, wineBottles: 10, fruitTaxes: 0.06, wineTaxes: 0.21);

// Output the results
$calculator->displayResults();

// CLASSES WITH GETTERS AND SETTERS
echo "CLASSES WITH GETTERS AND SETTERS <br>";

class BasketCalculator2 {
    // Declare private properties
    private float $bananas;
    private float $apples;
    private int $wineBottles;
    private float $fruitTaxes;
    private float $wineTaxes;

    // Constructor to initialize the properties
    public function __construct(float $bananas, float $apples, int $wineBottles, float $fruitTaxes, float $wineTaxes) {
        $this->bananas = $bananas;
        $this->apples = $apples;
        $this->wineBottles = $wineBottles;
        $this->fruitTaxes = $fruitTaxes;
        $this->wineTaxes = $wineTaxes;
    }

    // Getter for bananas
    public function getBananas(): float {
        return $this->bananas;
    }

    // Setter for bananas
    public function setBananas(float $bananas): void {
        if ($bananas >= 0) {  // Example of a validation check
            $this->bananas = $bananas;
        } else {
            throw new InvalidArgumentException("Bananas price must be non-negative.");
        }
    }

    // Getter for apples
    public function getApples(): float {
        return $this->apples;
    }

    // Setter for apples
    public function setApples(float $apples): void {
        if ($apples >= 0) {
            $this->apples = $apples;
        } else {
            throw new InvalidArgumentException("Apples price must be non-negative.");
        }
    }

    // Getter for wineBottles
    public function getWineBottles(): int {
        return $this->wineBottles;
    }

    // Setter for wineBottles
    public function setWineBottles(int $wineBottles): void {
        if ($wineBottles >= 0) {
            $this->wineBottles = $wineBottles;
        } else {
            throw new InvalidArgumentException("Number of wine bottles must be non-negative.");
        }
    }

    // Getter for fruitTaxes
    public function getFruitTaxes(): float {
        return $this->fruitTaxes;
    }

    // Setter for fruitTaxes
    public function setFruitTaxes(float $fruitTaxes): void {
        if ($fruitTaxes >= 0) {
            $this->fruitTaxes = $fruitTaxes;
        } else {
            throw new InvalidArgumentException("Fruit taxes must be non-negative.");
        }
    }

    // Getter for wineTaxes
    public function getWineTaxes(): float {
        return $this->wineTaxes;
    }

    // Setter for wineTaxes
    public function setWineTaxes(float $wineTaxes): void {
        if ($wineTaxes >= 0) {
            $this->wineTaxes = $wineTaxes;
        } else {
            throw new InvalidArgumentException("Wine taxes must be non-negative.");
        }
    }

    // Method to calculate the total cost of items in the basket
    public function calculateTotalCost(): float {
        return 6 * $this->bananas + 3 * $this->apples + 2 * $this->wineBottles;
    }

    // Method to calculate the total taxes
    public function calculateTotalTaxes(): float {
        $totalFruitTaxes = (6 * $this->bananas + 3 * $this->apples) * $this->fruitTaxes;
        $totalWineTaxes = 2 * $this->wineBottles * $this->wineTaxes;
        return $totalFruitTaxes + $totalWineTaxes;
    }

    // Method to output the results
    public function displayResults(): void {
        $totalCost = $this->calculateTotalCost();
        $totalTaxes = $this->calculateTotalTaxes();
        echo "total basket cost = " . $totalCost . "Eur <br>";
        echo "total taxes = " . $totalTaxes . "Eur <br>";
    }
}

// Example usage
$calculator = new BasketCalculator2(1, 1.5, 10, 0.06, 0.21);
$calculator->displayResults();

// Update the number of bananas using the setter
$calculator->setBananas(4);

// Display results again after updating
$calculator->displayResults();
?>