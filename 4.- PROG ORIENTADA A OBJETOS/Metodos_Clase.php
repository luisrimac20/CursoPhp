<?php

//CLASE
class Jugador {
    public $Nombre;
    public $Apellidos;
    public $Edad;
    public $Posicion;

    //METODOS DE UNA CLASE 
    public function Entrenar(){
        echo $this -> Nombre . " jugador esta entrenando";
    }

    public function Jugar(){
        echo $this -> Nombre . "esta jugando";
    }
}

//INSTANCIAS DE UNA CLASE
$Jugador1 = new Jugador();
$Jugador1 -> Nombre = "Lionel Andres";
$Jugador1 -> Apellidos = "Messi Cuccitini";
$Jugador1 -> Edad = 34;
$Jugador1 -> Posicion = "Medio Centro";
$Jugador1 -> Entrenar();
echo '<br>';
$Jugador1 -> Jugar();


echo '<pre>';
    var_dump($Jugador1);
echo '</pre>';


$Jugador2 = new Jugador();
$Jugador2 -> Nombre = "Luis";
$Jugador2 -> Apellidos = "Suarez";
$Jugador2 -> Edad = 34;
$Jugador2 -> Posicion = "Delantero";
$Jugador2 -> Entrenar();
echo '<br>';
$Jugador2 -> Jugar();

echo '<pre>';
    var_dump($Jugador2);
echo '</pre>';

?>