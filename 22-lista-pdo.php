<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
</head>
<body>
    
    <center><h1>Busqueda de Pacientes</h1>
    </center>


     <center><form action="22.1-consulta-pdo.php" method="POST">
    <label for = "nombre">Nombre o Apellido </label>
    <input type = "text" id=nombreapellido name = "nombreapellido" requried><br>&nbsp;&nbsp;

    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <label id="fiebre" name="fiebre">Fiebre</label><input type="checkbox" for="fiebre">
    <label id="disnea" name="disnea">Disnea</label><input type="checkbox" for="disnea">
    <label id="dolor_muscular" name="dolor_muscular">Dolor Muscular</label><input type="checkbox" for="dolor_muscular">
    <button type="submit">Buscar</button>
    <table style="border: 1px solid black;">
    </center>

    
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Dolor Muscular</td>
            <td>Acciones</td>
        </tr>
        <?php         
            
            if(isset($_GET["consulta"]) ) {
                echo $_GET["nombre"];
                $pacientes=array(
                    0=>array("Nombres"=>"Juan","Edad"=>18,"Talla"=>150,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1, "Dolor Muscular"=>1),
                    1=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1, "Dolor Muscular"=>1),
                    2=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1, "Dolor Muscular"=>1),
                    3=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1, "Dolor Muscular"=>1),
                    4=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1, "Dolor Muscular"=>1),
                    5=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1, "Dolor Muscular"=>1),
                    6=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1, "Dolor Muscular"=>1)
                );
                    foreach ($pacientes as $row) {
                        echo "<tr>";
                        echo "<td>".$row["Nombres"]."</td>";
                        echo "<td>".$row["Edad"]."</td>";
                        echo "<td>".$row["Talla"]."</td>";
                        echo "<td>".$row["Peso"]."</td>";
                        echo "<td>".($row["Tos"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["Fiebre"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["Disnea"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["Dolor Muscular"]==1 ? "Si" : "No")."</td>";
                        echo "<td> <a href = '23-edicion-pdo.php?'><button type='button'>Editar</button> <a href = '22-lista-pdo.php?'><button type='button'>Cancelar</button>";
                        echo "</tr>";
                    }    
            }
        ?>        
    </table>
    </form>
</body>
</html>