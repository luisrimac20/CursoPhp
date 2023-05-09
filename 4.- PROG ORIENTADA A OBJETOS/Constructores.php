<?php

//CLASE
class Jugador {
    public $Nombre;
    public $Apellidos;
    public $Edad;
    public $Posicion;

    //CONSTRUCTOR
    public function __construct($Nombre , $Apellidos , $Edad , $Posicion){
        $this -> Nombre = $Nombre;
        $this -> Apellidos = $Apellidos;
        $this -> Edad = $Edad;
        $this -> Posicion = $Posicion;
    }

    //METODOS DE UNA CLASE 
    public function Entrenar(){
        echo $this -> Nombre . " jugador esta entrenando";
    }

    public function Jugar(){
        echo $this -> Nombre . "esta jugando";
    }
}

//INSTANCIAS DE UNA CLASE
$Jugador1 = new Jugador("Lionel Andres", "Messi Cuccitini" , 34 , "Medio Centro");
echo '<pre>';
    var_dump($Jugador1);
echo '</pre>';


$Jugador2 = new Jugador("Luis" , "Suarez" , 34 , "Delantero");
echo '<pre>';
    var_dump($Jugador2);
echo '</pre>';

?>