-- phpMyAdmin SQL Dump
-- version 2.6.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generaci�n: 06-10-2005 a las 07:50:07
-- Versi�n del servidor: 4.0.15
-- Versi�n de PHP: 4.3.3
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

INSERT INTO `articulos` VALUES (1, 'La inflaci�n de setiembre fue de 1,2% por los alimentos y la ropa', 'Seg�n el Ministerio de Econom�a, los aumentos se deben al crecimiento de la econom�a y el mayor consumo. De esta manera, el costo de vida acumula un incremento de 8,9% en lo que va del a�o.', '', '2005-10-04', 1);
INSERT INTO `articulos` VALUES (2, 'El Presidente acus� a los s�per de querer desestabilizar la econom�a', 'Dijo que tratan de generar "una peque�a inflaci�n, porque se quieren apropiar de la rentabilidad que tienen que compartir con el pueblo". Sostuvo que est�n "cartelizados" y les pidi� que bajen los precios. ', '', '2005-10-04', 1);
INSERT INTO `articulos` VALUES (3, 'La inflaci�n del a�o ya se acerca a un escal�n del 11 por ciento', 'Es lo que indica la suba de los precios no afectados por la estacionalidad. El aumento de setiembre, sin embargo, encendi� luces amarillas. ', '', '2005-10-05', 1);
INSERT INTO `articulos` VALUES (4, 'Embotelladoras: no hubo acuerdo y dictaron la conciliaci�n obligatoria', 'Lo hizo anoche Trabajo y ahora habr� tres semanas de tregua. Los gremios acataron la medida, pero anunciaron que trabajar�n a reglamento. Ped�an un aumento de $ 800 y las empresas ofrecieron $ 300. ', '', '2005-10-06', 1);
INSERT INTO `articulos` VALUES (5, 'Iron�as y juegos cruzados en el debate de candidatos porte�os', 'Carri�, Macri y Bielsa se cruzaron por TV. Plantearon sus propuestas, pero los momentos m�s fuertes se dieron cuando se aliaron de a dos contra uno, de manera alternada. Los tres se consideraron ganadores. ', '', '2005-10-05', 1);
INSERT INTO `articulos` VALUES (6, 'El embajador franc�s calific� a Kirchner de "populista" y Cristina lo cruz� fuerte', '"El embajador de Francia deber�a tratar con respeto al pueblo argentino", le contest�. ', '', '2005-10-06', 1);
INSERT INTO `articulos` VALUES (7, 'Al final, Bush confirm� que vendr� para la Cumbre de las Am�ricas', 'formaron que ir� a Mar del Plata en una gira que incluir� a Brasil y Panam�', '', '2005-10-06', 0);
INSERT INTO `articulos` VALUES (8, 'Apenas despu�s de las elecciones, saldr�n a tomar US$ 500 millones', 'Ser� a trav�s del Boden 2015. La plata se usar� para pagar deudas que vencen hasta fin de a�o, incluidos m�s de US$ 1.000 millones al FMI. Un grupo de bancos colocar� t�tulos en el exterior. ', '', '2005-10-07', 1);
INSERT INTO `articulos` VALUES (9, 'Sostienen que los campos est�n perdiendo su fertilidad', 'De los tres principales nutrientes que extraen las cosechas se repone s�lo una peque�a parte.', '', '2005-10-08', 1);
