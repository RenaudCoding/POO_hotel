<?php

//classe réservation

Class Reservation{

    //propriétés
    private string $dateDebut;
    private string $dateFin;
    private Client $client;
    private Chambre $chambre;

    //methode
    public function __construct(string $dateDebut, string $dateFin, Client $client, Chambre $chambre){
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->client = $client;
        $this->chambre = $chambre;
    }

    public function ajouterClient(Client $clients){
        $this->client = $clients;
    }

    public function ajouterChambre(Chambre $chambre){
        $this->$chambre = $chambre;
    }
    

    public function __toString(){
        $infoReservation = "du ".$this->dateDebut." au ".$this->dateFin."<br>Client : ".$this->client.$this->chambre;
        return $infoReservation;
    }

    //getters
    public function getDateDebut(){
        return $this->dateDebut;
    }

    public function getDateFin(){
        return $this->dateFin;
    }

    //setters
    public function setDateDebut(){
        $this->dateDebut = $dateDebut;
    }

    public function setDateFin(){
        $this->dateFin = $dateFin;
    }

}






