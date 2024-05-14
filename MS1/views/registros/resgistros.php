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
                    <th>Tipo de Documento</th>
                    <th>Cédula o Pasaporte</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Pais</th>
                    <th>Ciudad</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="registros"></tbody>
        </table>
    </div>

    <!-- Modal para edición -->
    <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Editar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de edición -->
                    <form id="editarForm">
                        <input type="hidden" name="RegistrId" id="editRegistrId">
                        <div class="form-group">
                            <label for="editTipoDocumento">Tipo de Documento</label>
                            <select class="form-control" id="editTipoDocumento" name="TipoDocumento">
                                <option>Seleccionar</option>
                                <option value="Cedula">Cédula</option>
                                <option value="Pasaporte">Pasaporte</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editCedula">Cédula o Pasaporte</label>
                            <input type="text" class="form-control" id="editCedula" name="Cedula" placeholder="Ingrese su documento de identidad">
                        </div>
                        <div class="form-group">
                            <label for="editNombres">Nombres</label>
                            <input type="text" class="form-control" id="editNombres" name="Nombres" placeholder="Nombres">
                        </div>
                        <div class="form-group">
                            <label for="editApellidos">Apellidos</label>
                            <input type="text" class="form-control" id="editApellidos" name="Apellidos" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <label for="editPaisId">País</label>
                            <select class="form-control" id="editPaisId" name="PaisId">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editCiudadId">Ciudad</label>
                            <select class="form-control" id="editCiudadId" name="CiudadId">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editTelefono">Teléfono</label>
                            <input type="text" class="form-control" id="editTelefono" name="Telefono" placeholder="Teléfono">
                        </div>
                        <button type="submit" class="btn btn-primary me-2" id="btnActualizar">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your custom JavaScript -->
    <script src="./registro.js"></script>
</body>

</html>
