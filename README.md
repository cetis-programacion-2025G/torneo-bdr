# Proyecto Final BDR – Torneo de Fútbol con MySQL

## 1. Historia del problema

Una liga local organiza torneos pequeños entre equipos de la comunidad. Actualmente registran equipos, jugadores, partidos y marcadores en hojas de papel. Esto provoca confusiones al consultar qué partidos ya se jugaron, qué jugadores pertenecen a cada equipo y cuáles fueron los resultados.

La organización necesita una solución sencilla en terminal que permita guardar la información de forma permanente usando una base de datos relacional.

---

## 2. Objetivo del proyecto

Crear un sistema CLI que permita administrar un torneo pequeño de fútbol y consultar información básica de equipos, jugadores y partidos.

El sistema base será entregado por el docente funcionando con arreglos en memoria.  
El equipo deberá refactorizarlo para que funcione con **PHP-CLI + MySQL**.

---

## 3. Situación inicial

El programa ya funciona, pero guarda los datos en arreglos.

Eso significa que:

- Al cerrar el programa, los datos se pierden.
- No existe una base de datos real.
- No hay tablas, llaves primarias ni relaciones persistentes.

---

## 4. Misión del equipo

Modificar el sistema para que los datos se almacenen en MySQL.

El equipo debe conservar el flujo principal del programa y reemplazar el uso de arreglos por operaciones con base de datos.

---

## 5. Funciones mínimas del sistema

- Registrar equipos
- Registrar partidos entre dos equipos
- Registrar marcador de un partido
- Consultar partidos jugados con sus marcadores

---

## 6. Consulta o reporte obligatorio

Reporte de partidos: mostrar equipo local, equipo visitante, fecha y marcador.

Esta consulta debe obtener información relacionada desde más de una tabla.

---

## 7. Requisitos de base de datos

El proyecto debe incluir:

- Creación de tablas con `CREATE TABLE`.
- Llaves primarias.
- Al menos una llave foránea declarada con `FOREIGN KEY` en el script SQL.
- Operaciones `INSERT`, `SELECT`, `UPDATE` y/o `DELETE` según aplique.
- Al menos una consulta con `JOIN` entre tablas.

---

## 8. Alcance limitado

Para que el proyecto sea posible en dos semanas, **no se pide**:

- No se requiere calcular tabla general automáticamente
- No se requiere manejar tarjetas, cambios o estadísticas avanzadas
- No se requiere validar torneos oficiales ni calendarios complejos

---

## 9. Reglas importantes

- No se debe cambiar el objetivo principal del sistema.
- No se deben usar arreglos como almacenamiento final.
- Los datos deben permanecer guardados después de cerrar y volver a abrir el programa.
- La evaluación se enfoca en la integración con MySQL, no en rediseñar toda la aplicación.

---

## 10. Entregable esperado

El equipo debe entregar:

- Código PHP-CLI funcionando.
- Script SQL con la estructura de tablas y datos iniciales.
- Evidencia de pruebas.
- Breve explicación del modelo de datos.
