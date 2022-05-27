-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-05-2022 a las 12:58:53
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Estructura de tabla para la tabla `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `cuerpo` mediumtext,
  `opciones` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `tipo`, `cuerpo`, `opciones`) VALUES
(1, 'slider', '[]', '{\"fade\":false,\"dimensionar\":false,\"height\":\"100\",\"indicadores\":true}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `idcatg` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) NOT NULL,
  `filtro` varchar(70) NOT NULL,
  `catpad` int(11) DEFAULT NULL,
  `fecreg` datetime DEFAULT CURRENT_TIMESTAMP,
  `estado` char(1) DEFAULT 'A',
  PRIMARY KEY (`idcatg`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcatg`, `nombre`, `filtro`, `catpad`, `fecreg`, `estado`) VALUES
(1, 'Noticias', 'noticias', NULL, NOW(), 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `idemp` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `celular` varchar(40) DEFAULT NULL,
  `direccion` varchar(220) DEFAULT NULL,
  `correo1` varchar(100) DEFAULT NULL,
  `correo2` varchar(100) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `whatsapp1` varchar(200) DEFAULT NULL,
  `whatsapp2` varchar(200) NOT NULL,
  `instagram` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `linkedin` varchar(250) DEFAULT NULL,
  `intranet` varchar(200) DEFAULT NULL,
  `liblink` varchar(200) DEFAULT NULL,
  `libmail` varchar(100) DEFAULT NULL,
  `libnume` int(11) DEFAULT NULL,
  `metades` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idemp`),
  UNIQUE KEY `nombre` (`nombre`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idemp`, `nombre`, `telefono`, `celular`, `direccion`, `correo1`, `correo2`, `facebook`, `whatsapp1`, `whatsapp2`, `instagram`, `youtube`, `twitter`, `linkedin`, `intranet`, `liblink`, `libmail`, `libnume`, `metades`) VALUES
(1, 'AdminWeb', '', '', '', 'desarrollo@dev.com', 'desarrollo_php@dev.com', 'https://es-la.facebook.com/', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://www.instagram.com/?hl=es', 'https://www.youtube.com/', 'https://www.php.net/manual/es/intro-whatis.php', 'https://pe.linkedin.com/', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `idgaleria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `detalle` varchar(270) DEFAULT NULL,
  `ncolum` int(11) DEFAULT NULL,
  `cuerpo` mediumtext,
  `modo` char(1) DEFAULT 'A',
  `portada` varchar(300) DEFAULT NULL,
  `fecreg` datetime DEFAULT CURRENT_TIMESTAMP,
  `visible` char(1) DEFAULT 'N',
  PRIMARY KEY (`idgaleria`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `popup`
--

DROP TABLE IF EXISTS `popup`;
CREATE TABLE IF NOT EXISTS `popup` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `tipo` char(1) NOT NULL,
  `cuerpo` mediumtext,
  `header` char(1) DEFAULT NULL,
  `margen` char(1) DEFAULT NULL,
  `slider` char(1) DEFAULT NULL,
  `animation` varchar(40) DEFAULT NULL,
  `visible` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `popup`
--

INSERT INTO `popup` (`id`, `titulo`, `tipo`, `cuerpo`, `header`, `margen`, `slider`, `animation`, `visible`) VALUES
(1, 'Titulo de ventana', 'I', '', 'N', 'N', 'N', 'animate__zoomIn', 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE IF NOT EXISTS `publicacion` (
  `idpub` int(11) NOT NULL AUTO_INCREMENT,
  `idcatg` int(11) NOT NULL,
  `titulo` varchar(280) NOT NULL,
  `tagname` varchar(330) NOT NULL,
  `portada` varchar(350) DEFAULT NULL,
  `detalle` varchar(250) DEFAULT NULL,
  `cuerpo` longtext,
  `fecpub` datetime NOT NULL,
  `fecreg` datetime DEFAULT CURRENT_TIMESTAMP,
  `visible` char(1) DEFAULT 'N',
  PRIMARY KEY (`idpub`) USING BTREE,
  UNIQUE KEY `noticias_titulo_key` (`titulo`(255)) USING BTREE,
  KEY `idcatg` (`idcatg`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `fecreg` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `nombre`, `pass`, `fecreg`) VALUES
(101, 'web2022', '$2y$10$DhfhM2fqBho3DZCMb79JIOWFjf8KNDfd8eGLU3g4N2djUjqX.9egi', NOW());
COMMIT;