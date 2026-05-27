<?php
function programarPartido($conn) {
    limpiarPantalla();
    echo "\n";
    titulo("PROGRAMAR PARTIDO", 54);
    $equipos = obtenerEquipos($conn);
    if (count($equipos) < 2) {
        echo "\n  Se necesitan al menos 2 equipos.\n";
        esperarEnter();
        return;
    }
    listarEquipos($conn);
    $ids = array_column($equipos, 'id');
    echo "  (0 para cancelar)\n";
    $id_local     = pedirEntero("ID equipo local",     array_merge($ids, [0]));
    if ($id_local === 0) {
        return;
    }
    $id_visitante = pedirEntero("ID equipo visitante", array_merge($ids, [0]));
    if ($id_visitante === 0) {
        return;
    }
    if ($id_local === $id_visitante) {
        echo "\n  Un equipo no puede jugar contra si mismo.\n";
        esperarEnter();
        return;
    }
    $id = insertarPartido($conn, $id_local, $id_visitante);
    echo "\n  Partido programado con ID $id.\n";
    esperarEnter();
}
