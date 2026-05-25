<?php
function menuEquipos(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("EQUIPOS", 54);
        echo str_repeat("─", 56) . "\n";
        echo " 1. Ver equipos\n";
        echo " 2. Agregar equipo\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 56) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2]);
        switch ($op) {
            case 1:
                limpiarPantalla();
                listarEquipos($datos);
                esperarEnter();
                break;
            case 2:
                limpiarPantalla();
                agregarEquipo($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
