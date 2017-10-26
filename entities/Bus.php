<?php

class Bus extends Vehicule {
  protected $etages;

    /**
     * Get the value of etages
     *
     * @return mixed
     */
    public function getEtages()
    {
        return $this->etages;
    }

    /**
     * Set the value of etages
     *
     * @param mixed etages
     *
     * @return self
     */
    public function setEtages($etages)
    {
        $this->etages = $etages;

        return $this;
    }

    // public function aboyer() {
    //   echo $this->getNom() . " dit : wouf wouf";
    // }
    //
    // public function bouger() {
    //   echo "Le chien court";
    // }

    public function __construct($immatriculation, $couleur, $etages) {
      $this->setEtages($etages);
      $this->setImmatriculation($immatriculation);
      $this->setCouleur($couleur);
    }

}

 ?>
