<?php
declare(strict_types=1);

//A class called "BankAccount" with properties "accountNumber" and "balance" and methods to deposit and withdraw money from the account.
class BankAccount
{
    private string $accountNumber;
    private float $balance;

    public function __construct(string $accountNumber, float $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds. <br>";
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

//Create an instance of the 'BankAccount' class with account number '123456' and 1000 dollars deposit
$account = new BankAccount ("123456", 1000);
$account->deposit(100);
$account->withdraw(50);
echo "The account balance is " . $account->getBalance() . " dollars. <br>";
