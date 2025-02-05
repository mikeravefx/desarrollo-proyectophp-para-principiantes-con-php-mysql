-- phpMyAdmin SQL Dump
-- version 2.6.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 06-10-2005 a las 07:50:07
-- Versión del servidor: 4.0.15
-- Versión de PHP: 4.3.3
-- 
-- Base de datos: `noticias`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `articulos`
-- 

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(255) NOT NULL default '',
  `descripcion` text NOT NULL,
  `contenido` text NOT NULL,
  `fecha` date NOT NULL default '0000-00-00',
  `visible` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=10 ;

-- 
-- Volcar la base de datos para la tabla `articulos`
-- 

INSERT INTO `articulos` VALUES (1, 'La inflación de setiembre fue de 1,2% por los alimentos y la ropa', 'Según el Ministerio de Economía, los aumentos se deben al crecimiento de la economía y el mayor consumo. De esta manera, el costo de vida acumula un incremento de 8,9% en lo que va del año.', '', '2005-10-04', 1);
INSERT INTO `articulos` VALUES (2, 'El Presidente acusó a los súper de querer desestabilizar la economía', 'Dijo que tratan de generar "una pequeña inflación, porque se quieren apropiar de la rentabilidad que tienen que compartir con el pueblo". Sostuvo que están "cartelizados" y les pidió que bajen los precios. ', '', '2005-10-04', 1);
INSERT INTO `articulos` VALUES (3, 'La inflación del año ya se acerca a un escalón del 11 por ciento', 'Es lo que indica la suba de los precios no afectados por la estacionalidad. El aumento de setiembre, sin embargo, encendió luces amarillas. ', '', '2005-10-05', 1);
INSERT INTO `articulos` VALUES (4, 'Embotelladoras: no hubo acuerdo y dictaron la conciliación obligatoria', 'Lo hizo anoche Trabajo y ahora habrá tres semanas de tregua. Los gremios acataron la medida, pero anunciaron que trabajarán a reglamento. Pedían un aumento de $ 800 y las empresas ofrecieron $ 300. ', '', '2005-10-06', 1);
INSERT INTO `articulos` VALUES (5, 'Ironías y juegos cruzados en el debate de candidatos porteños', 'Carrió, Macri y Bielsa se cruzaron por TV. Plantearon sus propuestas, pero los momentos más fuertes se dieron cuando se aliaron de a dos contra uno, de manera alternada. Los tres se consideraron ganadores. ', '', '2005-10-05', 1);
INSERT INTO `articulos` VALUES (6, 'El embajador francés calificó a Kirchner de "populista" y Cristina lo cruzó fuerte', '"El embajador de Francia debería tratar con respeto al pueblo argentino", le contestó. ', '', '2005-10-06', 1);
INSERT INTO `articulos` VALUES (7, 'Al final, Bush confirmó que vendrá para la Cumbre de las Américas', 'formaron que irá a Mar del Plata en una gira que incluirá a Brasil y Panamá', '', '2005-10-06', 0);
INSERT INTO `articulos` VALUES (8, 'Apenas después de las elecciones, saldrán a tomar US$ 500 millones', 'Será a través del Boden 2015. La plata se usará para pagar deudas que vencen hasta fin de año, incluidos más de US$ 1.000 millones al FMI. Un grupo de bancos colocará títulos en el exterior. ', '', '2005-10-07', 1);
INSERT INTO `articulos` VALUES (9, 'Sostienen que los campos están perdiendo su fertilidad', 'De los tres principales nutrientes que extraen las cosechas se repone sólo una pequeña parte.', '', '2005-10-08', 1);
