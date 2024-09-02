<?php
$date = new DateTime('', new DateTimeZone('Europe/Brussels'));
echo $date->format('Y-m-d H:i:s') . "<br>";
echo $date->format('l, d-M-Y H:i:s T') . "<br>"; 


 
$s = "
{
    \"date\":\"2021-03-23 07:35:44.011207\",
    \"timezone_type\":3,
    \"timezone\":\"Europe/Paris\"
}
";

var_dump(json_decode($s));

// Create a new class & object

declare(strict_types=1);

class Pont
{
   public float $longueur = 0;
}

$pont = new Pont;
$pont->longueur = 263.0;

var_dump($pont);