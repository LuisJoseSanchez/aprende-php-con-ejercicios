CREATE TABLE IF NOT EXISTS cliente (
  dni varchar(10) NOT NULL,
  nombre varchar(50) NOT NULL,
  direccion varchar(200) NOT NULL,
  telefono varchar(20) NOT NULL
);

INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES
('3534534', 'Cacerolo Tontoñez', 'Almogía', '123456'),
('45678', 'Mota', 'Calle Falsa, 123', '555 444333'),
('555', 'Luis José', 'Montserrat Roig, 10', '5555 234233'),
('65767', 'Pepito Lupiañez', 'Alhaurín', '867867867'),
('76859', 'Ignacio', 'Periquito, 333', '555 325476'),
('789654', 'Yren', 'Calle Verdadera, 98', '555 98765'),
('873475933', 'Maria Sol', 'Calle Flor', '555 123456');

CREATE TABLE IF NOT EXISTS empleado (
  dni varchar(10) NOT NULL,
  nombre varchar(50) NOT NULL,
  cargo varchar(30) NOT NULL,
  sueldo double precision NOT NULL
);

INSERT INTO empleado (dni, nombre, cargo, sueldo) VALUES
('123456', 'Romualdo Fernández', 'director', 2400),
('13579', 'Saturnino Peláez', 'administrativo', 900);


ALTER TABLE cliente
  ADD PRIMARY KEY (dni);

ALTER TABLE empleado
  ADD PRIMARY KEY (dni);
