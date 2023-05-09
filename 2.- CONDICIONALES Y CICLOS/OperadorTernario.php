<?php 

/*
    PARA QUE UN ALUMNO GANE UNA ASIGNACION DEBE SACAR
    MAS DE 3 EN LA NOTA DEFINITIVA,CASO CONTRARIO PIERDE
    LA ASIGNATURA
*/
/*
$Nota = 4;

if ($Nota > 4 ) {
    echo 'Ganaste la asignatura';
}else {
    echo 'Perdiste la asignacion';
}
*/

$Nota = 14;

echo($Nota > 4 ? 'GANASTE LA ASIGNATURA' : 'PERDISTE LA ASIGNATURA' );


?>