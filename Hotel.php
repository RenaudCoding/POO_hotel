<?php

// classe hôtel

Class Hotel{

    //propriétés
    private string $nomHotel;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $listeChambres = [];  // liste des chambres


    //méthode
    public function __construct(string $nomHotel, string $adresse, string $codePostal, string $ville){
        $this->nomHotel = $nomHotel;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->listeChambres = [];
    }

    public function ajouterChambre(Chambre $chambre){ // ajouter une chambre à la liste des chambres
        $this->listeChambres[] = $chambre;
    }
   
    public function __toString(){
        $listeChambresString = implode(" ", $this->listeChambres);
        $infoHotel = "Hotel ".$this->nomHotel."<br>".$this->adresse." ".$this->codePostal." ".$this->ville."<br>".
                                    $listeChambresString;
        return $infoHotel;
    }

    
    //getters
    public function getNomHotel(){
        return $this->nomHotel;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getCodePostal(){
        return $this->codePostal;
    }

    public function getVille(){
        return $this->ville;
    }

    //setters
    public function setNomHotel(){
        $this->nomHotel = $nomHotel;
    }

    public function setAdresse(){
        $this->adresse = $adresse;
    }

    public function setCodePostal(){
        $this->codePostal = $codePostal;
    }

    public function setVille (){
        $this->ville = $ville;
    }

}





