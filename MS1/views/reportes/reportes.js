$().ready(() => {
    cargarReportes();
});

const cargarReportes = () => {
    $.get("../../controllers/Reporte.controller.php?op=todos", (reportes) => {
        reportes = JSON.parse(reportes);
        let html = "";
        $.each(reportes, (index, reporte) => {
            html += `<tr>
                        <td>${index + 1}</td>
                        <td>${reporte.Tema}</td>
                        <td>${reporte.UsuarioId}</td>
                        <td>${reporte.Fecha}</td>
                        <td>
                            <button class="btn btn-secondary" onclick="editar(${reporte.ReporteId})">Editar</button>
                            <button class="btn btn-danger" onclick="confirmarEliminacion(${reporte.ReporteId})">Eliminar</button>
                        </td>
                    </tr>`;
        });
        $("#reportes").html(html);
    });
};

const editar = (id) => {
    $.ajax({
        url: "../../controllers/Reporte.controller.php?op=uno",
        type: "POST",
        data: { ReporteId: id },
        success: function (response) {
            const reporte = JSON.parse(response);
            $("#Tema").val(reporte.Tema);
            $("#Fecha").val(reporte.Fecha);
            $("#editarModal").modal("show");
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
};

const confirmarEliminacion = (id) => {
    const resultado = confirm("¿Estás seguro de que deseas eliminar este reporte?");
    if (resultado) {
        eliminar(id);
    }
};

const eliminar = (id) => {
    $.ajax({
        url: "../../controllers/Reporte.controller.php?op=eliminar",
        type: "POST",
        data: { ReporteId: id },
        success: function (response) {
            console.log(response);
            cargarReportes();
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
};
