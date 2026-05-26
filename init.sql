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


INSERT INTO equipos (nombre, ciudad) VALUES 
    ('Los Toros', 'Guadalajara'),
    ('Los Tigres', 'Monterrey'),
    ('Las Aguilas', 'Ciudad de Mexico'),
    ('Los Rayados', 'Monterrey'),
    ('Las Chivas', 'Guadalajara');


INSERT INTO partidos (equipo_local_id, equipo_visitante_id, goles_local, goles_visitante, estado) 
VALUES
    (1, 2, 2, 1, 1),
    (3, 4, 0, 0, 0),
    (5, 1, 3, 1, 1),
    (2, 3, 0, 0, 0);
   