function buscarPacientes() {
   const $nombre = $("#nombre").val();
   //alert ("Buscando..."+nombre);
   let datos ={
    nombre : $nombre
   };
   $.ajax({
    url :"26-ajax-pdo.php",
    type :"post",
    data : datos,
    success : function(result) {
        //console.log(result);
        debugger;
        //const  pacientes = result;
        console.log(result);
        const pacientes=$.parseJSON(result);
        pacientes.forEach(item => {
            agregarFilas("#tabla",item);
        });
    }
   })
return;
}
function agregarFilas(id,paciente) {
    const html=
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+    
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button' onclick = editar('"+paciente.nombres+"','"+paciente.edad+"','"+paciente.talla_m+"','"+paciente.peso_kg+"','"+paciente.sintoma_tos+"','"+paciente.sintoma_fiebre+"','"+paciente.sintoma_disnea+"');>Editar</button></td>"+
    "</tr>";
    $(id +" tr:last").after(html);
}
 
function editar(nombres, edad, talla_m, peso_kg, sintoma_tos, sintoma_fiebre, sintoma_disnea) {
    $('#exampleModal').modal('show');
    $("#name").val(nombres);
    $("#age").val(edad);
    $("#height").val(talla_m);
    $("#weight").val(peso_kg);
    $("#tos2").prop('checked', sintoma_tos);
    $("#fiebre2").prop('checked', sintoma_fiebre);
    $("#disnea2").prop('checked', sintoma_disnea);
}

function eliminar() {
    const $nombre = $("#name").val();
    const $edad = $("#age").val();
    const $talla = $("#height").val();
    const $peso = $("#weight").val();
    const $tos = $("#tos2").prop('checked');
    const $fiebre = $("#fiebre2").prop('checked');
    const $disnea = $("#disnea2").prop('checked');

    let datos = {
        nombre: $nombre,
        edad: $edad,
        talla: $talla,
        peso: $peso,
        tos: $tos,
        fiebre: $fiebre,
        disnea: $disnea
    };
}

function actualizar() {
    const $nombre = $("#name").val();
    const $edad = $("#age").val();
    const $talla = $("#height").val();
    const $peso = $("#weight").val();
    const $tos = $("#tos2").prop('checked');
    const $fiebre = $("#fiebre2").prop('checked');
    const $disnea = $("#disnea2").prop('checked');

    let datos = {
        nombre: $nombre,
        edad: $edad,
        talla: $talla,
        peso: $peso,
        tos: $tos,
        fiebre: $fiebre,
        disnea: $disnea
    };

    

    $.ajax({
        url: "26.1-update-ajax-pdo.php",
        type: "post",
        data: datos,
        success: function(result) {
            alert("Se guardo los datos correctamente de " + result);
        }
    });
    
 
}

$.ajax({
    url: "26.2-delete-ajax-pdo.php",
    type: "post",
    data: datos,
    success: function(result) {
        alert(result);
        $('#exampleModal').modal('hide');
        var row = $('table tr').filter(function() {
            return $(this).find('td:first').text() === $nombre;
        });

        row.remove();

        alert("La fila se eliminó correctamente.");
    }
});

function cancelar() {
    $('#exampleModal').modal('hide');    
}