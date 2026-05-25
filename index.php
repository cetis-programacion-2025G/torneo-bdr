<?php
// Ejecutar: php index.php

require_once 'datos.php';
require_once 'funciones.php';

$datos    = datosTorneo();
$equipos  = &$datos['equipos'];
$partidos = &$datos['partidos'];
$salir    = false;

while (!$salir) {
    system('clear');
    echo "\n";
    echo "╔════════════════════════════════════════╗\n";
    echo "║      TORNEO DE FÚTBOL                 ║\n";
    echo "╠════════════════════════════════════════╣\n";
    echo "║ 1. Ver equipos                        ║\n";
    echo "║ 2. Agregar equipo                     ║\n";
    echo "║ 3. Programar partido                  ║\n";
    echo "║ 4. Registrar resultado                ║\n";
    echo "║ 5. Ver resultados                     ║\n";
    echo "║ 0. Salir                              ║\n";
    echo "╚════════════════════════════════════════╝\n";

    $opcion = readline("\nOpcion: ");

    switch ($opcion) {
        case '1': verEquipos($equipos);                      break;
        case '2': agregarEquipo($equipos);                   break;
        case '3': programarPartido($equipos, $partidos);     break;
        case '4': registrarResultado($equipos, $partidos);   break;
        case '5': verResultados($equipos, $partidos);        break;
        case '0': $salir = true;                             break;
        default:
            echo "Opcion no valida.\n";
            readline("Enter para continuar...");
    }
}

echo "\nHasta luego.\n";
