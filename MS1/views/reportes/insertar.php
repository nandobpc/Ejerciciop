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


<div class="card-body">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nuevo Reporte</h4>
                <p class="card-description">Reporte</p>
                <form class="forms-sample" id="reporteForm">
                    <input type="hidden" name="UsuarioId" id="UsuarioId">
                    <div class="form-group">
                        <label for="Tema">Tema</label>
                        <input type="text" class="form-control" id="Tema" name="Tema" placeholder="Ingrese el tema del reporte">
                    </div>
                    <div class="form-group">
                        <label for="Fecha">Fecha</label>
                        <input type="date" class="form-control" id="Fecha" name="Fecha">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Guardar</button>
                    <a class="btn btn-light" href="./reportes.php">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="./reportes.js"></script>
