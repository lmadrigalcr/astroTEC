USE `astroDB` ;

INSERT INTO EstadoUsuario (idEstado, estado) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'bloqueado');

INSERT INTO Usuarios (nombre, apellido1, apellido2, genero, correo, password, fk_idEstado) VALUES
('Administrador', NULL, NULL, 'M', 'admin@example.com', SHA2('123', 256), 1),
('Jhon', 'Doe', NULL, 'M', 'jhondoe@example.com', SHA2('abc', 256), 1);

INSERT INTO estadodatocurioso (estado) VALUES
('Valido'),
('Deshabilitado');

INSERT INTO datoscuriosos (contenido,fecha,fk_idEstado) values
('La Vía Láctea tiene un agujero negro con una masa equivalente a 40 000 soles', '2015-05-23',1);