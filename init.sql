CREATE DATABASE torneo;

USE torneo;

CREATE TABLE equipos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    ciudad VARCHAR(50) NOT NULL
);

CREATE TABLE partidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    equipo_local_id INT,
    equipo_visitante_id INT,
    goles_local INT,
    goles_visitante INT,
    estado TINYINT,
    FOREIGN KEY (equipo_local_id) REFERENCES equipos(id) ON DELETE CASCADE,
    FOREIGN KEY (equipo_visitante_id) REFERENCES equipos(id) ON DELETE CASCADE
);
