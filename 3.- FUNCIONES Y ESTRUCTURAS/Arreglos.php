<?php

//FORMAS DE DECLARAR UN ARREGLO 

/*$Arreglo1 = array("Elemento1" , 2 , "Elemento3" , 25, 5 , 6);
  $Arreglo2 = ["Elemento1" , 20 , "Elemento3" , "Elemento4", true , false];
    
echo '<pre>';
    var_dump($Arreglo1[0]);
echo '</pre>';
*/

$Arreglo3 = array(
    'Nombre' => 'Luis',
    'Edad' => 20,
    'Celular' => 963852741,
    'Estatura' => 1.72,
);

//ARREGLO VALORES
$Arreglo3['Email'] = 'rimacchavezluis@gmail.com' ;

//MODIFICAR VALORES 
$Arreglo3['Celular'] = 987654321;


echo '<pre>';
    var_dump($Arreglo3);
echo '</pre>';

//ELIMNAR EL ULTIMO ELEMENTO DEL ARREGLO
array_pop($Arreglo3);

//ENCONTRAR VALORES EN EL ARREGLO 

in_array(20,$Arreglo3);

echo '<pre>';
    var_dump(in_array(20,$Arreglo3));
echo '</pre>';

?>