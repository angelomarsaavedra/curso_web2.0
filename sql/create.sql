-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.38-0ubuntu0.14.04.1 - (Ubuntu)
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             8.3.0.4796
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para cursoweb2
DROP DATABASE IF EXISTS `cursoweb2`;
CREATE DATABASE IF NOT EXISTS `cursoweb2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cursoweb2`;


-- Volcando estructura para tabla cursoweb2.departamento
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_departamento_provincia1_idx` (`provincia_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla cursoweb2.departamento: 0 rows
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;


-- Volcando estructura para tabla cursoweb2.direccion
DROP TABLE IF EXISTS `direccion`;
CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `piso` int(11) DEFAULT NULL,
  `depto` varchar(5) DEFAULT NULL,
  `localidad` varchar(45) DEFAULT NULL,
  `persona_id` int(10) unsigned NOT NULL,
  `departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_direccion_persona_idx` (`persona_id`),
  KEY `fk_direccion_departamento1_idx` (`departamento_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla cursoweb2.direccion: 0 rows
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;


-- Volcando estructura para tabla cursoweb2.persona
DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `dni` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `biografia` text,
  `vive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  KEY `apenom` (`apellido`,`nombre`),
  KEY `fecha` (`fecha_nacimiento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla cursoweb2.persona: 0 rows
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;


-- Volcando estructura para tabla cursoweb2.provincia
DROP TABLE IF EXISTS `provincia`;
CREATE TABLE IF NOT EXISTS `provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla cursoweb2.provincia: 3 rows
/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
REPLACE INTO `provincia` (`id`, `nombre`) VALUES
	(1, 'Mendoza'),
	(2, 'San Juan'),
	(3, 'San Luis');
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
