<?php
function registrarResultado(&$datos, $id_partido, $goles_local, $goles_visitante) {
    for ($i = 0; $i < count($datos['partidos']); $i++) {
        if ($datos['partidos'][$i]['id'] === $id_partido) {
            $datos['partidos'][$i]['goles_local']     = $goles_local;
            $datos['partidos'][$i]['goles_visitante'] = $goles_visitante;
            $datos['partidos'][$i]['jugado']          = true;
            return true;
        }
    }
    return false;
}
