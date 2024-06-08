<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "covid";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->beginTransaction();
        $sql = "DELETE FROM pacientes WHERE nombres = :nombre";
        $stmt = $conn->prepare($sql);
        $stmt->execute([":nombre" => $nombre]);
        $conn->commit();
        echo "Paciente eliminado correctamente.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>