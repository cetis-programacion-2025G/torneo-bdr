<?php
// ============================================================
//  app.php — Punto de entrada
//  Ejecutar: php app.php
// ============================================================

require_once 'funciones.php';

$conn = conectar();
$datos = datosIniciales();

$salir = false;

while (!$salir) {
    limpiarPantalla();
    echo "\n";
    titulo("TORNEO DE FUTBOL — CETIS");
    echo str_repeat("─", 46) . "\n";
    echo " 1. Equipos\n";
    echo " 2. Partidos\n";
    echo " 0. Salir\n";
    echo str_repeat("─", 46) . "\n";

    $opcion = pedirEntero("Opcion", [0, 1, 2]);

    switch ($opcion) {
        case 1:
            menuEquipos($conn);
            break;
        case 2:
            menuPartidos($datos);
            break;
        case 0:
            $salir = true;
            break;
    }
}

$conn->close(); // Cerrar conexion de base de datos
echo "\nHasta luego.\n";
