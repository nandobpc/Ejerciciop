$(document).ready(() => {
    todos();


    $('#editarForm').off('submit').on('submit', function(event) {
        event.preventDefault();
        actualizarMensaje();
    });


    $('#nuevoMensajeForm').off('submit').on('submit', function(event) {
        event.preventDefault();
        guardarNuevoMensaje();
    });
});

function todos() {
    var html = "";
    $.get("../../../MS2/controllers/Mensajes.controller.php?op=todos", (mensajes) => {
        console.log("Respuesta de la solicitud AJAX:", mensajes); 
        mensajes = JSON.parse(mensajes);
        console.log("Mensajes parseados:", mensajes); 
        $.each(mensajes, (index, mensaje) => {
            html += `<tr>
                <td>${index + 1}</td>
                <td>${mensaje.Telefono}</td>
                <td>${mensaje.Texto}</td>
                <td>${mensaje.Prioridad}</td>
                <td>${mensaje.Estado}</td>
                <td>
                    <button class="btn btn-secondary" onclick="editar(${mensaje.MensajeId})">Editar</button>
                    <button class="btn btn-danger" onclick="confirmarEliminacion(${mensaje.MensajeId})">Eliminar</button>
                </td>
            </tr>`;
        });
        $("#mensajes").html(html);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud AJAX:", textStatus, errorThrown); 
    });
}

function editar(id) {
    $.ajax({
        url: "../../../MS2/controllers/Mensajes.controller.php?op=uno",
        type: "POST",
        data: { MensajeId: id },
        success: function (response) {
            console.log("Respuesta al obtener un mensaje:", response); 
            var mensaje = JSON.parse(response);
            $("#MensajeIdEditar").val(mensaje.MensajeId);
            $("#TelefonoEditar").val(mensaje.Telefono);
            $("#TextoEditar").val(mensaje.Texto);
            $("#PrioridadEditar").val(mensaje.Prioridad);
            $("#EstadoEditar").val(mensaje.Estado);
            $("#editarModal").modal("show");
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

function confirmarEliminacion(id) {
    var resultado = confirm("¿Estás seguro de que deseas eliminar este mensaje?");
    if (resultado) {
        eliminar(id);
    }
}

function eliminar(id) {
    $.ajax({
        url: "../../../MS2/controllers/Mensajes.controller.php?op=eliminar",
        type: "POST",
        data: { MensajeId: id },
        success: function (response) {
            console.log("Mensaje eliminado:", response); 
            todos();
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

function actualizarMensaje() {
    var datosFormulario = $("#editarForm").serialize();

    $.ajax({
        url: "../../../MS2/controllers/Mensajes.controller.php?op=actualizar",
        type: "POST",
        data: datosFormulario,
        success: function (response) {
            console.log("Mensaje actualizado:", response);
            alert("Mensaje actualizado con éxito!"); 
            todos();
            $('#editarModal').modal('hide');
        },
        error: function (xhr, status, error) {
            console.error("Error al actualizar:", xhr.responseText);
            alert("Error al actualizar el mensaje."); 
        }
    });
}

function guardarNuevoMensaje() {
    var datosFormulario = $("#nuevoMensajeForm").serialize();

    $.ajax({
        url: "../../../MS2/controllers/Mensajes.controller.php?op=insertar",
        type: "POST",
        data: datosFormulario,
        success: function (response) {
            console.log("Mensaje guardado:", response);
            alert("Mensaje guardado con éxito!");
            todos();
            $('#nuevoMensajeModal').modal('hide');
        },
        error: function (xhr, status, error) {
            console.error("Error al guardar:", xhr.responseText);
            alert("Error al guardar el mensaje.");
        }
    });
}
