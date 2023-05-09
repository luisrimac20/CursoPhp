<?php
    /*CREAR UN PROGRAMA PARA CONVERTIR DE CM
      A PULGADAS Y DE KG A LIBRAS
    */ 
    define('PULGADAS' , 0.393701);
    define('LIBRA' , 2.20462);

    $Cm = 50;
    $Kilo = 5;

    echo $Cm * PULGADAS . '<br>';
    echo $Kilo * LIBRA;
?>

