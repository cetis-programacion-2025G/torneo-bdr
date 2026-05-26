<?php
function agregarEquipo(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("AGREGAR EQUIPO");
    echo "  (0 en cualquier campo para cancelar)\n";
    $nombre = readline("Nombre : ");
    if ($nombre === '0') { echo "\n  Cancelado.\n"; esperarEnter(); return; }
    $ciudad = readline("Ciudad : ");
    if ($ciudad === '0') { echo "\n  Cancelado.\n"; esperarEnter(); return; }
    $id = insertarEquipo($datos, $nombre, $ciudad);
    echo "\n  Equipo agregado con ID $id.\n";
    esperarEnter();
}
