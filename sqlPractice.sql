CREATE DATABASE campus;


USE campus;

CREATE TABLE Estudiantes (
    id_estudiante INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    edad INT
);

CREATE TABLE notas (
    id_nota INT PRIMARY KEY AUTO_INCREMENT,
    id_estudiante INT,
    asignatura VARCHAR(50),
    calificacion INT,
    FOREIGN KEY (id_estudiante) REFERENCES Estudiantes(id_estudiante)
);


ALTER TABLE Estudiantes ADD COLUMN email VARCHAR(100);


-- Modificar el tipo de dato de una columna en la tabla de Notas 


ALTER TABLE Notas MODIFY COLUMN calificacion FLOAT;


-- Eliminar una TABLE

DROP TABLE Notas;

-- COMANDOS DML (DATA MANIPULATION LANGUAGE)

-- Insertar datos en la tabla estudiantes

INSERT INTO Estudiantes(

)


-- Actualizar los datos de un estudiante en la tabla de Estudiantes

UPDATE Estudiantes
SET edad = 21
WHERE id_estudiante = 2;


-- Eliminar un estudiante de la tabla Estudiantes

DELETE FROM Estudiantes WHERE id_estudiante = 3;

DELETE FROM Notas WHERE id_nota = 3;

-- COMANDOS DQL (DATA QUERY LANGUAGE)

--Consultar para obtener todos los estudiantes

SELECT * FROM Estudiantes;

-- Consultar para obtenr estudiantes mayores de 18 años 

SELECT * FROM Estudiantes WHERE edad > 18;

-- Consultar utilizando el INNER JOIN para combinar Estudiantes y Notas

SELECT Estudiantes.nombre , Estudiantes.apellido, Notas.asignatura , Notas.calificacion

FROM  Estudiantes

INNER JOIN Notas ON Estudiantes.id_estudiante = Notas.id_estudiante;