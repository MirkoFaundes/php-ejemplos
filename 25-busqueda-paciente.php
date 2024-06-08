<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <center>
    <center><h1>Busqueda de Pacientes</h1></center>
    <!-- <form action="22.1-consulta-pdo.php" method="POST"> -->
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <label id="fiebre" name="fiebre">Fiebre</label><input type="checkbox" for="fiebre">
    <label id="disnea" name="disnea">Disnea</label><input type="checkbox" for="disnea">
    <button type="button" onclick="buscarPacientes();">Buscar</button>
    <table style="border: 1px solid black;" id="tabla">
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Acciones</td>
        </tr>          
    </table>
    <!-- </form> -->
    <script type="text/javascript"
    src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="25.1-ajax.js"></script>
 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo Paciente
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <label for="name" class="form-label">Nombre:</label>
                     <input type="text" class="form-control" id="name" name="name"/>
                     <label for="age" class="form-label">Edad</label>
                     <input type="text" class="form-control" id="age" name="age"/>
                     <label for="height" class="form-label">Talla</label>
                     <input type="text" class="form-control" id="height" name="height"/>
                     <label for="weight" class="form-label">Peso</label>
                     <input type="text" class="form-control" id="weight" name="weight"/>

                     <label id="tos2" name="tos2">Tos</label><input type="checkbox" for="tos2">
                     <label id="fiebre2" name="fiebre2">Fiebre</label><input type="checkbox" for="fiebre2">
                     <label id="disena2" name="disnea2">Disnea</label><input type="checkbox" for="disnea2"><br>
                     <button type="button" class="btn-accept" onclick="actualizar()">Guardar</button>
                     <button type="button" class="btn-delete" onclick="eliminar()">Eliminar</button>
                </div
            </div>
        </div>
    </div>
</center>
</body>
</html>