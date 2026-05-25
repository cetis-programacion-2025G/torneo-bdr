<?php
// TODO (MySQL):
// INSERT INTO equipos (nombre, ciudad) VALUES (?, ?)
function insertarEquipo(&$datos, $nombre, $ciudad) {
    $nuevo = [
        'id'     => count($datos['equipos']) + 1,
        'nombre' => $nombre,
        'ciudad' => $ciudad,
    ];
    $datos['equipos'][] = $nuevo;
    return $nuevo['id'];
}
