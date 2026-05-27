<?php
function capturarResultado($conn) {
    limpiarPantalla();
    echo "\n";
    titulo("REGISTRAR RESULTADO", 70);
    $partidos     = obtenerPartidosPendientes($conn);
    $columnas = [
        ['titulo' => 'ID',        'clave' => 'id',        'ancho' => 4],
        ['titulo' => 'Local',     'clave' => 'local',     'ancho' => 20],
        ['titulo' => 'Visitante', 'clave' => 'visitante', 'ancho' => 20],
    ];
    dibujarTabla($partidos, $columnas);
    if (empty($partidos)) {
        echo "\n  No hay partidos pendientes.\n";
        esperarEnter();
        return;
    }
    $ids = array_column($partidos, 'id');
    echo "  (0 para cancelar)\n";
    $id_partido      = pedirEntero("ID del partido",     array_merge($ids, [0]));
    if ($id_partido === 0) {
        return;
    }
    $goles_local     = (int)readline("Goles local     : ");
    $goles_visitante = (int)readline("Goles visitante : ");
    if (registrarResultado($conn, $id_partido, $goles_local, $goles_visitante)) {
        echo "\n  Resultado registrado.\n";
    } else {
        echo "\n  Partido no encontrado.\n";
    }
    esperarEnter();
}
