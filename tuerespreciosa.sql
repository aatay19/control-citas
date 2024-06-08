-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2024 a las 02:53:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tuerespreciosa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cita`
--

CREATE TABLE `tb_cita` (
  `id_cita` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `nota` varchar(255) NOT NULL,
  `costo_cita` int(11) NOT NULL,
  `fecha_cita` date NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_cita`
--

INSERT INTO `tb_cita` (`id_cita`, `id_cliente`, `id_servicio`, `nota`, `costo_cita`, `fecha_cita`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(2, 4, 4, 'en la mañana( se cambio a maria) \r\nllego tarde extra de 2 pago completo', 10, '2024-06-07', '2024-06-07 19:57:11', '2024-06-07 20:12:17'),
(3, 3, 4, 'por la tarde', 8, '2024-06-20', '2024-06-07 20:11:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `contacto` varchar(20) NOT NULL,
  `direccion` text NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre`, `cedula`, `contacto`, `direccion`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(3, 'juanita', '112224445', '42242342', 'barcelona', '2024-05-24 17:59:00', '2024-06-07 20:12:37'),
(4, 'maria', '112223334', '1112223344', 'barcelona', '2024-06-07 18:50:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empleado`
--

CREATE TABLE `tb_empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_empleado`
--

INSERT INTO `tb_empleado` (`id_empleado`, `nombre`, `telefono`, `id_rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'anthony atay', '4262025386', 2, '2024-06-05 18:43:54', '2024-06-06 18:27:02'),
(2, 'ana mestre', '2147483647', 2, '2024-06-05 18:49:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(250) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'Administrador', '2024-05-31 22:23:08', '2024-05-31 22:23:08'),
(2, 'Empleado', '2024-05-31 22:47:42', '2024-05-31 17:30:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicio`
--

CREATE TABLE `tb_servicio` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` text NOT NULL,
  `precio_servicio` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_servicio`
--

INSERT INTO `tb_servicio` (`id_servicio`, `nombre_servicio`, `precio_servicio`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(3, 'uñas', 11, '2024-05-24 17:59:11', '2024-05-31 15:30:41'),
(4, 'pestañas', 8, '2024-05-24 18:17:07', '2024-05-24 18:17:15'),
(5, 'cejas', 5, '2024-06-03 20:37:21', '0000-00-00 00:00:00'),
(6, 'nulo', 0, '2024-06-06 20:53:47', '0000-00-00 00:00:00'),
(7, 'depilacion', 5, '2024-06-07 19:27:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password_user` text NOT NULL,
  `id_rol` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombres`, `email`, `password_user`, `id_rol`, `token`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'adamithh', 'ada@gmail.com', '1234', 1, '', '2024-05-31 22:23:33', '2024-06-02 17:24:58'),
(2, 'anthony atay', 'anthonyatay1903@gmail.com', '11', 2, '', '2024-05-31 16:48:13', '2024-05-31 16:56:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_cita`
--
ALTER TABLE `tb_cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_empleado`
--
ALTER TABLE `tb_empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_role` (`id_rol`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_servicio`
--
ALTER TABLE `tb_servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_cita`
--
ALTER TABLE `tb_cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_empleado`
--
ALTER TABLE `tb_empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_servicio`
--
ALTER TABLE `tb_servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_cita`
--
ALTER TABLE `tb_cita`
  ADD CONSTRAINT `tb_cita_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_clientes` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_cita_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `tb_servicio` (`id_servicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_empleado`
--
ALTER TABLE `tb_empleado`
  ADD CONSTRAINT `tb_empleado_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
