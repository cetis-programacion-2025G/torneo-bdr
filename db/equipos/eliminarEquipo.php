<?php
function eliminarEquipo($conn, $id) {
    $consulta = "DELETE FROM equipos WHERE id = ?";
    $stmt = $conn->prepare($consulta);
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();
    $stmt->close(); 
    if (!$result) {
        return false;
    }
    return true;
}
