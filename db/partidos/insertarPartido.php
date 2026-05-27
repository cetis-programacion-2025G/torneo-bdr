<?php
// TODO (MySQL):

function insertarPartido($conn, $id_local, $id_visitante) {
    $query = 
        "INSERT INTO partidos 
            (equipo_local_id, equipo_visitante_id, goles_local, goles_visitante, estado)
             VALUES 
            (?, ?, 0, 0, 0)
        ";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $id_local, $id_visitante);
    if ($stmt->execute()) {
        return $stmt->insert_id;
    }
    return false;
}
