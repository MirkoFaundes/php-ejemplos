<?php

//realizar un programa que me permita imprimir
//los tres colores del semaforo
//siendo el siguiente enunciado
//Si el semaforo esta en rojo debe decir ¡pare!
//Si el semaforo esta en amarillo debe decir ¡espera!
//Si el semaforo esta en verde debe decir ¡avanza!
//para ello el programa debe pedir al usuario que ingrese
//un numero o una letra para luego evaluar que color 
//esta eligiendo .

    echo "ingrese un numero del 1 al 3 :";
    $numero=fgets(STDIN);

    $rojo = "¡Pare!";
    $amarillo = "¡Espere!";
    $verde = "¡Avanza!";
    $invalido = "Ingrese un numero valido.";

    if($numero=="1")
        echo $rojo;
    if($numero=="2")
        echo $amarillo;
    if($numero=="3")
        echo $verde;
    if($numero>="4")
        echo $invalido;

?>