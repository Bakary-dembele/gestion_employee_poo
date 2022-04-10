<?php

abstract class AbstractEmployee {

    protected $nom;
    protected $prenom;
    protected $age;
    protected $salaire;
    protected $conges;

    public const SALAIRE_DE_BASE = 2000;
    public const CONGES_BASE = 30;

    public function __construct($nom, $prenom, $age, $salaire, $conges) {
          $this->nom = $nom;
          $this->prenom = $prenom;
          $this->age = $age;
          $this->salaire = $salaire;
          $this->conges = $conges;
    }

    abstract public function seDePlacer($distance);
    abstract public function allerDejeune();
    abstract public function prendreCaf();
    abstract public function nombreEnfant($enfant);
    abstract public function conges();

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * @return mixed
     */
    public function getConges()
    {
        return $this->conges;
    }

    /**
     * @param mixed $conges
     */
    public function setConges($conges)
    {
        $this->conges = $conges;
    }


}