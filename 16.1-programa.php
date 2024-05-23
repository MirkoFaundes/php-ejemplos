<?php

    include("16-encapsulamiento.php");

    $guitarra = new Instrumento("gibson","acustica");
    $guitarra->setearModelos("nylon , alambre");
    echo "Datos de Guitarra\n";
    echo "Nombre : ".$guitarra->nombre."\n";
    echo "Categoria :".$guitarra->categoria."\n";
    echo "Modelos :".$guitarra->mostrarModelos();

    $guitarra->nombre = "yamaha";
    $guitarra->categoria = "electrica";
    $guitarra->setearModelos("nylon , alambre , otro");
    echo "Datos de Guitarra\n";
    echo "Nombre : ".$guitarra->nombre."\n";
    echo "Categoria :".$guitarra->categoria."\n";
    echo "Modelos :".$guitarra->mostrarModelos()."\n";
    echo "Tiene cuerdas ? :".$guitarra->validarCuerdas();

?>