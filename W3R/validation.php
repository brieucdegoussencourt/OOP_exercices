<?php
declare(strict_types=1);

//Write a class called 'Validation' with static methods to validate email addresses, passwords, and other common input fields.
class Validation
{
    public static function validateEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePassword(string $password): bool
    {
        return strlen($password) >= 8;
    }

    public static function validateDate(string $date): bool
    {
        return (bool)strtotime($date);
    }

    public static function validatePhone(string $phone): bool
    {
        return (bool)preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone);
    }
}

//Class USER with properties 'email', 'password', 'dateOfBirth', and 'phoneNumber'. Implement a method to validate the user input.
class User
{
    private string $email;
    private string $password;
    private string $dateOfBirth;
    private string $phoneNumber;

    public function __construct(string $email, string $password, string $dateOfBirth, string $phoneNumber)
    {
        $this->email = $email;
        $this->password = $password;
        $this->dateOfBirth = $dateOfBirth;
        $this->phoneNumber = $phoneNumber;
    }

    public function validate(): void
    {
        $isValid = true;

        if (!Validation::validateEmail($this->email)) {
            echo "Invalid email address. <br>";
            $isValid = false;
        }

        if (!Validation::validatePassword($this->password)) {
            echo "Password must be at least 8 characters long. <br>";
            $isValid = false;
        }

        if (!Validation::validateDate($this->dateOfBirth)) {
            echo "Invalid date of birth. <br>";
            $isValid = false;
        }

        if (!Validation::validatePhone($this->phoneNumber)) {
            echo "Invalid phone number. <br>";
            $isValid = false;
        }

        if ($isValid) {
            echo "User credentials are valid. <br>";
        }
    }
}

//Output
$user = new User("John@Does.com", "password", "1990-01-01", "123-456-7890");

//Output
$user->validate();