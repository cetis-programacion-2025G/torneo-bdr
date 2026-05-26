<?php
function buscarEquipo($conn, $id) {
    $consulta = "SELECT id, nombre, ciudad FROM equipos WHERE id = ?";
    $stmt = $conn->prepare($consulta);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $resultado = $resultado->fetch_assoc();
    return $resultado;
}
