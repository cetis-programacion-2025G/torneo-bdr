<?php
// TODO (MySQL):
// UPDATE equipos SET nombre = ?, ciudad = ? WHERE id = ?
function actualizarEquipo(&$datos, $id, $nombre, $ciudad) {
    for ($i = 0; $i < count($datos['equipos']); $i++) {
        if ($datos['equipos'][$i]['id'] === $id) {
            $datos['equipos'][$i]['nombre'] = $nombre;
            $datos['equipos'][$i]['ciudad'] = $ciudad;
            return true;
        }
    }
    return false;
}
