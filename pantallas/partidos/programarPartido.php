<?php
function programarPartido(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("PROGRAMAR PARTIDO", 54);
    if (count($datos['equipos']) < 2) {
        echo "\n  Se necesitan al menos 2 equipos.\n";
        esperarEnter();
        return;
    }
    listarEquipos($datos);
    $ids = array_column($datos['equipos'], 'id');
    echo "  (0 para cancelar)\n";
    $id_local     = pedirEntero("ID equipo local",     array_merge($ids, [0]));
    if ($id_local === 0) return;
    $id_visitante = pedirEntero("ID equipo visitante", array_merge($ids, [0]));
    if ($id_visitante === 0) return;
    if ($id_local === $id_visitante) {
        echo "\n  Un equipo no puede jugar contra si mismo.\n";
        esperarEnter();
        return;
    }
    $id = insertarPartido($datos, $id_local, $id_visitante);
    echo "\n  Partido programado con ID $id.\n";
    esperarEnter();
}
