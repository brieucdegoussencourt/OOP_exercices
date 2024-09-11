<?php
declare(strict_types=1);
//Write a PHP class called 'Logger' that uses the singleton design pattern to ensure only one instance of the class can be created.
class Logger
{
    private static ?Logger $instance = null;
    private string $log;

    private function __construct()
    {
        $this->log = "";
    }

    public static function getInstance(): Logger
    {
        if (self::$instance == null) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    public function log(string $message): void
    {
        $this->log .= $message . "<br>";
    }

    public function getLog(): string
    {
        return $this->log;
    }
}
//Create an instance of the 'Logger' class and log some messages.
$logger = Logger::getInstance();
$logger->log("This is a log message.");
$logger->log("This is another log message.");
echo $logger->getLog();



//The Singleton design pattern is a creational design pattern that ensures a class has only one instance and provides a global point of access to that instance. 
//This pattern is useful when exactly one object is needed to coordinate actions across the system.