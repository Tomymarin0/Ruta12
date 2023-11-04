-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-12-2022 a las 18:10:29
-- Versión del servidor: 5.7.40-log
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rutamision_ruta12`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `name`) VALUES
(1, 'santysisi', '873a5330e051428412ca64847384612f', 'Santiago San Martin'),
(3, 'asfd', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `fecha_realizado` datetime NOT NULL,
  `id_status` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_billetes`
--

CREATE TABLE `cotizaciones_billetes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `compra` int(11) NOT NULL,
  `venta` int(11) NOT NULL,
  `fecha_realizado` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cotizaciones_billetes`
--

INSERT INTO `cotizaciones_billetes` (`id`, `nombre`, `compra`, `venta`, `fecha_realizado`) VALUES
(1, 'Dolar U.S.A', 166, 174, '2022-12-02'),
(2, 'Euro', 170, 178, '2022-12-02'),
(3, 'Real', 29, 33, '2022-12-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `link_section`
--

CREATE TABLE `link_section` (
  `id` int(11) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `text` varchar(300) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `fecha_realizada` datetime NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `text_block_a` varchar(3000) NOT NULL,
  `text_block_b` varchar(3000) NOT NULL,
  `featured_block_a` varchar(3000) NOT NULL,
  `featured_block_b` varchar(3000) NOT NULL,
  `fecha_realizado` datetime NOT NULL,
  `links` varchar(1000) DEFAULT NULL,
  `introduction_link` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `title`, `introduction`, `text_block_a`, `text_block_b`, `featured_block_a`, `featured_block_b`, `fecha_realizado`, `links`, `introduction_link`) VALUES
(32, 'XVIII ExposiciÃ³n Provincial de la Leche', 'NogoyÃ¡, Entre RÃ­os', 'ðŸ˜ƒ ð—˜ð—¹ ð—½ð—®ð˜€ð—®ð—±ð—¼ ðŸ², ðŸ³ ð˜† ðŸ´ ð—±ð—² ð— ð—®ð˜†ð—¼ ð—²ð˜€ð˜ð˜‚ð˜ƒð—¶ð—ºð—¼ð˜€ ð—½ð—¿ð—²ð˜€ð—²ð—»ð˜ð—²ð˜€ ð—²ð—» ð—¹ð—® ð—«ð—©ð—œð—œð—œ ð—˜ð˜…ð—½ð—¼ ð—£ð—¿ð—¼ð˜ƒð—¶ð—»ð—°ð—¶ð—®ð—¹ ð—±ð—² ð—¹ð—® ð—Ÿð—²ð—°ð—µð—² ð—²ð—» ð—¡ð—¼ð—´ð—¼ð˜†Ã¡, ð—˜ð—»ð˜ð—¿ð—² ð—¥ð—¶ð—¼ð˜€. ð—™ð˜‚ð—¶ð—ºð—¼ð˜€ ð—®ð—°ð—¼ð—ºð—½ð—®Ã±ð—®ð—±ð—¼ð˜€ ð—½ð—¼ð—¿ ð—¦ð—®ð—»ð˜ð—® ð—¦ð˜†ð—¹ð˜ƒð—¶ð—»ð—®, ð—²ð˜…ð—½ð—²ð—¿ð˜ð—¼ð˜€ ð—²ð—» ð—»ð˜‚ð˜ð—¿ð—¶ð—°ð—¶Ã³ð—» ð—®ð—»ð—¶ð—ºð—®ð—¹. ðŸ´ðŸ”ðŸ„\r\n', ' ðŸ§‰ ð—”ð—´ð—¿ð—®ð—±ð—²ð—°ð—²ð—ºð—¼ð˜€ ð—® ð˜ð—¼ð—±ð—¼ð˜€ los que se acercaron a nuestro stand y por su compaÃ±Ã­a durante todas las tardes con buenos mates de gente de campo.\r\n', 'ðŸ‘‰ Tuvimos el agrado de recibir la visita de ð†ð®ð¬ð­ðšð¯ð¨ ðð¨ð«ððžð­ y ð‘ðšðŸðšðžð¥ ð‚ðšð¯ðšð ð§ðš.', 'ðŸ™Œ ð†ð‘ð€ð‚ðˆð€ð’! Santa Sylvina', '2022-10-27 10:09:50', 'https://www.instagram.com/p/CgT_d-9tl1D/', 'SeguÃ­nos en Instagram! ðŸ˜‰'),
(36, 'ðŸ“£  REUNIÃ“N DEL CIEPDER EN PARANÃ, ENTRE RÃOS', 'CÃ¡mara de Industriales del Extrusado, Prensado y Derivados de Entre RÃ­os ðŸ™ŒðŸŒ±', 'Participamos, junto con demÃ¡s empresarios integrantes de la CIEPDER en una reuniÃ³n clave (en sede de la CÃ¡mara Arbitral de Cereales en ParanÃ¡). El motivo fue analizar la agenda de trabajo sectorial y avanzar en la ampliaciÃ³n de mercados y mejoras de infraestructuras para el extrusado, prensado y derivados en la provincia', 'Trabajamos en un modelo de desarrollo e integraciÃ³n que permita atender la demanda de productos industrializados derivados de los granos entrerrianos en la provincia y el exterior', 'Contamos con la presencia de Silvina Guerra (Secretaria de EnergÃ­a del Gobierno de Entre RÃ­os) Pablo SÃ¡nchez, Maximiliano Stivala, MartÃ­n Folmer, Rodrigo PÃ©rez, AdriÃ¡n Balcar y Ariel Alfaro.', 'ðŸ‘Œ ðð¨ ðð®ððžð¬ ðžð§ ð¡ðšðœðžð« ð­ð® ðœð¨ð§ð¬ð®ð¥ð­ðš, ðžð¬ð­ðšð¦ð¨ð¬ ð©ðšð«ðš ðšð²ð®ððšð«ð­ðž!. ðð¨ðÃ©ð¬ ðœð¨ð¦ð®ð§ð¢ðœðšð«ð­ðž ðšð¥ ð°ð¡ðšð­ð¬ðšð©ð©: ', '2022-11-02 17:44:45', 'https://acortar.link/dj9BxQ', '(ðŸ‘ðŸ’ðŸ‘) ðŸ“ðŸ”ðŸ ðŸŽðŸ—ðŸ“ðŸ’ ðŸ“± '),
(37, 'ðŸ˜‰ LÃ­nea NITREX 600 y 500!', 'ðŸŒ± Te acercamos la lÃ­nea de tratamientos para semillas de soja.\r\n', 'Tratamiento de base complementaria a los fertilizantes y fitosanitarios, nutriendo y protegiendo la planta para un desarrollo vigoroso y resistente.', 'ðŸ™Œ BENEFICIOS: \r\n\r\n- NodulaciÃ³n eficiente y temprana \r\n- Desarrollo y estimulaciÃ³n de raÃ­ces \r\n- Aumento del diÃ¡metro de tallos \r\n- Vigor germinativo\r\n- Mayor sanidad en todo el desarrollo del cultivo \r\n- Aumento exponencial de rendimiento \r\n- MÃ¡xima protecciÃ³n contra patÃ³genos \r\n- Mayor espectro de control.', 'NITREX 600 ofrece un tratamiento completo e integral para semillas de soja con la Ãºltima tecnologÃ­a. \r\nPor un lado protege la semilla contra hongos con 3 principios activos de amplio espectro; y por el otro aporta bacterias fijadoras de nitrÃ³geno, organismos que estimulan el desarrollo radicular, fito-hormo - nas que regulan el crecimiento y nutrientes quelatados que aumentan el vigor germinativo. ', 'NITREX 500 es un tratamiento integral para semillas de soja. Inocula, protege, nutre, desarrolla y asegura tu cultivo de soja para lograr mayores rendimientos.\r\n\r\nðŸ™Œ BENEFICIOS:\r\n\r\n- NodulaciÃ³n asegurada desde el comienzo \r\n- Desarrollo exponencial de raÃ­ces \r\n- Aumento del diÃ¡metro de tallos \r\n- Mayor captaciÃ³n de agua y nutrientes', '2022-11-02 20:46:25', 'https://www.instagram.com/p/CjFtKtFIkTl/', 'SeguÃ­nos en Instagram! ðŸ˜‰');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section_file`
--

CREATE TABLE `section_file` (
  `id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `file_path` varchar(300) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `section_file`
--

INSERT INTO `section_file` (`id`, `position`, `file_path`, `section_id`) VALUES
(140, 1, 'public/sections/636142b6bed3f.jpg', 32),
(141, 2, 'public/sections/636142b6ce0b9.jpg', 32),
(142, 3, 'public/sections/636142b6ce1e2.jpg', 32),
(143, 4, 'public/sections/636142b6ce2fc.jpg', 32),
(160, 1, 'public/sections/6362ac8d04968.jpg', 36),
(161, 2, 'public/sections/6362ac8d04cb7.jpg', 36),
(162, 3, 'public/sections/6362acbca4efb.jpg', 36),
(163, 4, 'public/sections/6362acbca5060.jpg', 36),
(164, 1, 'public/sections/6362d7378817f.jpg', 37),
(165, 2, 'public/sections/6362d73788360.jpg', 37),
(166, 3, 'public/sections/6362d73788454.jpg', 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `file_path` varchar(300) NOT NULL,
  `subtitle` varchar(300) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `introduction`, `link`, `file_path`, `subtitle`, `position`) VALUES
(1, 'SOMOS DISTRIBUIDORES DE LOS MEJORES AGROINSUMOS', 'A G R O I N S U M O S', 'https://es.stackoverflow.com/questions/97752/c%C3%B3mo-crear-espacios-y-saltos-de-l%C3%ADnea-en-php-con-comillas-simples', 'public/sliders/630f7ca81b91c.jpg', 'Ofrecemos las marcas lÃ­deres del mercado, fertilizantes foliares, coadyuvantes y acondicionadores de suelo.', 3),
(2, 'PRODUCTOS PARA NUTRICIÃ“N DE ANIMALES ', 'N U T R I C I Ã“ N  A N I M A L', 'https://google.com', 'public/sliders/630f7ce1d5a1c.jpg', 'Suplefeed, suplemilk, alimentos balanceados, concentrados protÃ©icos, premezclas, sales vitamÃ­nicas y minerales.', 4),
(3, 'EXPELLER COMO SUPLEMENTO CONCENTRADO', 'E X P E L L E R  D E  S O J A', 'https://google.com', 'public/sliders/630f7d220a82d.jpg', 'El expeller es un excelente concentrado proteico, que por su alta palatabilidad y cantidad se adapta a esquemas de suplementaciÃ³n de bovinos para carne y leche, al igual que aves y cerdos.', 5),
(4, 'RECEPCIÃ“N, COMPRA Y CANJE DE GRANOS', 'S E R V I C I O S', 'https://google.com', 'public/sliders/630f7bd6191ba.jpg', 'Ofrecemos todos los servicios que necesitan los pequeÃ±os y medianos productores. Nuestros servicios son personalizados respondiendo las necesidades de cada cliente.', 2),
(5, 'ACOPIO Y ACONDICIONAMIENTO DE CEREALES', 'E M P R E S A', 'https://google.com/as', 'public/sliders/630f85b19f227.mp4', 'Somos exportadores de granos y derivados de la soja como el expeller y el aceite crudo desgomado.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `type`) VALUES
(1, 'pending'),
(2, 'rechazed'),
(3, 'approved');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`,`section_id`),
  ADD KEY `id_section` (`section_id`);

--
-- Indices de la tabla `cotizaciones_billetes`
--
ALTER TABLE `cotizaciones_billetes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `link_section`
--
ALTER TABLE `link_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_section` (`section_id`);

--
-- Indices de la tabla `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `section_file`
--
ALTER TABLE `section_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_billetes`
--
ALTER TABLE `cotizaciones_billetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `link_section`
--
ALTER TABLE `link_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `section_file`
--
ALTER TABLE `section_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `link_section`
--
ALTER TABLE `link_section`
  ADD CONSTRAINT `link_section_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `section_file`
--
ALTER TABLE `section_file`
  ADD CONSTRAINT `section_file_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
