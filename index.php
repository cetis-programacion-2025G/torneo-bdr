<?php
// Ejecutar: php index.php

require_once 'datos.php';
require_once 'funciones.php';

$datos = datosTorneo();
$salir = false;

while (!$salir) {
    system('clear');
    echo "\n";
    echo "╔═══════════════════════════════════════╗\n";
    echo "║      TORNEO DE FÚTBOL                 ║\n";
    echo "╠═══════════════════════════════════════╣\n";
    echo "║ 1. Equipos                            ║\n";
    echo "║ 2. Partidos                           ║\n";
    echo "║ 0. Salir                              ║\n";
    echo "╚═══════════════════════════════════════╝\n";

    $opcion = readline("\nOpcion: ");

    switch ($opcion) {
        case '1': menuEquipos($datos);  break;
        case '2': menuPartidos($datos); break;
        case '0': $salir = true;        break;
        default:
            echo "Opcion no valida.\n";
            readline("Enter para continuar...");
    }
}

echo "\nHasta luego.\n";
