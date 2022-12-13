CREATE TABLE `factura` (
  `fac_id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_codigo` varchar(45) DEFAULT NULL,
  `fac_nombre` varchar(45) DEFAULT NULL,
  `fac_usuario` int(11) DEFAULT NULL,
  `fac_fecha` datetime DEFAULT current_timestamp(),
  `fac_monto` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `facturadetalle` (
  `fad_id` int(11) NOT NULL AUTO_INCREMENT,
  `fad_factura` int(11) DEFAULT NULL,
  `fad_producto` int(11) DEFAULT NULL,
  `fad_cantidad` int(11) DEFAULT NULL,
  `fad_monto` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`fad_id`),
  KEY `fk_factura_idx` (`fad_factura`),
  KEY `fk_producto_idx` (`fad_producto`),
  CONSTRAINT `fk_factura` FOREIGN KEY (`fad_factura`) REFERENCES `factura` (`fac_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto` FOREIGN KEY (`fad_producto`) REFERENCES `productos` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `productos` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_codigo` varchar(75) DEFAULT NULL,
  `pro_nombre` varchar(75) DEFAULT NULL,
  `pro_descripcion` varchar(45) DEFAULT NULL,
  `pro_tipo` int(11) DEFAULT NULL,
  `pro_laboratorio` int(11) DEFAULT NULL,
  `pro_imagen` varchar(45) DEFAULT NULL,
  `pro_fechaCreado` datetime DEFAULT current_timestamp(),
  `pro_precio` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4

CREATE TABLE `usuarios` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_nombre` varchar(75) DEFAULT NULL,
  `us_apellido` varchar(75) DEFAULT NULL,
  `us_email` varchar(75) DEFAULT NULL,
  `us_rol` int(11) DEFAULT NULL,
  `us_contra` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


USE `farmagermain`;
DROP procedure IF EXISTS `SP_getProductoByID`;

USE `farmagermain`;
DROP procedure IF EXISTS `farmagermain`.`SP_getProductoByID`;
;

DELIMITER $$
USE `farmagermain`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_getProductoByID`(IN _id INT(11))
BEGIN
		SELECT 
		pro_id AS ID,
		pro_codigo AS CODIGO,
		pro_nombre AS NOMBRE,
        pro_descripcion AS DESCRIPCION,
		pro_tipo AS TIPO,
		pro_laboratorio AS LAB,
		pro_imagen AS IMAGE,
        pro_precio AS PRECIO 
	FROM
		productos
	WHERE 
		pro_id= _id;

END$$

DELIMITER ;
;

USE `farmagermain`;
DROP procedure IF EXISTS `SP_getProductos`;

USE `farmagermain`;
DROP procedure IF EXISTS `farmagermain`.`SP_getProductos`;
;

DELIMITER $$
USE `farmagermain`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_getProductos`()
BEGIN

	SELECT 
		pro_id AS ID,
		pro_codigo AS CODIGO,
		pro_nombre AS NOMBRE,
        pro_descripcion AS DESCRIPCION,
		pro_tipo AS TIPO,
		pro_laboratorio AS LAB,
		pro_imagen AS IMAGE, 
        pro_precio AS PRECIO
	FROM
		productos;

END$$

DELIMITER ;
;

USE `farmagermain`;
DROP procedure IF EXISTS `SP_getProductosDestacados`;

USE `farmagermain`;
DROP procedure IF EXISTS `farmagermain`.`SP_getProductosDestacados`;
;

DELIMITER $$
USE `farmagermain`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_getProductosDestacados`()
BEGIN

	SELECT 
		pro_id AS ID,
		pro_codigo AS CODIGO,
		pro_nombre AS NOMBRE,
        pro_descripcion AS DESCRIPCION,
		pro_tipo AS TIPO,
		pro_laboratorio AS LAB,
		pro_imagen AS IMAGE,
        pro_precio AS PRECIO 
	FROM
		productos
	ORDER BY rand()
	LIMIT 0,4;

END$$

DELIMITER ;
