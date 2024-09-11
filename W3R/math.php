<?php
declare(strict_types=1);
//declare a math class
class Math
{
    //declare a static method to calculate an addition
    public static function add($a, $b)
    {
        return $a + $b;
    }
    //declare a static method to calculate a subtraction
    public static function subtract($a, $b)
    {
        return $a - $b;
    }
    //declare a static method to calculate a multiplication
    public static function multiply($a, $b)
    {
        return $a * $b;
    }
}
//output the result of the addition
echo "The result of the addition is: " . Math::add(10, 5) . "<br>";
//output the result of the subtraction
echo "The result of the subtraction is: " . Math::subtract(10, 5) . "<br>";
//output the result of the multiplication
echo "The result of the multiplication is: " . Math::multiply(10, 5) . "<br>";

?>