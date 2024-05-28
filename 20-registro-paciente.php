<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Paciente</title>
</head>
<body>
    <h1>Registro de Paciente</h1>
    <form id= "formulario" action="21-pdo-post.php" method= "post">
        <label for = "nombre">Nombres:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for = "apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        <label for = "edad">Edad:</label>
        <input type="text" id="edad" name="edad" required><br>
        <label for = "talla">Talla (cm):</label>
        <input type="text" id="talla" name="talla" required><br>
        <label for = "peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso" required><br>
        <h2><u>Sintomas</u></h2>
        <input type="checkbox" name="fiebre" id="fiebre">
        <label for="fiebre">Fiebre</label><br>
        <input type="checkbox" name="disnea" id="disnea">
        <label for="disnea">Disnea</label><br>
        <input type="checkbox" name="dolor_muscular" id="dolor_muscular">
        <label for="dolor_muscular">Dolor muscular</label><br>
        <input type="checkbox" name="gripe" id="gripe">
        <label for="gripe">Gripe</label><br>
        <input type="checkbox" name="presion_alta" id="presion_alta">
        <label for="presion_alta">Presion alta</label><br>
        <input type="checkbox" name="fatiga" id="fatiga">
        <label for="fatiga">Fatiga</label><br>
        <input type="checkbox" name="garraspera" id="garraspera">
        <label for="garraspera">Garraspera</label><br>
        <label for="fecha">Fecha de Vacunacion:</label>
        <input type="date" id="fecha" name="fecha">
        <div class="botones">
            <br>
            <button type="submit">Guardar</button> 
            <button>Cancelar</button>
        </div>
    </form>
    
</body>
</html>