<?php
function capturarResultado(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("REGISTRAR RESULTADO", 70);
    $pendientes = array_values(array_filter($datos['partidos'], fn($p) => !$p['jugado']));
    $todasFilas      = obtenerPartidos($datos);
    $filasPendientes = array_values(array_filter($todasFilas, fn($f) => $f['jugado'] === 'Pendiente'));
    $columnas = [
        ['titulo' => 'ID',        'clave' => 'id',        'ancho' => 4],
        ['titulo' => 'Local',     'clave' => 'local',     'ancho' => 20],
        ['titulo' => 'Visitante', 'clave' => 'visitante', 'ancho' => 20],
    ];
    dibujarTabla($filasPendientes, $columnas);
    if (empty($pendientes)) {
        echo "\n  No hay partidos pendientes.\n";
        esperarEnter();
        return;
    }
    $ids             = array_column($pendientes, 'id');
    echo "  (0 para cancelar)\n";
    $id_partido      = pedirEntero("ID del partido",     array_merge($ids, [0]));
    if ($id_partido === 0) {
        return;
    }
    $goles_local     = (int)readline("Goles local     : ");
    $goles_visitante = (int)readline("Goles visitante : ");
    if (registrarResultado($datos, $id_partido, $goles_local, $goles_visitante)) {
        echo "\n  Resultado registrado.\n";
    } else {
        echo "\n  Partido no encontrado.\n";
    }
    esperarEnter();
}
