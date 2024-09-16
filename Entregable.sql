create database P
use P
drop table persona

create table persona(
id_persona int not null auto_increment primary key, 
nombre varchar (15) not null,
apellido varchar (20) not null,
dni varchar (8) not null,
fecha_nac date not null,
correo varchar (20) not null
);

INSERT INTO Persona (nombre, apellido, dni, fecha_nac, correo) VALUES
('Juan', 'Pérez', '12345678', '1990-05-15', 'juan@example.com'),
('María', 'González', '87654321', '1992-10-20', 'maria@example.com'),
('Luis', 'Martínez', '13579246', '1985-03-08', 'luis@example.com');
