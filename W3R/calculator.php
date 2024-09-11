<?php
declare(strict_types=1);
//Write a PHP class called 'Calculator' that has a private property called 'result'. Implement methods to perform basic arithmetic operations like addition and subtraction.
class Calculator
{
    private float $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function add(float $number): void
    {
        $this->result += $number;
    }

    public function subtract(float $number): void
    {
        $this->result -= $number;
    }

    public function multiply(float $number): void
    {
        $this->result *= $number;
    }

    public function divide(float $number): void
    {
        if ($number != 0) {
            $this->result /= $number;
        } else {
            echo "Cannot divide by zero. <br>";
        }
    }

    public function getResult(): float
    {
        return $this->result;
    }
}
//Create an instance of the 'Calculator' class and perform some operations.
$calculator = new Calculator();
$calculator->add(10);
$calculator->subtract(5);
$calculator->multiply(2);
$calculator->divide(4);
echo "The result is " . $calculator->getResult() . "<br>";
