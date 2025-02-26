<?php

// classe client

Class Client{

    //propriétés
    private string $nomClient;
    private string $prenomClient;

    //methode
    public function __construct(string $nomClient, string $prenomClient){
        $this->nomClient = $nomClient;
        $this->prenomClient = $prenomClient;
    }

    public function __toString(){
        $infoClient = $this->prenomClient." ".$this->nomClient."<br>";
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









