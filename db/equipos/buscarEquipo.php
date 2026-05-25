<?php
function buscarEquipo(&$datos, $id) {
    for ($i = 0; $i < count($datos['equipos']); $i++) {
        if ($datos['equipos'][$i]['id'] === $id) return $datos['equipos'][$i];
    }
    return null;
}
