<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
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
    <div class="row flex-grow">
        <a type="button" class="btn btn-primary" href="./insertar.php">Nuevo</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Teléfono</th>
                    <th>Texto</th>
                    <th>Prioridad</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="mensajes"></tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./mensajes.js"></script>
</body>
</html>
