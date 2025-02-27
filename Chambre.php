<?php

// classe chambre

Class Chambre{

    //propriétés
    private string $nomChambre;
    private float $prix;
    private bool $statut;
    private bool $wifi;
    private Hotel $hotel;
    

    //méthode
    public function __construct(string $nomChambre, float $prix, bool $statut, bool $wifi, Hotel $hotel){
        $this->nomChambre = $nomChambre;
        $this->prix = $prix;
        $this->statut = $statut;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
        $this->hotel->ajouterChambre($this); // ajouter la chambre à la listes des chambres de l'hôtel
    }

    

    public function __toString(){ // infos de la chambre
        $infoChambre = $this->nomChambre." / ".$this->prix." / Wifi : ".$this->wifi." / Diponibilité : ".$this->statut."<br>";
        return $infoChambre;
    }


    //getters

    public function getChambre(){
        return $this->Chambre;
    }

    public function getNomChambre(){
        return $this->nomChambre;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function getStatut(){
        return $this->statut;
    }

    public function getWifi(){
        if ($this->wifi == TRUE){
            $dispoWifi = "oui";
        } else $dispoWifi = "non";
        return $dispoWifi;
    }

   /**
     * Get the value of hotel
     */ 
    public function getHotel()
    {
        return $this->hotel;
    }

    //setters
    public function setNomChambre(){
        $this->nomChambre = $nomChambre;
    }

    public function setPrix(){
        $this->prix = $prix;
    }

    public function setStatut(){
        $this->statut = $statut;
    }

    public function setWifi(){
        $this->wifi = $wifi;
    }

    /**
     * Set the value of hotel
     *
     */ 
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }


}



