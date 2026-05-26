<?php
function menuPartidos(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("PARTIDOS", 70);
        listarPartidos($datos);
        echo "\n";
        echo str_repeat("─", 72) . "\n";
        echo " 1. Programar partido\n";
        echo " 2. Registrar resultado\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 72) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2]);
        switch ($op) {
            case 1:
                programarPartido($datos);
                break;
            case 2:
                capturarResultado($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
