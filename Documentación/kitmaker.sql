-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-06-2013 a las 10:07:22
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kitmaker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `seccion` int(11) NOT NULL,
  `cuerpo` text COLLATE utf8_unicode_ci NOT NULL,
  `publica` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `titulo_index` (`titulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `seccion`, `cuerpo`, `publica`) VALUES
(1, 'ojo', 1, 'que pasa', 0),
(32, 'Mini Pc para tu “vieja” tele', 2, 'Con la llegada de los nuevos smartTV, tu gran pantalla FullHD que con tanto esfuerzo te comprastes hace solo unos años, parece ahora como uno de aquellos televisores de “culo gordo”, que si bien se veían bastante bien, ahora ya no sirven prácticamente para nada comparados con los nuevas cajas que ya son de todo [...]', 1),
(24, 'asd', 1, 'asdasd', 0),
(25, 'Ultrabook: Donde convergen las Tablets y los Portátiles', 1, 'Es sumamente dificil pronosticar el futuro en el campo de la informática, y mucho mas aun, cuando entra en juego los gustos y predilecciones de los usuarios y compradores, pero voy a correr el riesgo de hacer un pequeño juicio de valor cuando pretendemos comprar un equipo que nos facilite su uso en movilidad. Y [...]', 0),
(30, 'Titulo dos', 1, 'Cuerpodos', 1),
(31, '¿y el botón de inicio en Windows8?', 2, 'La primera pregunta que cualquier usuario normal va a tener cuando se enfrente por primera vez al Windows 8, probablemente sea esta, ¿dónde está en botón de inicio? y la segunda ¿cómo accedo entonces a mis programas programas?¿dónde están mis carpetas? … Es evidente que con el tiempo y uso todos nos acostunbraremos al nuevo [...]', 1),
(27, 'EL CERTIFICADO DIGITAL', 1, 'Parece mentira que en los tiempos que corren todavía muchos particulares sigan sin tener su certificado digital o no lo usen. Es más, aun me parece peor que determinados servicios web, no faciliten esta tecnología para sus validaciones y acceso a sus servicios y sigan confiando en claves mas o menos sencillas de averiguar o [...]', 0),
(28, 'Como hacer una videoconferencia', 1, 'Actualmente sigo sin comprender como profesionalmente mantenemos reuniones físicas tan frecuentemente, tanto con nuestros socios, como con nuestros propios trabajadores deslocalizados. Si estamos convencidos por fin de la importancia de la productividad y eficiencia de nuestras horas laborales, ¿por qué incurrimos en gastos de tiempo y dinero en desplazamientos inútiles? Además estamos poniendo en riesgo [...]', 0),
(29, 'Se fué la luz !!! Como elegir un SAI', 1, 'En estos días de lluvias y tormentas seguro que cruzas los dedos muy a menudo para que tu ordenador, que dejastes encendido mientras desayunabas o fuistes al aseo, no sufra un apagón eléctrico y con el se vaya todo el trabajo de la mañana, ¿por qué no le día a guardar antes de salir? Pero [...]', 1),
(33, 'a', 1, 'w', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1371742831, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '��', 'josÃ© antonio vivas', 'fc842d33e9e20685251147d73a9dd87eec8eb126', NULL, 'info@javivas.es', NULL, NULL, NULL, '50b1dce836840f76a74bcdfceef7db7140c17fa8', 1371574235, 1371763812, 1, 'JosÃ© Antonio', 'Vivas', 'javivas.es', '959987645'),
(3, '��', 'kitmaker kitmaker', '7690ab0a37427bc576f1030fd9de551c749551fc', NULL, 'info@kitmaker.com', NULL, NULL, NULL, NULL, 1371743260, 1371746099, 1, 'Kitmaker', 'Kitmaker', 'Kitmaker', '900111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
