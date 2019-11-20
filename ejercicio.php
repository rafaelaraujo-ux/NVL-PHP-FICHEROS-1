<?php

    $fichero = fopen("el_quijote.txt","r");

    $suma = 0;


    while (($contenido = fgets($fichero)) !== false){

        $contador = mb_substr_count (strtolower($contenido), "molino");

        $suma = $contador + $suma;

    }

    echo "La palabra \"molino\" aparece $suma veces.";

    fclose($fichero);

?>