-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para delicias-ines
CREATE DATABASE IF NOT EXISTS `delicias-ines` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `delicias-ines`;

-- Volcando estructura para tabla delicias-ines.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla delicias-ines.estado: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT IGNORE INTO `estado` (`id`, `estado`) VALUES
	(1, 'Inactivo'),
	(2, 'Activo'),
	(3, 'Eliminado');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;

-- Volcando estructura para tabla delicias-ines.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) DEFAULT NULL,
  `servicio` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imagen` char(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `auditoria_creado` datetime DEFAULT NULL,
  `auditoria_usuario` int(11) DEFAULT NULL,
  `auditoria_modificado` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla delicias-ines.producto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT IGNORE INTO `producto` (`id`, `categoria`, `servicio`, `precio`, `imagen`, `descripcion`, `estado`, `auditoria_creado`, `auditoria_usuario`, `auditoria_modificado`) VALUES
	(1, 1, 'Tamal mediano', 4000, 'https://cdn.pixabay.com/photo/2015/01/09/11/11/startup-594126_960_720.jpg', 'Medio huevo, carne de cerdo, carne de res, pollo, zanahoria y arroz', 2, '2020-12-05 00:00:00', 1, '2021-01-05 18:02:28'),
	(2, 1, 'Tamal grande', 4500, 'https://cdn.pixabay.com/photo/2015/01/09/11/11/startup-594126_960_720.jpg', 'Huevo entero, carne de cerdo, carne de res, pollo, zanahoria y arroz', 2, '2021-01-05 18:03:07', 1, '2021-01-05 18:15:05');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla delicias-ines.producto_categoria
CREATE TABLE IF NOT EXISTS `producto_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `icono` varchar(50) DEFAULT NULL,
  `enlace` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla delicias-ines.producto_categoria: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `producto_categoria` DISABLE KEYS */;
INSERT IGNORE INTO `producto_categoria` (`id`, `categoria`, `imagen`, `color`, `icono`, `enlace`, `subtitulo`, `descripcion`) VALUES
	(1, 'Tamales', 'https://media.istockphoto.com/photos/traditional-colombian-tamale-as-made-on-tolima-region-isolated-on-picture-id1060573746', '2733A0', 'fas fa-code', 'tamal', 'Tamales', 'Tamales tolimenses con el toque secreto de Ines'),
	(2, 'Empanadas', 'https://cdn.pixabay.com/photo/2020/04/23/02/27/pasties-5080794_960_720.jpg', 'EB306C', 'fas fa-paint-brush', 'empanada', 'Empanadas', 'Empanadas de diferentes sabores'),
	(3, 'Envueltos', 'https://cdn.pixabay.com/photo/2019/09/25/16/29/tamale-4504060_960_720.jpg', '07a9e9', 'fas fa-cogs', 'envuelto', 'Envueltos', 'Envueltos tan ricos como los puedes imaginar');
/*!40000 ALTER TABLE `producto_categoria` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
