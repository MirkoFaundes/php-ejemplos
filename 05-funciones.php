<?php

function obtenerSaludo ($parametro) {
    return "Hola como estas " .$parametro;

}

function mostrarDatos ($nombres, $apellidos, $curso, $semestre) {
    $mensaje = "Hola soy ".$nombres." ".$apellidos
    ." y estoy en el curso ".$curso." del ".$semestre;
    return $mensaje;

}

function calcular ($operador, $numero1, $numero2) {
    if($operador=="+")
        return $numero1+$numero2;
    if($operador=="-")
        return $numero1-$numero2;
    if($operador=="*")
        return $numero1*$numero2;
    if($operador=="/")
        return $numero1/$numero2;        
}

echo obtenerSaludo("Mirko")."\n";
echo mostrarDatos("Mirko","Faundes",
"Backend developer web","tercer semestre")."\n";
echo "El total de la suma es : ".calcular("+",10,34);
echo mostrarDatos("Mirko","Faundes",
"backend developer web",obtenerSaludo("semestre"))."\n";

?>