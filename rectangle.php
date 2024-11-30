<?php
class Rectangle{

    private string $MesureEnMetre = "m2"; //unité de mesure
    private float $longueur;
    private float $largeur;

    /**
     * Modifier la valeur de la propriété longueur
     * @return float
     */
    public function set_longueur(float $longueur):float{
        $this->longueur = $longueur;
    }
    public function setLargeur(float $largeur):float{
        $this->largeur = $largeur;
    }

    public function getLongueur():float{
        return $this->longueur;
    }
    public function getLargeur():float{
        return $this->largeur;
    }

    public function surface():string
    {
        return ($this->longueur * $this->largeur) . $this->mesure;
    }
}

$rect = new Rectangle;
$rect->setLongueur(5.3);
$rect->setLargeur(4.1);
$rect->surface();