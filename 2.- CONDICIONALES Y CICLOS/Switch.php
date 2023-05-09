<?php

 /*
    REALICE UN PROGRAMA QUE IMPRIMA CUAL ES TU COLOR FAVORITO 
    MOSTRAR UN EJEMPLO CON IF - ELSE Y CON SWITCH
 */

 $Color_Favorito = "Rojo";

switch ($Color_Favorito) {
   case 'Rojo': 
      echo "Tu color favorito es: ";
      break;
   case 'Azul':    
      echo "Tu color favorito es: ";
      break;
   case 'Amarillo':    
      echo "Tu color favorito es: ";
      break;
   default :
      echo "Tu colo favorito no es rojo , ni azul y tampoco amarillo";   
}

/*
 if ($Color_Favorito == "Azul") {
    echo "Tu color favorito es: " .$Color_Favorito;
 } elseif($Color_Favorito == "Rojo") {
    echo "Tu color favorito es: " .$Color_Favorito;
 }elseif($Color_Favorito == "Rosado") {
    echo "Tu color favorito es: " .$Color_Favorito;
 }elseif($Color_Favorito == "Morado") {
    echo "Tu color favorito es: " .$Color_Favorito;
 }else {
    echo "No se ah encontrado  este color";
 }
 */
?>