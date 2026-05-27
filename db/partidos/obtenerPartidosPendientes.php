<?php
function obtenerPartidosPendientes($conn) {
    $query = 
        "SELECT 
            p.id,
            el.nombre AS local,
            ev.nombre AS visitante,
            p.goles_local,
            p.goles_visitante,
            IF(p.estado = 1, 'Jugado', 'Pendiente') AS jugado
        FROM partidos as p
        INNER JOIN equipos as el ON p.equipo_local_id = el.id
        INNER JOIN equipos as ev ON p.equipo_visitante_id = ev.id
        WHERE p.estado = 0
    ;";
    $resultado = $conn->query($query);
    return $resultado->fetch_all(MYSQLI_ASSOC);
}
