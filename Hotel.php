<?php

// classe hôtel

Class Hotel{

    //propriétés
    private string $nomHotel;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $listeChambres = [];  // liste des chambres
    private array $listeReservations = [];  // liste des réservations
    


    //méthode
    public function __construct(string $nomHotel, string $adresse, string $codePostal, string $ville){
        $this->nomHotel = $nomHotel;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->listeChambres = [];
        $this->listeReservations = [];
        
    }

    public function ajouterChambre(Chambre $chambre){ // ajouter une chambre à la liste des chambres
        $this->listeChambres[] = $chambre;
    }

    public function ajouterReservation(Reservation $reservation){
        $this->listeReservations[] = $reservation;
    }
   
    public function __toString(){
        $nbChambres  = count($this->listeChambres);
        $nbChambresReservees = count($this->listeReservations);
        $nbChambresDispo = $nbChambres - $nbChambresReservees;
        $infoHotel = $this->nomHotel." ".$this->ville."<br>"
                    .$this->adresse." ".$this->codePostal." "
                    .$this->ville."<br>Nombre total de chambres : ".$nbChambres."<br>Nombre de chambre réservées : ".$nbChambresReservees
                    ."<br>Nombre de chambre dispo : ".$nbChambresDispo."<br>";
        return $infoHotel;
    }

    public function listeReservationsHotel(){
        $infoReservationsHotel = implode(" ", $this->listeReservations);
        $listeReservationHotel = "Reservation de l'hôtel ".$this->nomHotel."<br>".$infoReservationsHotel;
        echo $listeReservationHotel;

    }


    public function statutDesChambres(){
        $listeChambresString = implode(" ", $this->listeChambres);
        $statutDesChambres = "Statuts des chambres de ".$this->nomHotel." ".$this->ville."<br>"
                            .$listeChambresString;
        echo $statutDesChambres;
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





