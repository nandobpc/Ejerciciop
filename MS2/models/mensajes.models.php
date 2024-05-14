<?php
require_once('../config/conexion.php');

class Mensaje {
    public function todos() {
        $conn = new Conexion();
        $con = $conn->conectar();
        $query = "SELECT * FROM Mensajes";
        $result = mysqli_query($con, $query);
        if (!$result) {
            die('Query Failed: ' . mysqli_error($con)); // Log para errores en la consulta
        }
        return $result;
    }

    public function uno($MensajeId) {
        $conn = new Conexion();
        $con = $conn->conectar();
        $query = "SELECT * FROM Mensajes WHERE MensajeId = $MensajeId";
        $result = mysqli_query($con, $query);
        if (!$result) {
            die('Query Failed: ' . mysqli_error($con)); // Log para errores en la consulta
        }
        return $result;
    }

    public function insertar($Telefono, $Texto, $Prioridad, $Estado, $UsuarioId) {
        $conn = new Conexion();
        $con = $conn->conectar();
        $query = "INSERT INTO Mensajes (Telefono, Texto, Prioridad, Estado, UsuarioId) VALUES ('$Telefono', '$Texto', '$Prioridad', '$Estado', $UsuarioId)";
        $result = mysqli_query($con, $query);
        if (!$result) {
            die('Query Failed: ' . mysqli_error($con)); // Log para errores en la consulta
        }
        return $result;
    }

    public function eliminar($MensajeId) {
        $conn = new Conexion();
        $con = $conn->conectar();
        $query = "DELETE FROM Mensajes WHERE MensajeId = $MensajeId";
        $result = mysqli_query($con, $query);
        if (!$result) {
            die('Query Failed: ' . mysqli_error($con)); // Log para errores en la consulta
        }
        return $result;
    }
}
?>
