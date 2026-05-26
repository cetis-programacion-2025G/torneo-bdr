<?php
function editarEquipo(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("EDITAR EQUIPO", 54);
    listarEquipos($datos);
    if (empty($datos['equipos'])) {
        esperarEnter();
        return;
    }
    $ids = array_column($datos['equipos'], 'id');
    echo "  (0 para cancelar)\n";
    $id = pedirEntero("ID a editar", array_merge($ids, [0]));
    if ($id === 0) {
        echo "\n  Cancelado.\n";
        esperarEnter();
        return;
    }
    $e = buscarEquipo($datos, $id);
    if (!$e) {
        echo "\n  Equipo no encontrado.\n";
        esperarEnter();
        return;
    }
    echo "\n  (Enter para conservar el valor actual)\n";
    $nombre = readline("  Nombre [{$e['nombre']}]: ");
    if ($nombre === '') $nombre = $e['nombre'];
    $ciudad = readline("  Ciudad [{$e['ciudad']}]: ");
    if ($ciudad === '') $ciudad = $e['ciudad'];
    actualizarEquipo($datos, $id, $nombre, $ciudad);
    echo "\n  Equipo actualizado.\n";
    esperarEnter();
}
