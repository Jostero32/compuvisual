CREATE DATABASE IF NOT EXISTS cuarto;
USE cuarto;


CREATE TABLE `estudiantes` (
  `estCedula` char(10) NOT NULL,
  `estNombre` varchar(30) NOT NULL,
  `estApellido` varchar(30) NOT NULL,
  `estTelefono` char(10) NOT NULL,
  `estDireccion` varchar(30) NOT NULL);


INSERT INTO `estudiantes` (`estCedula`, `estNombre`, `estApellido`, `estTelefono`, `estDireccion`) VALUES
('18', 'Jonnys', 'Valle', '0987541254', 'Ficoa');

-- --------------------------------------------------------


CREATE TABLE `usuarios` (
  `userId` char(1) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
);



INSERT INTO `usuarios` (`userId`, `user`, `password`) VALUES
('1', 'admin', '030603'),
('2', 'secre', '2003');



ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`estCedula`);


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userId`);

