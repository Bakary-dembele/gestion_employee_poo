<?php

require_once "AbstractEmployee.php";
require_once "IDirecteur.php";
require_once "IManager.php";


class Directeur extends  AbstractEmployee implements IDirecteur {

    public const COEFF_SALAIRE_DIRECTEUR = 3;
    public const PRIME_PARCOURIS = 0.7;
    public const PRIME_ENFANT = 90;
    public const MES_RTT = 25;

    public function __construct($nom, $prenom, $age, $conges) {
        $salaire = parent::SALAIRE_DE_BASE * self::COEFF_SALAIRE_DIRECTEUR;
        parent::__construct($nom, $prenom, $age, $salaire, $conges);
        $this->salaireManager();
    }

    private function salaireManager() {
        echo "Je m'apelle $this->nom $this->prenom je suis un " .__CLASS__. " et j'ai salaire annul de $this->salaire euros.\n";
    }

    public function seDePlacer($distance)
    {
        $this->prendreVoitureDeFonction($distance);
    }

    public function prendreVoitureDeFonction($distance) {
        $prime = $distance * self::PRIME_PARCOURIS;
        echo "Je m'apelle $this->nom $this->prenom je suis un " .__CLASS__. " et j'ai salaire annul de $this->salaire euros plus une prime kilomètrage de $prime euros et je parcouris $distance km.\n";
    }

    public function allerDejeune()
    {
        echo "Je suis $this->prenom $this->nom " .__CLASS__. ", je mange un les viandes dans le restaurant .\n";
    }

    public function prendreCaf()
    {
        echo "Je suis $this->prenom $this->nom" .__CLASS__. " je prends un caf avec mes collègues.\n";
    }

    public function nombreEnfant($enfant)
    {
        $prime = $enfant * self::PRIME_ENFANT;
        echo "Je m'apelle $this->nom $this->prenom je suis un " .__CLASS__. " et j'ai salaire annul de $this->salaire euros et une prime de " .self::PRIME_ENFANT. " euros par enfant soit une prime $prime euros pour $enfant enfants.\n";
    }

    public function conges()
    {
        $conges = parent::CONGES_BASE + self::MES_RTT;
        echo "Je suis $this->nom $this->prenom " .__CLASS__. " j'ai un conges de ".self::CONGES_BASE. " et une RTT de " .self::MES_RTT. " jours soit au total de  $conges de conges.\n";
    }

    public function licencier(Equipier $equipier)
    {
        echo "Je suis $this->nom $this->prenom " .__CLASS__. ", je licencie " . $equipier->getNom(). " " .$equipier->getPrenom(). " pour une faute grave ! \n";
    }

    public function organiserReunion()
    {
        echo "Je suis $this->nom $this->prenom " .__CLASS__. ", j'organise les reunions avec les équipes ! \n";
    }
}