<?php
error_reporting(0);
require_once('../config/cors.php');
require_once('../models/registro.models.php');

$registro = new Registro();

switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $registro->todos();
        $todos = array();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;

    case 'uno':
        $RegistrId = $_POST['RegistrId'];
        $datos = $registro->uno($RegistrId);
        $row = mysqli_fetch_assoc($datos);
        echo json_encode($row);
        break;

    case 'insertar':
        $TipoDocumento = $_POST['TipoDocumento'];
        $Cedula = $_POST['Cedula'];
        $Nombres = $_POST['Nombres'];
        $Apellidos = $_POST['Apellidos'];
        $PaisId = $_POST['PaisId'];
        $CiudadId = $_POST['CiudadId'];
        $Telefono = $_POST['Telefono'];
        $UsuarioId = 1; // Cambia esto por el ID de usuario real
        $datos = array();
        $datos = $registro->insertar($TipoDocumento, $Cedula, $Nombres, $Apellidos, $PaisId, $CiudadId, $Telefono, $UsuarioId);
        echo json_encode($datos);
        break;

    case 'actualizar':
        $RegistrId = $_POST['RegistrId'];
        $TipoDocumento = $_POST['TipoDocumento'];
        $Cedula = $_POST['Cedula'];
        $Nombres = $_POST['Nombres'];
        $Apellidos = $_POST['Apellidos'];
        $PaisId = $_POST['PaisId'];
        $CiudadId = $_POST['CiudadId'];
        $Telefono = $_POST['Telefono'];
        $UsuarioId = 1; // Cambia esto por el ID de usuario real
        $datos = array();
        $datos = $registro->actualizar($RegistrId, $TipoDocumento, $Cedula, $Nombres, $Apellidos, $PaisId, $CiudadId, $Telefono, $UsuarioId);
        echo json_encode($datos);
        break;

    case 'eliminar':
        $RegistrId = $_POST['RegistrId'];
        $datos = array();
        $datos = $registro->eliminar($RegistrId);
        if ($datos) {
            echo json_encode(array("mensaje" => "Registro eliminado exitosamente."));
        } else {
            echo json_encode(array("error" => "Hubo un error al intentar eliminar el registro."));
        }
        break;
}
?>
