<?php
// TODO (MySQL):
function actualizarEquipo($conn, $id, $nombre, $ciudad) {
    $consulta = "UPDATE equipos SET nombre = ?, ciudad = ? WHERE id = ?";
    $stmt = $conn->prepare($consulta);
    $stmt->bind_param("ssi", $nombre, $ciudad, $id);
    $resut = $stmt->execute();
    if ($resut) {
        $stmt->close();
        return true;
    }
    $stmt->close();
    return false;
}
