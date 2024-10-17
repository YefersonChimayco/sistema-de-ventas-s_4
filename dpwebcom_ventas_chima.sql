-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-10-2024 a las 09:10:02
-- Versión del servidor: 10.6.18-MariaDB-cll-lve
-- Versión de PHP: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dpwebcom_ventas_chima`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `actualizarcategoria` (IN `c_id` INT(11), IN `c_nombre` VARCHAR(20), IN `c_detalle` VARCHAR(50))   BEGIN
	UPDATE categoria
    SET 
    	nombre = c_nombre,
        detalle = c_detalle
       
    WHERE id = c_id;
    SELECT c_id;

END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `actualizarcompra` (IN `cc_id` INT(11), IN `cc_id_producto` INT(11), IN `cc_cantidad` INT(5), IN `cc_precio` DECIMAL(6,2), IN `cc_fecha_compra` DATE, IN `cc_id_trabajador` INT(11))   BEGIN
	UPDATE compras
    SET 
    	id_producto =cc_id_producto,
    	cantidad = cc_cantidad,
        precio = cc_precio,
        fecha_compra = cc_fecha_compra,
        id_trabajador = cc_id_trabajador
        
    WHERE id = cc_id;
    SELECT cc_id;

END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `actualizardetalleventa` (IN `d_id` INT(11), IN `d_id_venta` INT(11), IN `d_id_producto` INT(11), IN `d_cantidad` INT(5))   BEGIN
	UPDATE detalle_venta
    SET 
    	id_venta = d_id_venta,
    	id_producto = d_id_producto,
        cantidad = d_cantidad
        
    WHERE id = d_id;
    SELECT d_id;

END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `actualizarpagos` (IN `pp_id` INT(11), IN `id_venta` INT(11), IN `fecha` DATE, IN `monto` DECIMAL(6,2), IN `m_pago` VARCHAR(20), IN `estado` VARCHAR(1))   BEGIN
	UPDATE pagos
    SET 
    	id_venta = pp_id_venta,
    	fecha = pp_fecha,
        monto = pp_monto ,
        m_pago = pp_m_pago,
        estado = pp_estado
        
    WHERE id = pp_id;
    SELECT pp_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `actualizarpersona` (IN `per_id` VARCHAR(11), IN `per_nro_identidad` VARCHAR(130), IN `per_telefono` VARCHAR(15), IN `per_correo` VARCHAR(100), IN `per_departamento` VARCHAR(20), IN `per_provincia` VARCHAR(30), IN `per_distrito` VARCHAR(50), IN `per_cod_postal` INT(5), IN `per_direccion` VARCHAR(100), IN `per_rol` VARCHAR(15), IN `per_password` VARCHAR(500), IN `per_estado` VARCHAR(1), IN `per_fecha_reg` DATE)   BEGIN
	UPDATE persona
    SET 
    	nro_identidad = per_nro_identidad,
    	telefono = per_telefono,
        correo = per_correo,
        departamento = per_departamento,
        provincia = per_provincia,
        distrito = per_distrito,
        cod_postal = per_cod_postal,
        direccion = per_direccion,
        rol = per_rol,
        password = per_password,
        estado = per_estado, 
        fecha_reg = per_fecha_reg
    WHERE id = per_id;
    SELECT per_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `actualizarproducto` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(11), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_id_categoria` INT(11), IN `p_imagen1` VARCHAR(16), IN `p_id_proveedor` INT(11))   BEGIN
	UPDATE producto
    SET 
    	codigo = p_codigo,
    	nombre = p_nombre,
        detalle = p_detalle,
        precio = p_precio,
        id_categoria = p_id_categoria,
        imagen1 = p_imagen1,
        id_proveedor = p_id_proveedor
    WHERE id = p_id;
    SELECT p_id;

