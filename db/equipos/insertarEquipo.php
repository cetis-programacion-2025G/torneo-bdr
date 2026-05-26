<?php
function insertarEquipo($conn, $nombre, $ciudad) {
    $insert = "INSERT INTO equipos (nombre, ciudad) VALUES (?, ?)";
    $stmt = $conn->prepare($insert);
    $stmt->bind_param("ss", $nombre, $ciudad);
    $stmt->execute();
    $nuevoId = $stmt->insert_id;
    $stmt->close();
    return $nuevoId;
}
