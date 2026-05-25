<?php
function obtenerPartidos(&$datos) {
    $resultado = [];
    for ($i = 0; $i < count($datos['partidos']); $i++) {
        $p         = $datos['partidos'][$i];
        $local     = null;
        $visitante = null;
        for ($j = 0; $j < count($datos['equipos']); $j++) {
            if ($datos['equipos'][$j]['id'] === $p['id_local'])     $local     = $datos['equipos'][$j];
            if ($datos['equipos'][$j]['id'] === $p['id_visitante']) $visitante = $datos['equipos'][$j];
        }
        $resultado[] = [
            'id'              => $p['id'],
            'local'           => $local     ? $local['nombre']     : '(desconocido)',
            'visitante'       => $visitante ? $visitante['nombre'] : '(desconocido)',
            'goles_local'     => $p['goles_local'],
            'goles_visitante' => $p['goles_visitante'],
            'jugado'          => $p['jugado'] ? 'Jugado' : 'Pendiente',
        ];
    }
    return $resultado;
}
