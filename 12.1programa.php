<?php
    include("12-clase.php");

    echo "******** BIENVENIDO A MI CALCULADORA ********\n";
    echo "******** MENU DE OPCIONES ********\n";
    echo "******** SUMAR (OPCION 1) ********\n";
    echo "******** RESTAR (OPCION 2) ********\n";
    echo "******** MULTIPLICAR (OPCION 3) ********\n";
    echo "******** DIVIDIR (OPCION 4) ********\n";
    echo "******** POTENCIA (OPCION 5) ********\n";
    echo "******** RAIZ (OPCION 6) ********\n";
    echo "******** SALIR (OPCION 0) ********\n";
    
    do
    {
        echo "INGRESE LA OPCION :";
        $opcion =fgets(STDIN);
        switch ($opcion) {

        case 1:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numero1 = fgets (STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO:";
            $numero2 = fgets (STDIN);
            $calculadora = new Calculadora($numero1,$numero2);
            $resultado = $calculadora->sumar();
            echo "\nLA SUMA ES :".$resultado;
            # code...
            break;

        case 2:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numero1 = fgets (STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO:";
            $numero2 = fgets (STDIN);
            $calculadora = new Calculadora($numero1,$numero2);
            $resultado = $calculadora->restar();
            echo "\nLA RESTA ES :".$resultado;
            # code...
            break;

        case 3:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numero1 = fgets (STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO:";
            $numero2 = fgets (STDIN);
            $calculadora = new Calculadora($numero1,$numero2);
            $resultado = $calculadora->multiplicar();
            echo "\nLA MULTIPLICACION ES :".$resultado;
            # code...
            break;
            
        case 4:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numero1 = fgets (STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO:";
            $numero2 = fgets (STDIN);
            $calculadora = new Calculadora($numero1,$numero2);
            $resultado = $calculadora->dividir();
            echo "\nLA DIVISION ES :".$resultado;
            # code...
            break;

        case 5:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numero1 = fgets (STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO:";
            $numero2 = fgets (STDIN);
            $calculadora = new Calculadora($numero1,$numero2);
            $resultado = $calculadora->potencia();
            echo "\nLA POTENCIA ES :".$resultado;
            # code...
            break;

        case 6:
            echo "ESCRIBA EL NUMERO:";
            $numero1 = fgets (STDIN);
            $calculadora = new Calculadora($numero1);
            $resultado = $calculadora->raiz();
            echo "\nLA RAIZ CUADRADA ES :".$resultado;
            # code...
            break;

            case 0:
                echo "MUCHAS GRACIAS POR ESTAR AQUI";
                break;
            default;
                # code...
                break;

        }

         if($opcion == 0) break;
         echo "\n Desea continuar ? (1=Si/0=No) :";
         $rpta = fgets(STDIN);


    }
    while($rpta==1);


    ?>