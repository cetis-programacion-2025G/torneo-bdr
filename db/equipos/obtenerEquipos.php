<?php

function obtenerEquipos($conn) {
    $consulta = "SELECT id, nombre, ciudad FROM equipos";
    $resultado = $conn->query($consulta);
    if ($resultado) {
        $equipos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $equipos;
    }
    return [];
}