<?php
    $contador=1;
    $sumanotas=0;
    while($contador<=3) {
        echo "Ingrese sus Notas : ";
        $nota = fgets(STDIN);
        $sumanotas = $sumanotas + $nota;
        $contador++;//$contador=$contador+1
    }
    $notapromedio = $sumanotas/3;
    echo "\n El promedio de notas es :".$notapromedio;
    echo "\n";

    //logica que me permite dar el mayor de 5 numeros
    $mayor=0;
    for($i=1;$i<=5;$i++) {
        echo "Ingrese un numero : ";
        $numero = fgets(STDIN);
        if($mayor<$numero) {
            $mayor=$numero;
        }
    }

    echo "El numero mayor es :".$mayor;

        //logica que me permita dar el menor de 5 numeros
        $menor = PHP_INT_MAX;
        for($i = 1; $i <= 5; $i++) {
            echo "Ingrese un numero : ";
            $numero = fgets(STDIN);
            if($menor > $numero) {
                $menor = $numero;
            }
        }
    
        echo "El numero menor es: " . $menor;