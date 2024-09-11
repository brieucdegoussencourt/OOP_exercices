<?php
declare(strict_types=1);

// Define a class called 'Logger' that will handle logging messages.
class Logger {
    // Declare a static property to keep track of the number of log messages.
    public static int $logCount = 0;

    // Define a static method to log messages.
    // This method takes a message as a parameter, echoes it, and increments the log count.
    public static function log($message) {
        echo $message . "</br>";
        self::$logCount++;
    }
}

// Log three messages using the static 'log' method of the 'Logger' class.
Logger::log("Log message 1");
Logger::log("Log message 2");
Logger::log("Log message 3");

// Output the total number of log messages.
echo "Total log count: " . Logger::$logCount . "</br>";