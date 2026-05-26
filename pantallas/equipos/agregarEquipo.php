<?php
function agregarEquipo($conn) {
    limpiarPantalla();
    echo "\n";
    titulo("AGREGAR EQUIPO");
    echo "  (0 en cualquier campo para cancelar)\n";
    $nombre = readline("Nombre : ");
    if ($nombre === '0') { 
        echo "\n  Cancelado.\n"; 
        esperarEnter();
        return; // retornar void (vacio), no retornar un
    }
    $ciudad = readline("Ciudad : ");
    if ($ciudad === '0') { 
        echo "\n  Cancelado.\n"; 
        esperarEnter();
        return; 
    }
    $id = insertarEquipo($conn, $nombre, $ciudad);
    echo "\n  Equipo agregado con ID $id.\n";
    esperarEnter();
}
