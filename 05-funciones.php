<?php

function obtenerSaludo ($parametro) {
    return "Hola como estas " .$parametro;

}

function mostrarDatos ($nombres, $apellidos, $curso, $semestre) {
    $mensaje = "Hola soy ".$nombres." ".$apellidos
    ." y estoy en el curso ".$curso." del ".$semestre;
    return $mensaje;

}


echo obtenerSaludo("Mirko")."\n";
echo mostrarDatos("Mirko","Faundes",
"Backend developer web","tercer semestre");
?>