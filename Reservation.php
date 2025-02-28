<?php

//classe réservation

Class Reservation{

    //propriétés
    private string $dateDebut;
    private string $dateFin;
    private Client $client;
    private Chambre $chambre;
    private Hotel $hotel; // déclaration de la classe propriété pour établir la liste des réservations par hôtel (facultatif ?)

    //methode
    public function __construct(string $dateDebut, string $dateFin, Client $client, Chambre $chambre, Hotel $hotel){
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->client = $client;
        $this->chambre = $chambre;
        $this->hotel = $hotel;
        $this->client->ajouterReservation($this); // rajouter la réservation dans la liste des réservations de la classe client
        $this->hotel->ajouterReservation($this); // rajouter la réservation dans la liste des réservations de la classe hôtel (facultatif ?)

    }

    public function ajouterClient(Client $clients){
        $this->client = $clients;
    }

    public function ajouterChambre(Chambre $chambre){
        $this->$chambre = $chambre;
    }
    

    public function __toString(){ //date de la réservation
        $infoReservation = "du ".$this->dateDebut." au ".$this->dateFin;
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


    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of chambre
     */ 
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set the value of chambre
     *
     * @return  self
     */ 
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }
}






