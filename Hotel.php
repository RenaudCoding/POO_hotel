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

    public function ajouterReservation(Reservation $reservation){   // ajouter une réservation à la liste des réservations
        $this->listeReservations[] = $reservation;
    }
   
    public function __toString(){  // infos sur l'hotel (1er capture)
        $nbChambres  = count($this->listeChambres); // nombre total de chambre dans l'hôtel
        $nbChambresReservees = count($this->listeReservations); // nombre de chambre réservée
        $nbChambresDispo = $nbChambres - $nbChambresReservees; // nombre de chambre dispo
        $infoHotel = $this->nomHotel." ".$this->ville."<br>"
                    .$this->adresse." ".$this->codePostal." "
                    .$this->ville."<br>Nombre total de chambres : ".$nbChambres."<br>Nombre de chambre réservées : ".$nbChambresReservees
                    ."<br>Nombre de chambre dispo : ".$nbChambresDispo."<br>";
        return $infoHotel;
    }

    public function listeReservationsHotel(){ // liste des réservations auprès de l'hôtel (2ème capture - manque nom, prénom client et nom chambre)
        $infoReservationsHotel = implode(" ", $this->listeReservations);
        echo "Reservation de l'hôtel ".$this->nomHotel."<br>";
        $nbReservation  = count($this->listeReservations);
        echo $nbReservation." réservation<br>";
        foreach ($this->listeReservations as $reserv){
            $client = $reserv->getClient()->getPrenomClient()." ".$reserv->getClient()->getNomClient();
            $chambre = $reserv->getChambre()->getNomChambre();
            $periode = $reserv->__toString();
            echo $client." - ".$chambre." - ".$periode."<br>";
        }
    }


    public function statutDesChambres(){ // statut des chambres (4ème capture)
        $listeChambresString = implode(" ", $this->listeChambres);
        echo "Statut des chambres de ".$this->nomHotel." ".$this->ville."<br>";
        foreach ($this->listeChambres as $chambre){
            $laChambre = $chambre->getNomChambre();
            $prix = $chambre->getPrix();
            $wifi = $chambre->getWifi();
            $statut = $chambre->getStatut();
            echo $laChambre." ".$prix." ".$wifi." Disponibilité : ".$statut."<br>";
        }
        
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





