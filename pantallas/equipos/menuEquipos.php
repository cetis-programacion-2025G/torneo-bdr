<?php
function menuEquipos(&$datos, $conn) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("EQUIPOS", 54);
        listarEquipos($conn);
        echo "\n";
        echo str_repeat("─", 56) . "\n";
        echo " 1. Agregar equipo\n";
        echo " 2. Editar equipo\n";
        echo " 3. Eliminar equipo\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 56) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2, 3]);
        switch ($op) {
            case 1:
                agregarEquipo($conn);
                break;
            case 2:
                editarEquipo($datos, $conn);
                break;
            case 3:
                eliminarEquipoUI($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
