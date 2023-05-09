<?php
/*
function Saludo($Nombre){
    echo "Hola " . $Nombre . ", eres un gran programador" . '<br>';
}

Saludo("Luis");
Saludo("Delia");
Saludo("Arturo");
Saludo("Thiago");
*/

function Operaciones($Numero1 ,$Numero2 , $Operadores){
    $Resultados = 0;
    if ($Operadores == "Suma") {
        $Resultados = $Numero1 + $Numero2;
    }elseif($Operadores == "Resta"){
        $Resultados = $Numero1 - $Numero2;
    }elseif($Operadores == "Multiplicar"){
        $Resultados = $Numero1 * $Numero2;
    }elseif($Operadores == "Division"){
        $Resultados = $Numero1 / $Numero2;
    }else{
        echo "No se reconoce la operacion";
    }
    return $Resultados;
}

$Imprimir = Operaciones(5,2,"Multiplicar");
    echo $Imprimir;    
?>