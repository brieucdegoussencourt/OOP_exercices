<?php
declare(strict_types=1);
//Class called 'Person' with properties like 'name' and 'age'.
class Person
{
    protected string $name;
    protected int $age;

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

//Extend the class person to Employee class with properties like salary and position.
class Employee extends Person
{
    private float $salary;
    private string $position;

    public function __construct(string $name, int $age, float $salary, string $position)
    {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
        
    }

    //Implement method to display employee detail.
    public function getEmployeeDetails(): string
    {
        return "The employee is " . $this->name . " and " . $this->age . " years old. The salary is " . $this->salary . " and the position is " . $this->position . ". <br>";
    }
}

// Create an instance of the 'Employee' class with the name 'John', age 25, salary 50000, and position 'Manager'.
$employee = new Employee("John", 25, 50000, "Manager");
// Output the employee details.
echo $employee->getEmployeeDetails();
