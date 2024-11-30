<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
class Pont
{
    private string $MesureEnMetre = "m2"; //unité de mesure
    private float $longueur;
    private float $largeur;

   public static function validerTaille(float $taille): bool
   {
       if ($taille < 50.0) {
           echo "la longueur doit être sup";
       }
      
       return true;
   }
  
   public function setLongueur(float $longueur): void
   {
       self::validerTaille($longueur);
      
       $this->longueur = $longueur;
   }

   
    public function setLargeur(float $largeur):void{
        
        $this->largeur = $largeur;
    }

    public function surface():float
    {
        return ($this->longueur * $this->largeur);
    }
}

$towerBridge = new Pont;
$towerBridge->setLongueur(40.0);
$towerBridge->setLargeur(10.0);
echo $towerBridge->surface();