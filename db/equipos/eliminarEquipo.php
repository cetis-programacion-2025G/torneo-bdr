<?php
// TODO (MySQL):
// DELETE FROM equipos WHERE id = ?
function eliminarEquipo(&$datos, $id) {
    for ($i = 0; $i < count($datos['equipos']); $i++) {
        if ($datos['equipos'][$i]['id'] === $id) {
            array_splice($datos['equipos'], $i, 1);
            return true;
        }
    }
    return false;
}
