<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];
    $tos = array_key_exists("tos", $_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre", $_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea = array_key_exists("disnea", $_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea == "" ? "0" : $disnea;

    if (empty($nombre) || empty($edad) || empty($talla) || empty($peso)) {
        echo "Todos los campos son obligatorios.";
    }

    if ($tos == 1 || $fiebre == 1 || $disnea == 1) {
        $resultado = "1";
    } else {
        $resultado = "0";
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "covid";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->beginTransaction();
        $sql = "UPDATE pacientes SET nombres = :nombre, edad = :edad, talla_m = :talla, peso_kg = :peso, sintoma_tos = :tos, sintoma_fiebre = :fiebre, sintoma_disnea = :disnea, resultado = :resultado WHERE nombres = :nombre";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":nombre" => $nombre,
            ":edad" => $edad,
            ":talla" => $talla,
            ":peso" => $peso,
            ":tos" => $tos,
            ":fiebre" => $fiebre,
            ":disnea" => $disnea,
            ":resultado" => $resultado
        ]);
        $conn->commit();
        echo "Fue registrado correctamente.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>d