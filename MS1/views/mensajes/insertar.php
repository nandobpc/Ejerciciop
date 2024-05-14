<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje</title>
    <link rel="stylesheet" href="../../public/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../../public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../public/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../../public/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/js/select.dataTables.min.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" />
</head>
<body>
    <div class="card-body">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Nuevo Mensaje</h4>
                    <p class="card-description">Mensaje</p>
                    <form class="forms-sample" id="mensajeForm">
                        <input type="hidden" name="UsuarioId" id="UsuarioId">
                        <div class="form-group">
                            <label for="Telefono">Teléfono</label>
                            <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Ingrese el número de teléfono">
                        </div>
                        <div class="form-group">
                            <label for="Texto">Texto del Mensaje</label>
                            <textarea class="form-control" id="Texto" name="Texto" rows="4" placeholder="Ingrese el texto del mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Prioridad">Prioridad</label>
                            <select class="form-control" id="Prioridad" name="Prioridad">
                                <option>Alta</option>
                                <option>Media</option>
                                <option>Baja</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Estado">Estado</label>
                            <select class="form-control" id="Estado" name="Estado">
                                <option>Enviado</option>
                                <option>Pendiente</option>
                                <option>Rechazado</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Guardar</button>
                        <a class="btn btn-light" href="./mensajes.php">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./mensajes.js"></script>
</body>
</html>
