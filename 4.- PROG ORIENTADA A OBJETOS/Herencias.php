<?php

//CLASE PADRE
class SeleccionFutbol{
    public $Id;
    public $Nombre;
    public $Edad;

    //CONSTRUCTOR
    public function __construct($Id,$Nombre,$Edad){
        $this -> Id = $Id;
        $this -> Nombre = $Nombre;
        $this -> Edad = $Edad;
    
    }

    //METODOS DE UNA CLASE
    public function Concentrarse(){
        echo $this -> Nombre . " esta en concentracion";
    }
    public function Viajar(){
        echo $this -> Nombre . " esta viajando";
    }




    
}

//CLASE HIJA 
class Jugador extends SeleccionFutbol{
    public $Numero;
    public $Posicion;

    //CONSTRUCTOR
    public function __construct($Id,$Nombre,$Edad,$Numero,$Posicion){
        parent::__construct($Id,$Nombre,$Edad);
        $this -> Numero = $Numero;
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

//CLASE HIJA
class Entrenador extends SeleccionFutbol{
    public $Experiencia;

    public function __construct($Id,$Nombre,$Edad,$Experiencia){
        parent::__construct($Id,$Nombre,$Edad);
        $this -> Experiencia = $Experiencia;
    }

    public function DirigirEntrenamiento(){
        echo $this -> Nombre . " esta dirigiendo el entrenamiento";
    }
    public function DirigirJuego(){
        echo $this -> Nombre . " esta dirigiendo el juego";
    }

}

//LLAMADA DE DATOS
$Jugador1 = new Jugador (1001,"Lionel Messi",34,"Medio-Centro",10);
$Entrenador1 = new Entrenador(1002,"Pep Guardiola",50,15);
echo $Jugador1 -> Concentrarse();
echo '<br>';
echo $Entrenador1 -> DirigirEntrenamiento();

?>