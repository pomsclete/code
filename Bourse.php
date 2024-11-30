<?php
declare(strict_types=1);
class Bourse{

    private float $montant;
    private float $taux;

   public static function validateValue(float $value): bool
   {
       if ($value < 0) {
            echo 'la nombre doit être supérieur à zero';
       }
       return true;
   }
  
   public function setMontant(float $montant): void
   {
       self::validateValue($montant);
      
       $this->montant = $montant;
   }

   public function getMontant():float
   {
        return $this->montant;
   }
   
    public function setTaux(float $taux):void
    {

        self::validateValue($taux);

        $this->taux = $taux;
    }

    public function getTaux():float
   {
        return $this->taux;
   }

    public function bourseConvert(float $taux, float $montant):float
    {   
        return $taux * $montant;
        
    }
}

$bourse = new Bourse;
$bourse->setMontant(0.0);
$bourse->setTaux(0.4);
echo $bourse->bourseConvert();
echo $bourse->bourseConvertTwo($bourse->getTaux(),$bourse->getMontant());