END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `actualizarsesion` (IN `s_id` INT(11), IN `s_id_persona` INT(11), IN `s_fecha_hora_inicio` DATE, IN `s_fecha_hora_salida` DATE, IN `s_token` INT(20), IN `s_ip` VARCHAR(20))   BEGIN
	UPDATE sesiones
    SET 
    	persona = s_persona,
    	fecha_hora_inicio = s_fecha_hora_inicio,
        fecha_hora_salida = s_fecha_hora_salida,
        token = s_token,
        ip = s_ip
    WHERE id = s_id;
    SELECT s_id;

END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `actualizarventa` (IN `v_id` INT(11), IN `v_codigo` INT(11), IN `v_fecha_hora` DATE, IN `v_id_cliente` INT(11), IN `v_id_vendedor` INT(11), IN `v_estado` INT(1))   BEGIN
	UPDATE venta
    SET 
    	codigo = v_codigo,
    	fecha_hora = v_fecha_hora,
        id_cliente = v_id_cliente,
        id_vendedor = v_id_vendedor,
        estado = v_estado
    WHERE id = v_id;
    SELECT v_id;

END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarcategoria` ()   BEGIN
	SELECT*FROM categoria ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarcategoriaid` (IN `c_id` INT(11))   BEGIN
	SELECT*FROM categoria WHERE id=c_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarcompra` ()   BEGIN
	select*FROM compras;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarcompraid` (IN `cc_id` INT(11))   BEGIN
	SELECT*FROM compras WHERE id=cc_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscardetalleventa` ()   BEGIN 
	SELECT*FROM detalle_venta;
    
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarpago` ()   BEGIN 
	SELECT*FROM pagos;
    
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarpagoid` (IN `pp_id` INT(11))   BEGIN
	SELECT*FROM pagos WHERE id=pp_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarpersona` ()   BEGIN
	SELECT*FROM persona ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarpersonaid` (IN `per_id` INT(11))   BEGIN
	SELECT*FROM persona WHERE id=per_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarProductoid` (IN `p_id` INT(11))   BEGIN
	SELECT*FROM producto WHERE id=p_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarProductos` ()   BEGIN 
	SELECT*FROM producto;
    
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarsesion` ()   BEGIN 
	SELECT*FROM sesiones;
    
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarsesionid` (IN `s_id` INT(11))   BEGIN 
	SELECT*FROM producto WHERE id = s_id;
    
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarventa` ()   BEGIN 
	SELECT*FROM venta;
    
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `buscarventaid` (IN `v_id` INT(11))   BEGIN
	SELECT*FROM venta WHERE id=v_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `eliminarcategoria` (IN `c_id` INT(11))   BEGIN
	delete from categoria WHERE id = c_id;
    SELECT c_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `eliminarcompra` (IN `cc_id` INT(11))   BEGIN
	delete from compras WHERE id =cc_id;
    SELECT cc_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `eliminarpago` (IN `pp_id` INT(11))   BEGIN
	delete from pagos WHERE id = pp_id;
    SELECT pp_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `eliminarpersona` (IN `per_id` INT(11))   BEGIN
	DELETE  from persona WHERE id= per_id;
    SELECT per_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `eliminarProducto` (IN `p_id` INT(11))   BEGIN
	delete from producto WHERE id = p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `eliminarsesion` (IN `s_id` INT(11))   BEGIN
	delete from sesiones WHERE id = s_id;
    SELECT s_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `eliminarventa` (IN `v_id` INT(11))   BEGIN
	delete from venta WHERE id = v_id;
    SELECT v_id;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `elminardetalleventa` (IN `d_id` INT(11))   BEGIN
	delete from detalle_venta WHERE id = v_id_venta;
    DELETE from venta where id = id_venta;
    SELECT COUNT(*) from venta WHERE id = v_id_venta;
    
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `registarventa` (IN `v_codigo` INT(11), IN `v_fecha_hora` DATE, IN `v_id_cliente` INT(11), IN `v_id_vendedor` INT(11), IN `v_estado` INT(1))   BEGIN
	DECLARE existe_venta INT;
    DECLARE id INT;
    SET existe_venta =(SELECT COUNT(*) FROM ventas WHERE codigo=v_codigo);
    
    IF existe_venta = 0 THEN
    	INSERT INTO venta (codigo,fecha_hora,id_cliente,id_vendedor,estado)
        	VALUES(v_codigo,v_fecha_hora,v_id_cliente,v_id_vendedor,v_estado);
            SET id = LAST_INSERT_ID();
         ELSE 
         	SET id = 0;
         END IF;
         SELECT ID ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `registrarcategoria` (IN `c_nombre` VARCHAR(20), IN `c_detalle` VARCHAR(50))   BEGIN
	DECLARE existe_categoria INT;
    DECLARE id INT;
    SET existe_categoria =(SELECT COUNT(*) FROM categoria WHERE nombre=c_nombre);
    
    IF existe_categoria = 0 THEN
    	INSERT INTO categoria (nombre,detalle)
        	VALUES(c_nombre,c_detalle);
            SET id = LAST_INSERT_ID();
         ELSE 
         	SET id = 0;
         END IF;
         SELECT ID ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `registrarcompras` (IN `cc_id_producto` INT(11), IN `cc_cantidad` INT(5), IN `cc_precio` DECIMAL(6,2), IN `cc_fecha_compra` DATE, IN `cc_id_trabajador` INT(11))   BEGIN
	DECLARE existe_compras INT;
    DECLARE id INT;
    SET existe_compras =(SELECT COUNT(*) FROM compras WHERE id=cc_id);
    
    IF existe_compras = 0 THEN
    	INSERT INTO compras (id_producto,cantidad,precio,fecha_compra,id_trabajador)
        	VALUES(cc_id_producto,cc_cantidad,cc_precio,cc_fecha_cc_compra,cc_id_trabajador);
            SET id = LAST_INSERT_ID();
         ELSE 
         	SET id = 0;
         END IF;
         SELECT ID ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `registrardetalleventa` (IN `d_id_venta` INT(11), IN `d_id_producto` INT(11), IN `d_cantidad` INT(5))   BEGIN
	DECLARE existe_detalleventa INT;
    DECLARE id INT;
    SET existe_detalleventa =(SELECT COUNT(*) FROM detalle_venta WHERE id=d_id);
    
    IF existe_detalleventa = 0 THEN
    	INSERT INTO detalle_venta (id_venta,id_producto,cantidad)
        	VALUES(d_id_venta,d_id_producto,d_cantidad);
            SET id = LAST_INSERT_ID();
         ELSE 
         	SET id = 0;
         END IF;
         SELECT ID ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `registrarpago` (IN `pp_id_venta` INT(11), IN `pp_fecha` DATE, IN `pp_monto` DECIMAL(6,2), IN `pp_m_pago` VARCHAR(20), IN `pp_estado` VARCHAR(1))   BEGIN
	DECLARE existe_pagos INT;
    DECLARE id INT;
    SET existe_pagos =(SELECT COUNT(*) FROM pagos WHERE id=pp_id);
    
    IF existe_pagos = 0 THEN
    	INSERT INTO pagos (id_venta,fecha,monto,m_pago,estado)
        	VALUES(pp_id_venta,pp_fecha,pp_monto,pp_m_pago,estado);
            SET id = LAST_INSERT_ID();
         ELSE 
         	SET id = 0;
         END IF;
         SELECT ID ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `registrarpersona` (IN `per_nro_identidad` VARCHAR(11), IN `per_razon_social` VARCHAR(130), IN `per_telefono` VARCHAR(15), IN `per_correo` VARCHAR(100), IN `per_departamento` VARCHAR(20), IN `per_provincia` VARCHAR(30), IN `per_distrito` VARCHAR(50), IN `per_cod_postal` INT(5), IN `per_direccion` VARCHAR(100), IN `per_rol` VARCHAR(15), IN `per_password` VARCHAR(500), IN `per_estado` VARCHAR(1), IN `per_fecha_reg` DATE)   BEGIN
	DECLARE existe_persona INT;
    DECLARE id INT;
    SET existe_persona =(SELECT COUNT(*) FROM persona WHERE nro_identidad=per_nro_identidad);
    
    IF existe_persona = 0 THEN
    	INSERT INTO persona (nro_identidad,razon_social,telefono,correo,departamento,provincia,distrito,cod_postal,direccion,rol,password,estado,fecha_reg)
        	VALUES(per_nro_identidad,per_razon_social,per_telefono,per_correo,per_departamento,per_provincia,per_distrito,per_cod_postal,per_direccion,per_rol,per_password,per_estado,per_fecha_reg);
            SET id = LAST_INSERT_ID();
         ELSE 
         	SET id = 0;
         END IF;
         SELECT ID ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `registrarProducto` (IN `p_codigo` VARCHAR(11), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_stock` INT(5), IN `p_id_categoria` INT(11), IN `p_imagen1` VARCHAR(16), IN `p_id_proveedor` INT(11))   BEGIN
	DECLARE existe_producto INT;
    DECLARE id INT;
    SET existe_producto =(SELECT COUNT(*) FROM producto WHERE codigo=p_codigo);
    
    IF existe_producto = 0 THEN
    	INSERT INTO producto (codigo,nombre,detalle,precio,stock,id_categoria,imagen1,id_proveedor)
        	VALUES(p_codigo,p_nombre,p_detalle,p_precio,p_stock,p_id_categoria,p_imagen1,p_id_proveedor);
            SET id = LAST_INSERT_ID();
         ELSE 
         	SET id = 0;
         END IF;
         SELECT ID ;
END$$

CREATE DEFINER=`dpwebcom`@`localhost` PROCEDURE `registrarsesion` (IN `s_id_persona` INT(11), IN `s_fecha_hora_inicio` DATE, IN `s_fecha_hora_salida` DATE, IN `s_token` INT(20), IN `s_ip` VARCHAR(20))   BEGIN
	DECLARE existe_sesion INT;
    DECLARE id INT;
    SET existe_sesion =(SELECT COUNT(*) FROM sesiones WHERE id= s_id);
    
    IF existe_sesion= 0 THEN
    	INSERT INTO sesiones (id_persona,fecha_hora_inicio,fecha_hora_salida,token,ip)
        	VALUES(s_id_persona,s_fecha_hora_inicio,s_fecha_hora_salida,s_token,ip);
            SET id = LAST_INSERT_ID();
         ELSE 
         	SET id = 0;
         END IF;
         SELECT ID ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `detalle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `detalle`) VALUES
