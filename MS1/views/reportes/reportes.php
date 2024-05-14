<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../public/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../../public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../public/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../../public/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../public/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" />
</head>

<body>

    <div class="row flex-grow">
        <a type="button" class="btn btn-primary" href="./insertar.php">Nuevo</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tema</th>
                    <th>Usuario ID</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="reportes"></tbody>
        </table>
    </div>

    <!-- Modal para editar -->
    <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Editar Reporte</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de edición -->
                    <form id="edicionForm" class="forms-sample">
                        <input type="hidden" name="ReporteId" id="ReporteIdEditar">
                        <div class="form-group">
                            <label for="TemaEditar">Tema</label>
                            <input type="text" class="form-control" id="TemaEditar" name="TemaEditar" placeholder="Tema del reporte">
                        </div>
                        <div class="form-group">
                            <label for="UsuarioIdEditar">Usuario ID</label>
                            <input type="text" class="form-control" id="UsuarioIdEditar" name="UsuarioIdEditar" placeholder="ID del usuario">
                        </div>
                        <div class="form-group">
                            <label for="FechaEditar">Fecha</label>
                            <input type="date" class="form-control" id="FechaEditar" name="FechaEditar">
                        </div>
                        <button type="button" class="btn btn-primary me-2" onclick="guardarEdicion()">Guardar</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./reportes.js"></script>
</body>

</html>
