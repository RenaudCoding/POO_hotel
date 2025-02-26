<?php

require 'Hotel.php';
require 'Chambre.php';
require 'Client.php';
require 'Reservation.php';






$hotel1 = new Hotel ("Hilton", "10 route de la Gare", "67000", "Strasbourg");
$hotel2 = new Hotel ("Regent", "61 rue Dauphine ", "75006", "Paris");


$chambre1 = new Chambre("Chambre1", 120, TRUE, FALSE, $hotel1);
$chambre2 = new Chambre("Chambre2", 120, TRUE, FALSE, $hotel1);
$chambre3 = new Chambre("Chambre3", 120, FALSE, FALSE, $hotel1);

$chambre10 = new Chambre("Chambre10", 300, TRUE, TRUE, $hotel2);
$chambre11 = new Chambre("Chambre11", 300, FALSE, TRUE, $hotel2);
$chambre12 = new Chambre("Chambre12", 300, TRUE, TRUE, $hotel2);
$chambre13 = new Chambre("Chambre13", 300, TRUE, TRUE, $hotel2);



$client1 = new Client("GIBELLO", "Virgile");
$client2 = new Client("MURMANN", "Micka");



$reservation1 = new Reservation("01-01-2021", "05-01-2021", $client1, $chambre1);
$reservation2 = new Reservation("11-03-2021", "14-03-2021", $client2, $chambre3);
$reservation3 = new Reservation("08-04-2021", "13-04-2021", $client2, $chambre12);



echo $hotel2;

// echo $reservation2;

// echo $chambre1;

// echo $client2;



// $hotel2->statutDesChambres();





