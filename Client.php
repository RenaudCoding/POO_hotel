<?php

// classe client

Class Client{

    //propriétés
    private string $nomClient;
    private string $prenomClient;
    private array $reservations = [];

    //methode
    public function __construct(string $nomClient, string $prenomClient){
        $this->nomClient = $nomClient;
        $this->prenomClient = $prenomClient;
        $this->reservations = [];
    }

    public function ajouterReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }

   
    public function __toString(){
        $infoReservation = implode(" ", $this->reservations);
        $infoClient = $this->prenomClient." ".$this->nomClient."<br>".$infoReservation;
        return $infoClient;
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









