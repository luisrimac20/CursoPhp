<?php

//CREAR UN PROGRAMA QUE IMPRIMA LOS NUMEROS DEL 1 AL 10 

echo "PRIMER EJERCICIO" . '<br>';

for ($i=0; $i <= 10; $i++) { 
    echo $i . '<br>';
}

?>

<br>
<br>

<?php

//CREAR UN PROGRAMA QUE IMPRIMA LOS NUMEROS PARES HASTA EL 50 

echo "SEGUNDO EJERCICIO" . '<br>';

for ($Par=0; $Par <= 50 ; $Par++) { 
    if ($Par % 2 == 0) {
        echo $Par . '<br>';
    }
}


?>