<?php
function eliminarEquipoUI(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("ELIMINAR EQUIPO", 54);
    listarEquipos($datos);
    if (empty($datos['equipos'])) {
        esperarEnter();
        return;
    }
    $ids = array_column($datos['equipos'], 'id');
    echo "  (0 para cancelar)\n";
    $id = pedirEntero("ID a eliminar", array_merge($ids, [0]));
    if ($id === 0) {
        echo "\n  Cancelado.\n";
        esperarEnter();
        return;
    }
    $ok = eliminarEquipo($datos, $id);
    echo $ok ? "\n  Equipo eliminado.\n" : "\n  Equipo no encontrado.\n";
    esperarEnter();
}
