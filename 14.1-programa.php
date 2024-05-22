<?php
    include("14-herencia.php");

    echo "EJEMPLO DE HERENCIA CON ANIMALES\n";

    $perro = new Perro("Coimita","Verde",false,"perro.mp3");

    echo $perro->obtenerInformacion()."\n";
    echo $perro->hacerSonido("Guau")."\n";

    $gato = new Gato("Misifu","Rojo",false,"gato.mp3");

    echo $gato->obtenerInformacion()."\n";
    echo $gato->hacerSonido("Miau")."\n";

    $pollo = new Pollo("Pollito","Amarillo",false,"pollo.mp3");

    echo $pollo->obtenerInformacion()."\n";
    echo $pollo->hacerSonido("Pio-Pio")."\n";


?>