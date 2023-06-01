DROP DATABASE campus;


CREATE DATABASE campus;


USE campus;

CREATE TABLE campers(
    id INT primary key AUTO_INCREMENT,
    nombres VARCHAR (50) NOT NULL,
    direccion VARCHAR (50) NOT NULL,
    logros VARCHAR (60) NOT NULL,
    ser VARCHAR (60) NOT NULL ,
    ingles VARCHAR (60) NOT NULL,
    skills VARCHAR (60) NOT NULL,
    review VARCHAR (60) NOT NULL,
    especialidad VARCHAR (60) NOT NULL
);

DROP TABLE campers;
DROP TABLE users;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(60) NOT NULL,
    FOREIGN KEY (idCamper) REFERENCES campers(id)
)


