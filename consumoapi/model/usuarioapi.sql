-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 08-11-2022 a las 23:46:00
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioapi`
--

CREATE TABLE `usuarioapi` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarioapi`
--

INSERT INTO `usuarioapi` (`id`, `nombre`, `correo`, `usuario`, `contrasena`) VALUES
(6, 'cristian perez', 'cacp1111@gmail.com', 'cacp1111', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(8, 'andres perez', 'cacp222@hotmail.com', 'cacp2222', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413'),
(9, 'tato perez', 'tato 1991@hotmail.com', 'tato1991', '1392379478c88443c458ed72e88c72522d3a9ac1b93764c71383969a352d1c84a90f9b3230d04d0ef627954224e44df761757922506b92c1f9baf4460230ba44'),
(10, 'tatan2022', 'tatan2022@gmail.com', 'tatan2022', 'e9e97ceb185bf0bdab6a9bf7ecc66a0f7c99039c1e19b33f4fabb07c01d4dcdf1f0e952cc5c35dff208c4ea77923d55f2fa76d8df7c2b49ef4caafbca1ad9afe'),
(11, 'maga', 'maga19@hotmail.com', 'maga19', 'a5e4209e841321ae706ee84b94b38088a18acc7643250e4bb0af543c9d7599a0854c8e08c2283ec0ee338806cca171206340a510c5c406beb6ec3b6f18150c4b'),
(12, 'ana m', 'ana123@hotmail.com', 'ana123', 'bb469369c35040765bec68d409faa6957fee1f4b9029daa5c862e467b61fa53490f611c4680d5880c0631c9737e11a01b45c2335311ad7264a14bbd767c51807'),
(13, 'chanchitofeliz', 'chanchito2222@hotmail.com', 'chanchito2222', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarioapi`
--
ALTER TABLE `usuarioapi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarioapi`
--
ALTER TABLE `usuarioapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
