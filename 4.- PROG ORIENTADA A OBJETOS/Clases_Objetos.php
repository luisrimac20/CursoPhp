<?php

class Jugador {
    public $Nombre;
    public $Apellidos;
    public $Edad;
    public $Posicion;
}

$Jugador1 = new Jugador();
$Jugador1 -> Nombre = "Lionel Andres";
$Jugador1 -> Apellidos = "Messi Cuccitini";
$Jugador1 -> Edad = 34;
$Jugador1 -> Posicion = "Medio Centro";

echo '<pre>';
    var_dump($Jugador1);
echo '</pre>';


$Jugador2 = new Jugador();
$Jugador2 -> Nombre = "Luis";
$Jugador2 -> Apellidos = "Suarez";
$Jugador2 -> Edad = 34;
$Jugador2 -> Posicion = "Delantero";

echo '<pre>';
    var_dump($Jugador2);
echo '</pre>';

?>