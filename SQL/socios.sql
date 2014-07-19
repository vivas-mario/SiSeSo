-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-07-2014 a las 20:52:35
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `socios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organismo` varchar(90) NOT NULL,
  `contacto` varchar(70) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `organismo`, `contacto`, `correo`, `telefono`) VALUES
(2, ' ACTIVIDADES TURISTICAS DE CAMPECHE S.A. DE C.V.', 'Lic. Boris Ivan Castro Herrera', 'gerencia_baluartes@prodigy.net.mx', '81-6-39-11,  81-6-24-10'),
(3, ' ADO Y EMPRESAS COORDINADAS S.A DE C.V.', 'Lic. Eduardo Valdez Hernandez ', 'csanchez@grupoado.com.mx', '81-1-99-10 EXT 6'),
(4, ' ALEJANDRO NICOLAS MACGREGOR  PENICHE (RESTAURANTE CAPUCHINO)', 'Lic. Alejandro Macgregor Peniche ', 'rubigp1@gmail.com', '81-1-31-37'),
(5, 'AGROVETERINARIA  HUIMANGUILLO. S.A DE C.V.', 'Sr. Angel Gamboa Martinez', 'agrohuicampeche@hotmail.com', '81-6-14-80, 981-82-7-92-06'),
(6, ' AGENCIA DE VIAJES CAMPECHE  S.A. DE C.V.', 'Sra.Victoria Guerrero Ferrer', 'viajescampeche@hotmail.com', '81-6-08-41,  81-6-52-33'),
(7, ' ANTONIO CASTILLO REYES (CONSTRUCTORA)', ' Antonio Castillo Reyes ', 'csiacr@prodigy.net.mx', '81-6-41-43'),
(8, ' CAJA SOLIDARIA MULMEYAH S.C. DE A.P. DE R.L DE C.V.', 'Jose Dolores Urbano Caamal May', 'recursos.humanos@mulmeyah.org.mx', '81-1-37-66 ext 119'),
(9, 'CENTRO EDUCATIVO XAIL,S.A. DE C.V.', 'Profra. Elia Rosa Sales Heredia', 'ncnc_04@hotmail.com', '81-3-15-45,  81-2-70-22,'),
(10, 'CENTRO DE INNOVACION EMPRESARIAL DE CAMPECHE, A.C.', 'Ing. Rogelio Alejandro Hoil Canul', 'cieasis@ccecampeche.org.mx', '81-1-98-92'),
(11, ' CARLOS RAMON CACERES CETINA', 'Ing. Carlos Caceres Zetina', 'caceres_cotiza@hotmail.com', '81-6-87-47'),
(12, 'COLEGIO DE ARQUITECTOS  DE CAMPECHE,A.C.', 'Arq. Edmundo Oloarte Jimenez', 'c_arquitectosdecampeche@hotmail.com', '81-1-69-99'),
(13, 'CAMPECHANA DE VEHICULOS, S.A. DE C.V.', 'LIC. Alejandro Selem Bicharra,', '712ger@campechana.com.mx', '81-3-06-72'),
(14, ' CONSULTORES GUERRERO SELEM S.C', 'Lic. Alberto Manuel Guerrero Novelo ', 'vguerreros@guerrerosconsultores.mx', '81-3-03-47, 81-3-25-00,'),
(15, 'CONALEP CAMPECHE', 'C.P. MARJORIE FLORES SILVA', 'ane_vinculacion@hotmail.com', '81-3-13-53, 81-9-98-90, 81-3-22-11, 81-3-06-5'),
(16, ' CARLOS MANUEL RISUEÃ‘O BARRERA (THE RECA)', 'Lic. Carlos Manuel RisueÃ±o Barrera', 'ribargo@hotmail.com.mx', '81-6-72-96 fax-62956'),
(17, 'CONSTRUCTORA GORDILLO S.A. DE C.V.', 'Ing. Augusto Meliton Gordillo DÃ­az ', 'gerencia@cogusa.com.mx', '81-6-06-39'),
(18, 'CARNES CAYAL S. DE R.L. DE C.V.', 'Lic. Ricardo Ortiz Ruiz Del Hoyo', 'claumartin@hotmail.com', '81-5-44-41'),
(19, 'CR OFFICE, S.A. DE C.V.', 'Licda.Maria Fernanda Razo Leon ', 'croffice@hotmail.com', '81-6-45-13, 81-6-69-45'),
(20, 'COMERCIALIZADORA SISTEMAS STONE,S.A. DE C.V.', 'Ing. Hector Eduardo Varela Rodriguez  ', 'ventas@sistemasstone.com.mx', '81-1-30-10 ext 3'),
(21, 'CONSTRUCCIONES EVERGREEN, S.A. DE C.V.', 'Ing.Marcelo Bautista PadrÃ³n', 'evergreenc@hotmail.com', '981-81-7-06-24'),
(22, 'DICONSA,S.A. DE C.V.', 'Ing.Carlos Eduardo Sanguino Carril', '', '81-1-99-20'),
(23, 'DISTRIBUIDORA ELECTRICA DEL SURESTE, S.A. DE C.V.', 'Ing.Gabriel Francisco Hoil Canul ', 'gerenciageneral@grupodessa.com', '81-1-44-73 '),
(24, 'DISTRIBUCIONES SWIGHTERS, S. DE R.L.', 'Ing.Luis Alberto del Pino Martinez', 'swighters@hotmail.com', '81-1-33-31, 12-7-12-17'),
(25, 'DESARROLLADORA MEXICANA DE INFRAESTRUCTURA, S.A. DE C.V.', 'Ing.Edgar Nicolas Gonzalez Guerrero', 'deminsay@prodigy.net.mx', '81-1-20-60, fax 81-1-20-70'),
(26, 'EDITH VARGAS FERNANDEZ', 'Sra. Edith Vargas Fernandez', 'lopezch82@hotmail.com.mx', '81-6-28-72'),
(27, 'EMPRESARIOS CAMPECHANOS MODERNOS,S.A. DE C.V.', 'C.P. Gregorio EfraÃ­n Brito Escamilla ', 'britoescamilla@yahoo.com', '81-6-66-02 ext 105'),
(28, 'ENRIQUE BACILIO ACEVEDO CANUL', 'Enrique Bacilio Acevedo Canul ', 'constructorace@hotmail.com', '81-1-08-29'),
(29, 'EUROGRUAS PENINSULAR, S.A. DE C.V.', 'C.P.Alejandra Sales Rosado', 'eurogruaspeninsular@hotmail.com', '81-3-37-55'),
(30, 'EXE CORPORATIVO, S.A. DE C.V.', 'Sra.Maria Isabel Lopez Arcila', 'exe_corporativo@prodigy.net.mx', '81-6-14-57'),
(31, 'FERRECONSTRU S.A DE C.V', 'Licda. Yolanda Apolinar Quijano', 'ferreconstruyolanda@gmail.com', '81-6-12-81'),
(32, 'FERROLAMINAS RICHAUD S.A. DE C.V.', 'Lic. Omar Richaud Apolinar ', 'nomina.ferrolaminas@gmail.com', '81-6-41-44, EXT 8, 81-1-06-23'),
(33, 'FONDO CAMPECHE', 'Ing. Luis Enrique Zetina Abreu', 'jku@fondocampeche.gob.mx', '81-1-50-34 ext 128'),
(34, 'FONDO ESTATAL DE FOMENTO INDUSTRIAL DEL ESTADO DE CAMPECHE', 'Ing. Luis Enrique Zetina Abreu', 'jku@fondocampeche.gob.mx', '81-1-50-34 ext 128'),
(35, ' FRANCISCO AARON CHABLE (GRUPO PENTA)', 'Francisco Aaron Chable Lopez', 'gpopenta@prodigy.net.mx', '1549786, 81-1-34-81'),
(36, 'GODELATO, S.C.', 'Dra.Rosa Marina de la Torre Espinoza ', 'chavito_primariacampeche@hotmail.com.mx', '81-3-04-52, 81-3-13-24.'),
(37, 'GOLDEN TRACK SERVICE, S.A. DE C.V.', ' Lic.Ignacio Manuel Sanchez NuÃ±ez', 'llancam@prodigy.com.mx', '81-1-47-41'),
(38, 'GRUPO DE PINTURAS MARCO,S.A. DE C.V.', 'Lic. Eduardo Martinez Contreras ', 'grupomarco@hotmail.com.mx', '81-1-17-43, 81-1-08-87'),
(39, 'GRUPO HOTELERO TURISCAM,S.A. DE C.V.', 'Ing. Juan Carlos Baqueiro Avila', 'reservaciones@villascampeche.com.mx', '81-3-66-84'),
(40, 'HAIDEE DE LOS ANGELES RODRIGUEZ CASTILLO', '', '', '81-1-42-84'),
(41, 'HECTOR ABRAHAM CERVERA GANZO (LA PARROQUIA)', 'Lic.Hector Abraham Cervera Ganzo', ' abraham@marganzo.com', '81-6-25-30, 81-6-60-63'),
(42, 'HECTOR ABRAHAM CERVERA GANZO ( RESTAURANT MARGANZO)', 'Lic.Hector Abraham Cervera Ganzo', 'abraham@marganzo.com', '81-1-38-98'),
(43, ' HERIBERTO AROLDO GONGORA CENTURIÃ“N (SERVICIOS VAGON)', 'Lic.Heriberto Aroldo Gongora CenturiÃ²n', 'vagon_campeche@hotmail.com', '81-1-64-21'),
(44, 'HOTEL BALUARTES,S.A. DE C.V.', 'Lic. Boris Ivan Castro Herrera', 'gerencia_baluartes@prodigy.net.mx', '81-6-39-11, 81-6-24-10'),
(45, ' JESUS AGAPITO CU CORTES (MAT. P/CONSTRUCCIÃ“N Y FERRETERA ALEX) ', 'Ing.Jesus Agapito Cu Cortes', 'ferreteria_alex@hotmail.com', '81-2-00-59, 81-2-00-55'),
(46, ' JORGE IVAN ARCOVEDO AVILA (LA VERBENA)|', 'Lic. Jorge Ivan Arcovedo Ãvila ', 'verbena@prodigy.net.mx', '81-6-42-20'),
(47, ' JOSE ANTONIO RAMIREZ PERALTA (RESTAURANTE LAS PUERTAS DE SAN ROMAN)', 'Sr. JosÃ© Antonio RamÃ­rez Peralta ', 'laspuertasjs@hotmail.com', '9811293002, 816-42-18'),
(48, 'KARLA DEL ROSARIO PAVON CARRASCO', 'Lic.Karla pavon Carrasco', 'rakyla@prodigy.net.mx', '81-1-02-32'),
(49, ' KARLA KARINAFERNANDEZ DE LARA (STARSYS)', 'Licda.Karla Fernandez de Lara Rebolledo', 'starsys_ventas@hotmail.com', '81-1-59-08'),
(50, ' KIIHANAL SAZON CAMPECHANO S.A. DE C.V. (LA PIGUA)', '', '', '81-1-33-65'),
(51, ' LEOBARDO ESPINOZA MAGAÃ‘A', 'Ing. Leobardo Espinoza MagaÃ±a', 'leoespimag@hotmail.com', '81-1-02-01'),
(52, ' LUCIANO ALBERTO VERA EHUAN', 'C.P.Luciano Alberto Vera EhuÃ¡n', 'lvera@vra.com.mx', '12-7-15-34 EXT 101'),
(53, ' MARIA HAIDEE VIVAS CORAL (SALA DE FIESTAS LOS GLOBOS)', 'MARIA AIDEE VIVAS CORAL', '', '81-1-42-72'),
(54, ' MARIA JUDITH RAMIREZ HERRERA (FABRICA MAR Y SOL)', 'Licda. MarÃ­a Judith  RamÃ­rez  Herrera     ', 'mar_y_sol_2001@hotmail.com', '81-5-23-83   81-5-05-44'),
(55, 'MARIANA GUADALUPE CASTRO LOPEZ (REDES Y RESINAS)', 'Mariana Guadalupe Castro Lopez', 'redesyresinacam@prodigy.net.mx', '81-6-10-18'),
(56, 'MAURO ANTONIO SANSORES SANTOS (Grupo Anso S.A de C.V.)', 'Lic.Mauro Antonio Sansores Santos ', 'gama_sopport@hotmail.com', '81-1-39-08, 81-1-52-57, '),
(57, ' MIEL Y CERA DE CAMPECHES. DE S.S.', 'Lic Jose Luis Flores Gonzalez ', 'miel_campeche@hotmail.com', '81-7-70-24, 81-7-52-61'),
(58, ' NELLY YOLANDA CASTILLO SOSA (REST. EL BASTION CAMPECHE)', 'C.P. Nelly Yolanda Castillo Sosa', 'carlos@elbastion.mx', '81-6-21-28'),
(59, ' NIDIA DE LAS MERCEDES CARDENAS BARRERA', 'Nidia de las Mercedes Cardenas Barrera, ', 'qfbnidiacardenas@hotmail.com', '81-1-57-45'),
(60, ' OPERADORA QUISQUEYANA DEL SURESTE S.A. DE C.V.', 'Lic. Alberto Azar CalderÃ³n', 'albertoazarc@hotmail.com', '81-1-91-91'),
(61, ' PC JOGZA S.A. DE C.V.', 'Lic. Jose del Carmen Gonzalez Asencio', 'jose130774@hotmail.com', '81-1-62-78, EXT.6, 81-6-64-78'),
(62, ' PIENSA ROJO S.A. DE C.V.', 'Lic. Jose Francisco Sanchez Farfan ', 'creativa@litek.com.mx', '81-1-49-65 ext 107'),
(63, ' PLASTICOS Y DERIVADOS SAURI S.A. DE C.V.', 'Sr. Jorge Adriano Sauri Duarte ', 'plasticossauri@hotmail.com', '81-1-21-65 ,81-1-25-50'),
(64, ' RAFAEL RODRIGUEZ BLANQUET (PROYECTOS Y CONSTRUCCIÃ“N)', '', '', '1444294'),
(65, 'RESTAURANTE LANGOSTINO, S. DE R.L. DE C.V.', 'Lic.Eduardo Isidro Tuz Berzunza ', 'eduardo.tuz@langostino.com.mx', '81-5-40-56'),
(66, ' RICARDO RODRIGUES DIVES (CONSULTOR)', 'C.P. Ricardo Rodriguez Dives', 'rrdives@prodigy.net.mx', '81-6-43-35'),
(67, ' ROBERTO SALES ROSADO (AUTOSERVICIOS PREMIER)', 'Lic.Roberto Sales Rosado', 'autoserviciospremier@hotmail.com', '81-3-16-62, 81-3-16-63'),
(68, 'ROMAN JAVIER FLORES AGUILAR', '', '', '81-6-42-65'),
(69, ' ROSARIO ARANDA SALAS', 'Lic.Rosario Aranda Salas', 'raranda@sedi.mx', '81-1-50-26'),
(70, 'SANATORIO CLINICA CAMPECHE,S.A. DE C.V.', 'Licda. Yolanda Apolinar Quijano', 'clinicacampeche@hotmail.com', '81-1-69-69'),
(71, 'SERVICIO TURISTICO DEL SURESTE, S.A. DE C.V.', 'C.P.Roberto Ortega Gonzalez  ', 'rortega@oceanview.com.mx', '81-1-99-99'),
(72, 'SERVICIO TURISTICOS DE CAMPECHE, S.A. DE C.V.', 'Lic. Geraldine Ortega Selem', 'info@hotelamericacampeche.com', '81-6-45-88'),
(73, 'SUPER CAMPECHE, S.A.DE C.V.', 'Licda.Beatriz Balmes Arceo ', 'bebalmes@prodigy.net.mx', '81-1-54-90, 81-6-10-10'),
(74, 'TALLER DE RECTIFICACIONES MOGUEL, S.A DE C.V.', 'Ing.Nelda Aurora Garcia Moguel', 'neldaaurora@hotmail.com', '81-6-06-88'),
(75, 'TRANSPORTES AKIM PECH SA DE CV', 'C.P. Sergio Rafael Perez Barrera ', 'sergiora1@hotmail.com.mx', '81-6-29-56'),
(76, 'TRIPLAY DE CAMPECHE, S.A DE C.V', 'Lic. Jorge Castillo Illescas', 'tricamsavent@hotmail.com', '81-6-45-11 ext -104'),
(77, 'UNIVERSIDAD DEL TERCER MILENIO, S.C.', 'C.P.Rafael Balan Perez', 'lfarfan@unid.com', '81-6-60-39 ext 140'),
(78, 'VICTOR ANTONIO ESCALANTE FLORES (Servicios Opticos Ah Kim Pech) ', 'Dr. Victor Antonio Escalante Flores ', 'victor_soa@hotmail.com', '81-1-48-99'),
(79, 'WILLIAN FERNANDO CASTILLO NUÃ‘EZ (Ferretera Castillo)   ', 'Lic.William Fernando Castillo NuÃ±ez', 'ferretera_castillo@hotmail.com', '12-80113, 981-12-0-43-19'),
(80, 'XAIL TALLER INFANTIL, S.C.', 'Licda.Rebeca Martinez Tirado ', 'xailtaller@hotmail.com.mx', '81-6-24-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_asesoria`
--

CREATE TABLE IF NOT EXISTS `tabla_asesoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e2` varchar(90) NOT NULL,
  `participantes` varchar(45) NOT NULL,
  `hombres` varchar(45) NOT NULL,
  `mujeres` varchar(45) NOT NULL,
  `f2` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tabla_asesoria`
--

INSERT INTO `tabla_asesoria` (`id`, `e2`, `participantes`, `hombres`, `mujeres`, `f2`) VALUES
(1, 'decam', '23', '20', '3', '12/04/2014'),
(2, 'tec campeche', '10', '5', '5', '09/01/2014'),
(3, 'tecnologico de campeche', '50', '20', '30', '2014-01-24'),
(4, 'universidad', '50', '25', '25', '2014-01-24'),
(5, '', '50', '20', '25', '2014-03-14'),
(6, ' ACTIVIDADES TURISTICAS DE CAMPECHE S.A. DE C', '50', '25', '30', '2014-03-13'),
(7, ' ACTIVIDADES TURISTICAS DE CAMPECHE S.A. DE C', '50', '20', '30', '2014-12-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_curso`
--

CREATE TABLE IF NOT EXISTS `tabla_curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(90) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `horas` varchar(45) NOT NULL,
  `apoyo` varchar(500) NOT NULL,
  `mensaje` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `tabla_curso`
--

INSERT INTO `tabla_curso` (`id`, `empresa`, `nombre`, `sexo`, `curso`, `fecha`, `horas`, `apoyo`, `mensaje`) VALUES
(3, 'decam', 'caamal chable jose', 'hombre', 'php', '12/04/2014', '23 horas', 'si', 'caÃ±on'),
(4, 'tec campeche', 'mario vivas', 'hombre', 'php', '2014-01-09', '10', 'si', 'quipo de computo'),
(5, 'tec campeche', 'alfonso vivas', 'hombre', 'html', '2014-01-09', '15', 'si', 'material de curso'),
(10, 'ACTIVIDADES TURISTICAS DE CAMPECHE S.A. DE C.V.', 'caamal chable jose', 'hombre', 'php', '23/enero/2014', '4', 'si', 'CURSO'),
(12, '', '', '', '', '', '', '', ''),
(14, ' ACTIVIDADES TURISTICAS DE CAMPECHE S.A. DE C.V.', 'Mario', 'hombre', 'html', '2014-11-30', '10', 'si', 'prestamo de equipo'),
(15, ' ACTIVIDADES TURISTICAS DE CAMPECHE S.A. DE C.V.', 'alfonso vivas', 'hombre', 'html', '2014-12-31', '10', 'si', 'rotafolio ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_publicidad`
--

CREATE TABLE IF NOT EXISTS `tabla_publicidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `procedencia` varchar(90) NOT NULL,
  `espacio` varchar(45) NOT NULL,
  `tiempo` varchar(45) NOT NULL,
  `contenido` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tabla_publicidad`
--

INSERT INTO `tabla_publicidad` (`id`, `procedencia`, `espacio`, `tiempo`, `contenido`) VALUES
(1, 'decam', 'media pagina', '2 meses', 'informativo'),
(2, 'decam', 'media pagina', '2 meses', 'informativo'),
(3, '', '', '', ''),
(4, 'tec campeche', '1/2 pagina', '1 mes', 'educativo'),
(5, 'alfonso vivas', '1 pagina', '1 mes', 'informatico'),
(6, 'tec campeche', '1 pagina', '1 mes', 'educativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_renta`
--

CREATE TABLE IF NOT EXISTS `tabla_renta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e1` varchar(90) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `f1` varchar(45) NOT NULL,
  `ho1` varchar(45) NOT NULL,
  `c1` varchar(45) NOT NULL,
  `h1` varchar(45) NOT NULL,
  `montaje` varchar(45) NOT NULL,
  `a1` varchar(45) NOT NULL,
  `m1` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tabla_renta`
--

INSERT INTO `tabla_renta` (`id`, `e1`, `f1`, `ho1`, `c1`, `h1`, `montaje`, `a1`, `m1`) VALUES
(1, 'decam', '23/enero/2014', '12:00 horas', 'diseÃ±o grafico ', '24 horas', 'auditorio', 'si', 'sillas y mesas '),
(2, '', '', '', '', '', '', '', ''),
(3, 'jose caamal cahble ', '2014-01-21', '25', 'joeee', '3', 'herradura', 'si', 'retretertretrete'),
(4, 'tec campeche', '09/01/2014', '8 am', 'php', '10 horas', 'herradura', 'si', 'prestamo de equipo'),
(5, 'tecnologico de campeche', '2014-01-21', '12 pm', 'actualizaciÃ³n tecnologica', '20 horas', 'auditorio', 'si', 'caÃ±on, pantalla, audio'),
(6, ' JOSE ANTONIO RAMIREZ PERALTA (RESTAURANTE LA', '2014-03-27', '8am a 2pm', 'sistema de gestios de proyectos', '6 horas', 'salon de clases ', 'si', 'equipo multimedia y audio'),
(7, ' JOSE ANTONIO RAMIREZ PERALTA (RESTAURANTE LAS POUERTAS DE SAN ROMAN)', '2014-03-21', '12 pm', 'sistema de gestios de proyectos', '20 horas', 'auditorio', 'si', 'PRESTAMO DE QUIPO DE AUDIO Y MATERIAL DE APOY'),
(8, ' JOSE ANTONIO RAMIREZ PERALTA (RESTAURANTE LAS PUERTAS DE SAN ROMAN)', '2014-03-21', '12 pm', 'sistema de gestios de proyectos', '20 horas', 'auditorio', 'si', 'MATERIAL DIDACTIVO Y SISTEMA DE AUDIO'),
(9, ' ADO Y EMPRESAS COORDINADAS S.A DE C.V.', '2014-03-04', '7iugkjm', 'sistema de gestios de proyectos', '20 horas', 'herradura', '', 'cañon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '',
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `perfil` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `descripcion`, `email`, `fecha`, `perfil`) VALUES
(1, 'DECAM', 'cosi', NULL, NULL, '0000-00-00', 1),
(2, 'MARIO', 'Vivas', NULL, NULL, '0000-00-00', 2),
(3, 'michel', '123', NULL, NULL, '0000-00-00', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
