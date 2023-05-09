<?php 
    /*
    REALIZAR UN PROGRAMA QUE ENVIE UN MENSAJE
    SOLO SI ESTE CONTIENE MENOS DE 100 LETRAS,
    CASO CONTRARIO QUE ARROJE UN MENSAJE DE ERROR
    */

    $Total_Letras = strlen("Hola. Como estas? Que haces? 
    Hola. Como estas? Que haces? 
    Hola. Como estas? Que haces?");

    if ($Total_Letras < 100 ) {
        echo "El mensaje fue enviado exitosamente";
    }else {
        echo "No se ha podido enviar el mensaje porque contiene"
        .$Total_Letras . " letras";
    }

?>

<br>
<br>
<br>

<?php 
    /*CREAR UN PROGRAMA QUE INDIQUE SI LOS HABITANTES HABLAN ESPAÑOL U OTRO IDIOMA*/

    $Pais = "Estados Unidos";
    
    if ($Pais == "Mexico" || $Pais == "España" || $Pais == "Colombia" ) {
        echo "Aqui se habla Español";
    } else {
        echo "Aqui se habla otro idioma";
    }
    

?>