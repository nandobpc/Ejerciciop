$(document).ready(() => {

  todos();
  pais();

  
  $('#PaisId').change(function() {
    var paisId = $(this).val();
    ciudad(paisId);
  });

  $('#editPaisId').change(function() {
    var paisId = $(this).val();
    ciudad(paisId, null, true);
  });

 
  $('#registroForm').off('submit').on('submit', function(event) {
    event.preventDefault();
    guardarNuevoRegistro();
  });


  $('#editarForm').off('submit').on('submit', function(event) {
    event.preventDefault();
    actualizarRegistro();
  });
});

function todos() {
  var html = "";
  $.get("../../../MS1/controllers/Registro.controller.php?op=todos", (registros) => {
    registros = JSON.parse(registros);
    $.each(registros, (index, valor) => {
      html += `<tr>
                <td>${index + 1}</td>
                <td>${valor.TipoDocumento}</td>
                <td>${valor.Cedula}</td>
                <td>${valor.Nombres}</td>
                <td>${valor.Apellidos}</td>
                <td>${valor.Pais}</td>
                <td>${valor.Ciudad}</td>
                <td>${valor.Telefono}</td>
                <td>
                  <button class="btn btn-secondary" onclick="editar(${valor.RegistrId})">Editar</button>
                  <button class="btn btn-danger" onclick="confirmarEliminacion(${valor.RegistrId})">Eliminar</button>
                </td>
              </tr>`;
    });
    $("#registros").html(html);
  });
}

function editar(id) {
  console.log("Editar registro con RegistrId:", id);
  $.ajax({
    url: "../../../MS1/controllers/Registro.controller.php?op=uno",
    type: "POST",
    data: { RegistrId: id },
    success: function(response) {
      var registro = JSON.parse(response);
      $("#editRegistrId").val(registro.RegistrId);
      $("#editTipoDocumento").val(registro.TipoDocumento);
      $("#editCedula").val(registro.Cedula);
      $("#editNombres").val(registro.Nombres);
      $("#editApellidos").val(registro.Apellidos);
      $("#editPaisId").val(registro.PaisId);
      $("#editTelefono").val(registro.Telefono);

     
      ciudad(registro.PaisId, registro.CiudadId, true);

      $('#editarModal').modal('show');
    },
    error: function(xhr, status, error) {
      console.error(xhr.responseText);
    }
  });
}

function confirmarEliminacion(id) {
  var resultado = confirm("¿Estás seguro de que deseas eliminar este registro?");
  if (resultado) {
    eliminar(id);
  }
}

function eliminar(id) {
  $.ajax({
    url: "../../../MS1/controllers/Registro.controller.php?op=eliminar",
    type: "POST",
    data: { RegistrId: id },
    success: function(response) {
      console.log(response);
      todos();
    },
    error: function(xhr, status, error) {
      console.error(xhr.responseText);
    }
  });
}

function guardarNuevoRegistro() {
  var datosFormulario = $("#registroForm").serialize(); 

  $.ajax({
    url: "../../../MS1/controllers/Registro.controller.php?op=insertar",
    type: "POST",
    data: datosFormulario,
    success: function(response) {
      console.log("Registro guardado:", response);
      alert("Registro guardado con éxito!");
      window.location.href = "./registros.php"; 
    },
    error: function(xhr, status, error) {
      console.error("Error al guardar:", xhr.responseText);
      alert("Error al guardar el registro.");
    }
  });
}

function actualizarRegistro() {
  var datosFormulario = $("#editarForm").serialize();

  $.ajax({
    url: "../../../MS1/controllers/Registro.controller.php?op=actualizar",
    type: "POST",
    data: datosFormulario,
    success: function(response) {
      console.log("Registro actualizado:", response);
      alert("Registro actualizado con éxito!"); 
      todos();
      $('#editarModal').modal('hide');
    },
    error: function(xhr, status, error) {
      console.error("Error al actualizar:", xhr.responseText);
      alert("Error al actualizar el registro."); 
    }
  });
}

function pais() {
  $.ajax({
    url: "../../../MS1/controllers/Pais.controller.php?op=todos",
    type: "GET",
    success: function(response) {
      response = JSON.parse(response);
      var html = "<option>Seleccione su país</option>";
      $.each(response, function(i, item) {
        html += '<option value="' + item.Codigo + '">' + item.Pais + "</option>";
      });
      $("#PaisId, #editPaisId").html(html);
    },
    error: function(xhr, status, error) {
      console.error(xhr.responseText);
    }
  });
}

function ciudad(paisId, ciudadId = null, isEdit = false) {
  $.ajax({
    url: "../../../MS1/controllers/Ciudad.controller.php?op=todosFiltro",
    type: "POST",
    data: { Paises_Codigo: paisId },
    success: function(response) {
      response = JSON.parse(response);
      var html = "<option>Seleccione su ciudad</option>";
      $.each(response, function(i, item) {
        html += '<option value="' + item.idCiudades + '">' + item.Ciudad + "</option>";
      });
      if (isEdit) {
        $("#editCiudadId").html(html);
        if (ciudadId) {
          $("#editCiudadId").val(ciudadId);
        }
      } else {
        $("#CiudadId").html(html);
      }
    },
    error: function(xhr, status, error) {
      console.error(xhr.responseText);
    }
  });
}
