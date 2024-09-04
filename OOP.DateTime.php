<?php
declare(strict_types=1);

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



class Pont
{
   public float $longueur;
   public float $largeur;
  
   public function getSurface(): float
   {
       return $this->longueur * $this->largeur;
   }
}

// …

$pont = new Pont;
$pont->longueur = 286.0;
$pont->largeur = 15.0;

$surface = $pont->getSurface();

echo "La surface du pont est de $surface m².";

class Pont
{
   private string $unite = 'm²';
  
   private float $longueur;
   private float $largeur;
}

$towerBridge = new Pont;
$towerBridge->longueur = 286.0;