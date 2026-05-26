<?php
function eliminarEquipoUI($conn) {
    limpiarPantalla();
    echo "\n";
    titulo("ELIMINAR EQUIPO", 54);
    listarEquipos($conn);
    $equipos = obtenerEquipos($conn);
    if (count($equipos) === 0) {
        esperarEnter();
        return;
    }
    $ids = array_column($equipos, 'id');
    echo "  (0 para cancelar)\n";
    $id = pedirEntero("ID a eliminar", array_merge($ids, [0]));
    if ($id === 0) {
        echo "\n  Cancelado.\n";
        esperarEnter();
        return;
    }
    $ok = eliminarEquipo($conn, $id);
    if($ok) {
        echo "\n  Equipo eliminado.\n";
    } else {
        echo "\n  Equipo no encontrado.\n";
    }
    esperarEnter();
}
