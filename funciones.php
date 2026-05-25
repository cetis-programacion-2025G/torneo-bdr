<?php
// ============================================================
//  funciones.php — Carga todos los modulos del sistema
//  Cada carpeta = un tema, cada archivo = una funcion
// ============================================================

// --- Utilidades ---
require_once 'funciones/centrar.php';
require_once 'funciones/titulo.php';
require_once 'funciones/limpiarPantalla.php';
require_once 'funciones/esperarEnter.php';
require_once 'funciones/pedirEntero.php';
require_once 'funciones/dibujarTabla.php';
require_once 'funciones/datos.php';
require_once 'funciones/conexion.php';

// --- DB: Equipos ---
require_once 'db/equipos/obtenerEquipos.php';
require_once 'db/equipos/buscarEquipo.php';
require_once 'db/equipos/insertarEquipo.php';

// --- DB: Partidos ---
require_once 'db/partidos/obtenerPartidos.php';
require_once 'db/partidos/insertarPartido.php';
require_once 'db/partidos/registrarResultado.php';

// --- Pantallas: Equipos ---
require_once 'pantallas/equipos/listarEquipos.php';
require_once 'pantallas/equipos/agregarEquipo.php';
require_once 'pantallas/equipos/menuEquipos.php';

// --- Pantallas: Partidos ---
require_once 'pantallas/partidos/listarPartidos.php';
require_once 'pantallas/partidos/programarPartido.php';
require_once 'pantallas/partidos/capturarResultado.php';
require_once 'pantallas/partidos/menuPartidos.php';
