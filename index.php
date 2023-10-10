<?php

$partiteBasket = array(
    array("Squadra di Casa" => "Olimpia Milano", "Squadra Ospite" => "Cantù", "Punti Casa" => 55, "Punti Ospite" => 60),
    array("Squadra di Casa" => "Roma Basket", "Squadra Ospite" => "Napoli Basket", "Punti Casa" => 70, "Punti Ospite" => 63),
    array("Squadra di Casa" => "Bologna Bulls", "Squadra Ospite" => "Torino Tigers", "Punti Casa" => 78, "Punti Ospite" => 72)
);

foreach ($partiteBasket as $partita) {
    echo $partita["Squadra di Casa"] . " - " . $partita["Squadra Ospite"] . " | " . $partita["Punti Casa"] . "-" . $partita["Punti Ospite"] . "<br>";
}



// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
// 
// Olimpia Milano - Cantù | 55-60