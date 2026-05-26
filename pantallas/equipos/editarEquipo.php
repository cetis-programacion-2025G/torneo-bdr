<?php
function editarEquipo($conn) {
    limpiarPantalla();
    echo "\n";
    titulo("EDITAR EQUIPO", 54);
    listarEquipos($conn);
    $equipos = obtenerEquipos($conn);
    if (count($equipos) === 0) {
        esperarEnter();
        return;
    }
    $ids = array_column($equipos, 'id');
    echo "  (0 para cancelar)\n";
    $id = pedirEntero("ID a editar", array_merge($ids, [0]));
    if ($id === 0) {
        echo "\n  Cancelado.\n";
        esperarEnter();
        return;
    }
    $e = buscarEquipo($conn, $id);

    echo "\n  (Enter para conservar el valor actual)\n";
    $nombre = readline("  Nombre [{$e['nombre']}]: ");
    if ($nombre === '') $nombre = $e['nombre'];
    if ($nombre === '0') {
        echo "\n  Cancelado.\n";
        esperarEnter();
        return;
    }
    $ciudad = readline("  Ciudad [{$e['ciudad']}]: ");
    if ($ciudad === '') $ciudad = $e['ciudad'];
    if ($ciudad === '0') {
        echo "\n  Cancelado.\n";
        esperarEnter();
        return;
    }
    actualizarEquipo($conn, $id, $nombre, $ciudad);
    echo "\n  Equipo actualizado.\n";
    esperarEnter();
}
