<?php
function listarPartidos($conn) {
    $filas = obtenerPartidos($conn);
    $columnas = [
        ['titulo' => 'ID',        'clave' => 'id',              'ancho' => 4],
        ['titulo' => 'Local',     'clave' => 'local',           'ancho' => 16],
        ['titulo' => 'Visitante', 'clave' => 'visitante',       'ancho' => 16],
        ['titulo' => 'G.L.',      'clave' => 'goles_local',     'ancho' => 4],
        ['titulo' => 'G.V.',      'clave' => 'goles_visitante', 'ancho' => 4],
        ['titulo' => 'Estado',    'clave' => 'jugado',          'ancho' => 9],
    ];
    echo "\n";
    titulo("LISTA DE PARTIDOS", 70);
    dibujarTabla($filas, $columnas);
}
