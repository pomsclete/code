<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Terrain{

    private string $mesure = "m2";
    public float $longueur;
    public float $largeur;


    public function surface():string
    {
        return ($this->longueur * $this->largeur) . $this->mesure;
    }

}
$terrain = new Terrain;
$terrain->longueur = 10.0;
$terrain->largeur = 5.0;