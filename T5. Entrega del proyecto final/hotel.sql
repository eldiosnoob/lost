-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2024 a las 07:28:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `nombre` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_llegada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `adultos` int(11) NOT NULL,
  `ninos` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `transporte` varchar(255) NOT NULL,
  `actividades` text DEFAULT NULL,
  `comidas` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `precio_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`nombre`, `correo_electronico`, `telefono`, `fecha_llegada`, `fecha_salida`, `adultos`, `ninos`, `duracion`, `hotel`, `transporte`, `actividades`, `comidas`, `precio`, `precio_total`) VALUES
('fvdff', 'r@gmail.com', '32422', '2023-12-11', '2024-12-11', 1, 2, 5, 'Hotel Riu Vallarta', 'Transporte incluido desde y hacia el aeropuerto', 'Excursión de buceo en la bahía de Banderas', 'Desayuno y cena buffet incluidos todos los días', 11000.00, 33000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_hotel`
--

CREATE TABLE `reservas_hotel` (
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `habitacion` enum('individual','doble','suite') NOT NULL,
  `huespedes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas_hotel`
--

INSERT INTO `reservas_hotel` (`nombre`, `telefono`, `hotel`, `destino`, `fecha_entrada`, `fecha_salida`, `habitacion`, `huespedes`) VALUES
('fdv', '124576', 'hola', 'slp', '2023-01-11', '2023-02-11', 'individual', 1),
('fdv', '124576', 'hola', 'slp', '2023-01-11', '2023-02-11', 'individual', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo_electronico` varchar(200) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `fecha_nacimiento`, `correo_electronico`, `contraseña`, `telefono`) VALUES
('ejemplo', 'ejemplo', '2001-05-21', 'ej@gmail.com', '12345', '12345'),
('tere', 'herrera', '2002-03-20', 'tere@gmail.com', '2405143', '4448496853');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `origen` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `pasajeros` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`origen`, `destino`, `fecha`, `pasajeros`, `correo`, `telefono`) VALUES
('Ciudad de México', 'Cancun', '2024-05-23', 4, '', ''),
('CDMX', 'CUN', '2024-05-23', 4, '', ''),
('Ciudad de México', 'Cancun', '2023-12-01', 1, 'q@slp.com', '8765344');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
