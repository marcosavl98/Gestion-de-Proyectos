-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;



-- Volcando estructura para tabla control_asistencia.asistencia
CREATE TABLE IF NOT EXISTS `asistencia` (
  `idasistencia` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_persona` varchar(20) COLLATE utf8_bin NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entrada` time DEFAULT '00:00:00',
  `iniciob` time DEFAULT '00:00:00',
  `finalb` time DEFAULT '00:00:00',
  `salida` time DEFAULT '00:00:00',
  `fecha` date NOT NULL,
  PRIMARY KEY (`idasistencia`)
) ENGINE=InnoDB AUTO_INCREMENT=339 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla control_asistencia.asistencia: ~4 rows (aproximadamente)
DELETE FROM `asistencia`;
/*!40000 ALTER TABLE `asistencia` DISABLE KEYS */;
INSERT INTO `asistencia` (`idasistencia`, `codigo_persona`, `fecha_hora`, `entrada`, `iniciob`, `finalb`, `salida`, `fecha`) VALUES
	(335, '1509', '2020-08-29 21:43:19', '20:43:19', '00:00:00', '00:00:00', '00:00:00', '2020-08-29'),
	(336, '1509', '2020-08-29 21:43:24', '00:00:00', '21:43:24', '00:00:00', '00:00:00', '2020-08-29'),
	(337, '1509', '2020-08-29 21:43:29', '00:00:00', '00:00:00', '21:43:29', '00:00:00', '2020-08-29'),
	(338, '1509', '2020-08-29 21:43:34', '00:00:00', '00:00:00', '00:00:00', '20:43:34', '2020-08-29');
/*!40000 ALTER TABLE `asistencia` ENABLE KEYS */;

-- Volcando estructura para tabla control_asistencia.configuracion
CREATE TABLE IF NOT EXISTS `configuracion` (
  `idconfiguracion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `ruc` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `precio` varchar(50) NOT NULL,
  PRIMARY KEY (`idconfiguracion`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla control_asistencia.configuracion: 1 rows
DELETE FROM `configuracion`;
/*!40000 ALTER TABLE `configuracion` DISABLE KEYS */;
INSERT INTO `configuracion` (`idconfiguracion`, `nombre`, `ruc`, `direccion`, `telefono`, `precio`) VALUES
	(44, 'asisper1', '231426', 'itaugua', '0976654', '2500000');
/*!40000 ALTER TABLE `configuracion` ENABLE KEYS */;

-- Volcando estructura para tabla control_asistencia.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `iddepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `fechacreada` datetime NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `idusuario` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla control_asistencia.departamento: ~8 rows (aproximadamente)
DELETE FROM `departamento`;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` (`iddepartamento`, `nombre`, `descripcion`, `fechacreada`, `estado`, `idusuario`) VALUES
	(1, 'Analista de créditos', 'asesor de ventas', '2020-01-18 00:00:00', 1, '1'),
	(2, 'Promotor de ahorro y crédito', 'trabajo de promoción', '2020-01-19 00:15:24', 1, '1'),
	(3, 'Gerencia', 'representante legal', '2020-01-28 21:24:52', 1, '1'),
	(4, 'Administración', 'encargado de agencia', '2020-01-28 21:25:08', 1, '1'),
	(5, 'Recibidor(a)/Pagador(a)', 'encargado de los movimientos de caja', '2020-01-28 21:25:45', 1, '1'),
	(6, 'Vigilancia', 'vigilante diurnoa', '2020-01-28 21:26:14', 1, '1'),
	(7, 'Limpieza', 'encargado de la limpieza de oficinas', '2020-01-28 21:26:50', 1, '1'),
	(8, 'Nuevo Dptomm', 'Nuevo dpto', '2020-07-29 10:03:51', 1, '1');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Volcando estructura para tabla control_asistencia.tipousuario
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `idtipousuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `fechacreada` datetime NOT NULL,
  `idusuario` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idtipousuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla control_asistencia.tipousuario: ~3 rows (aproximadamente)
DELETE FROM `tipousuario`;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` (`idtipousuario`, `nombre`, `descripcion`, `fechacreada`, `idusuario`) VALUES
	(1, 'Administrador', 'Con priviliegios de gestionar todo el sistemaaa', '2020-01-18 00:00:00', '1'),
	(2, 'Vendedor', 'vende y promueve los productos', '2020-01-19 00:30:13', 'admin'),
	(3, 'Secretario/a', 'Realiza todas las tareas adm. del dpto.', '2020-07-29 08:57:08', '1');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;

-- Volcando estructura para tabla control_asistencia.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(45) COLLATE utf8_bin NOT NULL,
  `login` varchar(45) COLLATE utf8_bin NOT NULL,
  `iddepartamento` int(11) NOT NULL,
  `idtipousuario` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_bin NOT NULL,
  `password` varchar(64) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `fechacreado` datetime NOT NULL,
  `usuariocreado` varchar(45) COLLATE utf8_bin NOT NULL,
  `codigo_persona` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `codigo_persona` (`codigo_persona`),
  KEY `fk_departamento` (`iddepartamento`),
  KEY `fk_tiposusario` (`idtipousuario`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idtipousuario`) REFERENCES `tipousuario` (`idtipousuario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla control_asistencia.usuarios: ~2 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idusuario`, `nombre`, `apellidos`, `login`, `iddepartamento`, `idtipousuario`, `email`, `password`, `imagen`, `estado`, `fechacreado`, `usuariocreado`, `codigo_persona`) VALUES
	(15, 'Justo Ramon', 'Gonzalez', 'justo', 2, 1, 'justo@gmail.com', '6cf713e83ca48f8a190b07af39303ea10884872d491f8d0c2056907fc2a26bad', '1596031232.jpg', 1, '2020-07-29 10:00:31', 'Justo Ramon', '2101'),
	(22, 'Alma Maria', 'Meza Dure', 'alma', 1, 1, 'alma@gmail.com', '7054d0451000f27e0673c136e684b10beee8f4d6d9d04f964a92345a92cb17ef', '', 1, '2020-08-29 21:03:34', 'Alma Maria', '1509');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
