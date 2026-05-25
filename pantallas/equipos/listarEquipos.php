<?php
function listarEquipos(&$datos) {
    $filas = obtenerEquipos($datos);
    $columnas = [
        ['titulo' => 'ID',     'clave' => 'id',     'ancho' => 4],
        ['titulo' => 'Nombre', 'clave' => 'nombre', 'ancho' => 20],
        ['titulo' => 'Ciudad', 'clave' => 'ciudad', 'ancho' => 22],
    ];
    echo "\n";
    titulo("LISTA DE EQUIPOS", 54);
    dibujarTabla($filas, $columnas);
}
