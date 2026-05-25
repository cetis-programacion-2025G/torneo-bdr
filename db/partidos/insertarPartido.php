<?php
// TODO (MySQL):
// INSERT INTO partidos (id_local, id_visitante, goles_local, goles_visitante, jugado)
// VALUES (?, ?, 0, 0, 0)
function insertarPartido(&$datos, $id_local, $id_visitante) {
    $nuevo = [
        'id'              => count($datos['partidos']) + 1,
        'id_local'        => $id_local,
        'id_visitante'    => $id_visitante,
        'goles_local'     => 0,
        'goles_visitante' => 0,
        'jugado'          => false,
    ];
    $datos['partidos'][] = $nuevo;
    return $nuevo['id'];
}
