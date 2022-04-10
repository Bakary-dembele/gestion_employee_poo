<?php

require_once "AbstractEmployee.php";

class Equipier extends AbstractEmployee {

    public const PRIME_ENFANT = 50;
    public const MES_RTT = 15;

    public function __construct($nom, $prenom, $age, $conges) {
        $salaire = parent::SALAIRE_DE_BASE;
        parent::__construct($nom, $prenom, $age, $salaire, $conges);
        $this->salaireEquipier();
    }

    private function salaireEquipier()
    {
        echo "Je m'apelle $this->nom $this->prenom je suis un " .__CLASS__. " et j'ai salaire annul de $this->salaire euros\n";
    }

    public function seDePlacer($distance)
    {
       $this->prendreNavette($distance);
    }

    public function prendreNavette($distance)
    {
        echo "J'appelle $this->prenom $this->nom je prends la navette pour aller au travaille et je parcouris $distance km.\n";
    }

    public function allerDejeune()
    {
        echo "Je suis $this->prenom $this->nom " .__CLASS__. ",  mange un sandwich.\n";
    }

    public function prendreCaf()
    {
        echo "Je suis $this->prenom $this->nom" .__CLASS__. " je prends un caf avec mes collègues.\n";
    }

    public function nombreEnfant($enfant)
    {
        $prime = self::PRIME_ENFANT * $enfant ;
        echo "Je m'apelle $this->nom $this->prenom je suis un " .__CLASS__. " et j'ai salaire annul de $this->salaire euros et une prime de " .self::PRIME_ENFANT. " euros par enfant soit une prime $prime euros pour $enfant enfants.\n";
    }

    public function conges()
    {
       $conges= parent::CONGES_BASE + self::MES_RTT;
        echo "Je suis $this->nom $this->prenom " .__CLASS__. " j'ai un conges de ".self::CONGES_BASE. " et une RTT de " .self::MES_RTT. " jours soit au total de  $conges de conges.\n";
    }
}