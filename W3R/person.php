<?php
declare(strict_types=1);
//Class called 'Person' with properties like 'name' and 'age'.
class Person
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //Implement the '__toString()' magic method to display person information.
    public function __toString(): string
    {
        return "The person is " . $this->name . " and " . $this->age . " years old. <br>";
    }
}   
//Create an instance of the 'Person' class with the name 'John' and age 25.
$person = new Person("John", 25);
// Output the person details with both functions.
echo $person->__toString();