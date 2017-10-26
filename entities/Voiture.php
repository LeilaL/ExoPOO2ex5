<?php

class Voiture extends Vehicule {
  protected $portes;

    /**
     * Get the value of portes
     *
     * @return mixed
     */
    public function getPortes()
    {
        return $this->portes;
    }

    /**
     * Set the value of portes
     *
     * @param mixed portes
     *
     * @return self
     */
    public function setPortes($portes)
    {
        $this->portes = $portes;

        return $this;
    }

    // public function aboyer() {
    //   echo $this->getNom() . " dit : wouf wouf";
    // }
    //
    // public function bouger() {
    //   echo "Le chien court";
    // }

    public function __construct($immatriculation, $couleur, $portes) {
      $this->setPortes($portes);
      $this->setImmatriculation($immatriculation);
      $this->setCouleur($couleur);
    }

}

 ?>
