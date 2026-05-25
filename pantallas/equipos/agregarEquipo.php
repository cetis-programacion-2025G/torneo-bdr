<?php
function agregarEquipo(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("AGREGAR EQUIPO");
    $nombre = readline("Nombre : ");
    $ciudad = readline("Ciudad : ");
    $id = insertarEquipo($datos, $nombre, $ciudad);
    echo "\n  Equipo agregado con ID $id.\n";
    esperarEnter();
}
