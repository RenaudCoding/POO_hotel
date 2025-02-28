<?php

// classe client

Class Client{

    //propriétés
    private string $nomClient;
    private string $prenomClient;
    private array $reservations = []; // liste des reservations

    //methode
    public function __construct(string $nomClient, string $prenomClient){
        $this->nomClient = $nomClient;
        $this->prenomClient = $prenomClient;
        $this->reservations = [];
    }

    public function ajouterReservation(Reservation $reservation){ // ajouter une reservation à la liste des réservation d'un client
        $this->reservations[] = $reservation;
    }

   
    public function __toString(){  // nom et prénom du client
        $infoClient = $this->prenomClient." ".$this->nomClient;
        return $infoClient;
        }

        public function listeReservationsClient(){  // liste des reservations d'un client (3ème capture - manque nom hotel et infos chambre)
            $infoReservation = implode(" ", $this->reservations);
            echo "Reservations de ".$this->prenomClient." ".$this->nomClient."<br>";
            $nbReservation = count($this->reservations);
            echo $nbReservation." réservation<br>";
            $totalPrix = 0;
            foreach ($this->reservations as $reservation){
                $nomHotel = $reservation->getChambre()->getHotel()->getNomHotel();
                $villeHotel = $reservation->getChambre()->getHotel()->getVille();
                $chambre = $reservation->getChambre()->getNomChambre();
                $prix = $reservation->getChambre()->getPrix();
                $totalPrix += $reservation->getChambre()->getPrix();
                $wifi = $reservation->getChambre()->getWifi();
                $periode = $reservation->__toString();
                echo $nomHotel." ".$villeHotel." / ".$chambre." (".$prix." € - Wifi : ".$wifi.") ".$periode."<br>";
            }
            echo "Total :".$totalPrix." €<br>";
        }


    //getters
    public function getNomClient(){
        return $this->nomClient;
    }

    public function getPrenomClient(){
        return $this->prenomClient;
    }

    //setters
    public function setNomClient(){
        $this->nomClient = $nomClient;
    }

    public function setPrenomClient(){
        $this->prenomClient = $prenomClient;
    }

}