(1, 'polo', ' polos'),
(2, 'polo', ' polos'),
(3, 'polo', ' polos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `fecha_compra` datetime NOT NULL DEFAULT current_timestamp(),
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datalle_venta`
--

CREATE TABLE `datalle_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `monto` decimal(6,2) NOT NULL,
  `m_pago` varchar(20) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nro_identidad` varchar(11) NOT NULL,
  `razon_social` varchar(130) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `cod-postal` int(5) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `password` varchar(500) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  `fecha_reg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nro_identidad`, `razon_social`, `telefono`, `correo`, `departamento`, `provincia`, `distrito`, `cod-postal`, `direccion`, `rol`, `password`, `estado`, `fecha_reg`) VALUES
(1, '77501319', 'yepeto', '931534222', 'chimayco@gmail.com', 'ayacucho', 'huanta', 'huanta', 10201, 'jr espinar', 'proveedor', '12345678', '1', '2024-09-19 12:21:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `stock` int(5) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `imagen1` varchar(16) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `detalle`, `precio`, `stock`, `id_categoria`, `imagen1`, `id_proveedor`) VALUES
(1, '123456', 'polo', ' polo amarillo', 60.99, 100, 1, 'polo.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha_hora_inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_hora_salida` datetime NOT NULL DEFAULT current_timestamp(),
  `token` int(20) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trabajador` (`id_trabajador`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `datalle_venta`
--
ALTER TABLE `datalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datalle_venta`
--
ALTER TABLE `datalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `persona` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `datalle_venta`
--
ALTER TABLE `datalle_venta`
  ADD CONSTRAINT `datalle_venta_ibfk_1` FOREIGN KEY (`id`) REFERENCES `venta` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `datalle_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `persona` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
