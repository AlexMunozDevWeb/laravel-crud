--
-- Volcado de datos para la tabla clientes
--
INSERT INTO `clientes` ( `nombre`, `NIF`, `poblacion`, `CP`, `fecha_alta` ) VALUES
( 'Prueba1', '34a34aa', 'Murcia', '12354', '2022-02-01'),
( 'Prueba2', '34a34aa', 'Murcia', '12354', '2022-02-01'),
( 'Prueba3', '845678d', 'Murcia', '12354', '2022-02-05'),
( 'Prueba4', 'sdf7598', 'Murcia', '12354', '2022-04-06'),
( 'Prueba5', 'adfd753', 'Murcia', '12354', '2022-06-07');

--
-- Volcado de datos para la tabla facturas
--
INSERT INTO `facturas` ( `CodCliente`, `Fecha` ) VALUES
( '1', '2022-09-12'),
( '1', '2022-08-10'),
( '3', '2022-07-18'),
( '4', '2022-11-10'),
( '3', '2022-10-18'),
( '2', '2022-09-11'),
( '5', '2022-09-15'),
( '1', '2022-09-07');
