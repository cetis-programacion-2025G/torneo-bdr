<?php
function menuPartidos(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("PARTIDOS", 70);
        echo str_repeat("─", 72) . "\n";
        echo " 1. Ver resultados\n";
        echo " 2. Programar partido\n";
        echo " 3. Registrar resultado\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 72) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2, 3]);
        switch ($op) {
            case 1:
                limpiarPantalla();
                listarPartidos($datos);
                esperarEnter();
                break;
            case 2:
                limpiarPantalla();
                programarPartido($datos);
                break;
            case 3:
                limpiarPantalla();
                capturarResultado($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
