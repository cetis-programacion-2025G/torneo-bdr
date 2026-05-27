<?php
function registrarResultado($conn, $id_partido, $goles_local, $goles_visitante) {
    $query =
        "UPDATE partidos 
         SET 
            goles_local = ?, 
            goles_visitante = ?, 
            estado = 1
         WHERE 
            id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iii", $goles_local, $goles_visitante, $id_partido);
    if ($stmt->execute()) {
        return true;
    }

    return false;
}
