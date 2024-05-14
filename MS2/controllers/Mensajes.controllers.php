<?php
require_once('../config/cors.php');
require_once('../models/mensajes.models.php');

$mensaje = new Mensaje();
switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $mensaje->todos();
        $todos = array(); // Inicializar el array para almacenar los datos
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;

    case 'uno':
        $MensajeId = $_POST['MensajeId'];
        $datos = $mensaje->uno($MensajeId);
        $row = mysqli_fetch_assoc($datos);
        echo json_encode($row);
        break;

    case 'insertar':
        $Telefono = $_POST['Telefono'];
        $Texto = $_POST['Texto'];
        $Prioridad = $_POST['Prioridad'];
        $Estado = $_POST['Estado'];
        $UsuarioId = $_POST['UsuarioId'];
        $datos = $mensaje->insertar($Telefono, $Texto, $Prioridad, $Estado, $UsuarioId);
        echo json_encode($datos);
        break;

    case 'eliminar':
        $MensajeId = $_POST['MensajeId'];
        $datos = $mensaje->eliminar($MensajeId);
        echo json_encode($datos);
        break;
}
?>
