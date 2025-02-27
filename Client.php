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

   
    public function __toString(){  
        $infoClient = $this->prenomClient." ".$this->nomClient."<br>";
        return $infoClient;
        }

        public function listeReservationsClient(){  // liste des reservations d'un client
            $infoReservation = implode(" ", $this->reservations);
            $listeReservations = "Reservations de ".$this->prenomClient." ".$this->nomClient."<br>".$infoReservation;
            echo $listeReservations;
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









