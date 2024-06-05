function buscarPaciente() {
    const $nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    let datos = {
        nombre : $nombre
    };

    $.ajax({
        url :"26-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {
            debugger;
            //console.log(result);
            const pacientes = result;
            pacientes.forEach(item => {
                agregarFilas("#tabla",item);
            });
        }
    })


    return;

}

function agregarFilas(Id,paciente){
    const html =
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button'>Editar</td>"+
    "</tr>";
    $(Id + " tr:last").after(html);
}