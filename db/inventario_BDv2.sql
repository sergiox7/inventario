-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para inventarios
CREATE DATABASE IF NOT EXISTS `inventarios` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `inventarios`;

-- Volcando estructura para tabla inventarios.comprasproducto
CREATE TABLE IF NOT EXISTS `comprasproducto` (
  `idProducto` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `comprasproducto_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla inventarios.comprasproducto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `comprasproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `comprasproducto` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.insumo
CREATE TABLE IF NOT EXISTS `insumo` (
  `idInsumo` int(11) NOT NULL AUTO_INCREMENT,
  `unidadMedida` varchar(5) DEFAULT NULL,
  `idProveedor` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idInsumo`),
  KEY `idProveedor` (`idProveedor`),
  CONSTRAINT `insumo_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla inventarios.insumo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `insumo` DISABLE KEYS */;
INSERT INTO `insumo` (`idInsumo`, `unidadMedida`, `idProveedor`, `nombre`) VALUES
	(1, 'lts', 3, 'asdsadsad'),
	(3, 'gr', 3, 'insumotest'),
	(4, 'oz', 1, 'insa');
/*!40000 ALTER TABLE `insumo` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.inventario
CREATE TABLE IF NOT EXISTS `inventario` (
  `idInsumo` int(11) NOT NULL,
  `idPuntoVenta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  KEY `FK_inventario_insumo` (`idInsumo`),
  KEY `FK_inventario_ptventa` (`idPuntoVenta`),
  CONSTRAINT `FK_inventario_insumo` FOREIGN KEY (`idInsumo`) REFERENCES `insumo` (`idInsumo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_inventario_ptventa` FOREIGN KEY (`idPuntoVenta`) REFERENCES `ptventa` (`idPtVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Inventario de insumos';

-- Volcando datos para la tabla inventarios.inventario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.inventarioproducto
CREATE TABLE IF NOT EXISTS `inventarioproducto` (
  `idProducto` int(11) NOT NULL,
  `idPuntoVenta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  KEY `FK_inventarioproducto_producto` (`idProducto`),
  KEY `FK_inventarioproducto_ptventa` (`idPuntoVenta`),
  CONSTRAINT `FK_inventarioproducto_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_inventarioproducto_ptventa` FOREIGN KEY (`idPuntoVenta`) REFERENCES `ptventa` (`idPtVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla inventarios.inventarioproducto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `inventarioproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventarioproducto` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.mermainsumo
CREATE TABLE IF NOT EXISTS `mermainsumo` (
  `idInsumo` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad` int(11) DEFAULT NULL,
  KEY `idProducto` (`idInsumo`) USING BTREE,
  CONSTRAINT `FK_mermainsumo_insumo` FOREIGN KEY (`idInsumo`) REFERENCES `insumo` (`idInsumo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla inventarios.mermainsumo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mermainsumo` DISABLE KEYS */;
/*!40000 ALTER TABLE `mermainsumo` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.mermaproducto
CREATE TABLE IF NOT EXISTS `mermaproducto` (
  `idProducto` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad` int(11) DEFAULT NULL,
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `mermaproducto_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla inventarios.mermaproducto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mermaproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `mermaproducto` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `unidadMedida` varchar(5) DEFAULT NULL,
  `idProveedor` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precioVenta` float DEFAULT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla inventarios.producto: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`idProducto`, `unidadMedida`, `idProveedor`, `nombre`, `precioVenta`) VALUES
	(1, 'grs', 1, 'producto editado', 99.9),
	(2, 'lts', 1, 'producto 2', 2),
	(4, 'grs', 1, 'prueba producto', 2.1),
	(6, 'lts', 1, 'producto desde ui', 5.5),
	(7, 'cc', 1, 'producto editado ui2', 22);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `idProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla inventarios.proveedor: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` (`idProveedor`, `nombre`) VALUES
	(1, 'proveedor 1'),
	(3, 'editado');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.ptventa
CREATE TABLE IF NOT EXISTS `ptventa` (
  `idPtVenta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPtVenta`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla inventarios.ptventa: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `ptventa` DISABLE KEYS */;
INSERT INTO `ptventa` (`idPtVenta`, `nombre`) VALUES
	(1, 'TAQ'),
	(2, 'TAQ Sur'),
	(3, 'TAQ Norte');
/*!40000 ALTER TABLE `ptventa` ENABLE KEYS */;

-- Volcando estructura para tabla inventarios.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `rol` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla inventarios.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
