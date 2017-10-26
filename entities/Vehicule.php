<?php

abstract class Vehicule {

  protected $immatriculation;
  protected $couleur;


    /**
     * Get the value of immatriculation
     *
     * @return mixed
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @param mixed immatriculation
     *
     * @return self
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get the value of Couleur
     *
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of Couleur
     *
     * @param mixed Couleur
     *
     * @return self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    // final public function manger() {
    //   echo $this->getNom() . " mange";
    // }
    //
    // abstract function bouger();
    //
    // public function __construct($nom, $age) {
    //   $this->setNom($nom);
    //   $this->setAge($age);
    // }

}

 ?>
