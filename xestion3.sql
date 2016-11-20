-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2016 a las 16:21:04
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xestion3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(136, '2014_10_12_000000_create_users_table', 1),
(137, '2014_10_12_100000_create_empresa_table', 1),
(138, '2014_10_12_100000_create_password_resets_table', 1),
(139, '2014_10_12_110000_create_t3_table', 1),
(140, '2014_10_12_120000_create_t3_detalletable', 1),
(141, '2014_10_12_130000_create_t1_table', 1),
(142, '2014_10_12_130000_create_t7_table', 1),
(143, '2014_10_13_100000_create_t1_detalle_table', 1),
(144, '2016_11_17_013025_create_t2_table', 1),
(145, '2016_11_17_013718_create_t6_table', 1),
(146, '2016_11_17_015353_create_t6_detalle_table', 1),
(147, '2016_11_17_022422_create_t8_table', 1),
(148, '2016_11_17_023049_create_t8_detalle_table', 1),
(149, '2016_11_17_035945_create_t10_table', 1),
(150, '2016_11_17_040211_create_t10_detalle_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t1`
--

CREATE TABLE `t1` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t1_detalle`
--

CREATE TABLE `t1_detalle` (
  `id` int(10) UNSIGNED NOT NULL,
  `politica_sistema_gestion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objetivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_indicador` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unidad_medida` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frecuencia_analisis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metodo_calculo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ficha_indicador` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `t1_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t2`
--

CREATE TABLE `t2` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `presupuesto_anio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_asignacion_presupuesto` date NOT NULL,
  `responsable_planificacion_presupuesto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t3`
--

CREATE TABLE `t3` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha_actualizacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motivo_actualizacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsable_actualizacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `revisado_por` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t3_detalle`
--

CREATE TABLE `t3_detalle` (
  `id` int(10) UNSIGNED NOT NULL,
  `norma` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_publicacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `articulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_obligacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `palabra_clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aplica` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cumple` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `como_cumple` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsable_cumplimiento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t3_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t6`
--

CREATE TABLE `t6` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t6_detalle`
--

CREATE TABLE `t6_detalle` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha_t6` date NOT NULL,
  `nombre_quien_reporta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area_proyecto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_solicitud` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fuente_accion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prioridad_intervencion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acciones_desarrolladas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `om` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `1a` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsable_cierre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_compromiso_cierre` date NOT NULL,
  `fecha_cierre` date NOT NULL,
  `oportuno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eficaz` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `evidencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t6_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t7`
--

CREATE TABLE `t7` (
  `id` int(10) UNSIGNED NOT NULL,
  `comite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sede_proyecto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reunion_comite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abiertos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cerrados` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_prox_reunion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `evidencia_reunion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t1_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t8`
--

CREATE TABLE `t8` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t8_detalle`
--

CREATE TABLE `t8_detalle` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos_nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `centro_trabajo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_examen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_examen` date NOT NULL,
  `musculo_esqueletico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dermatologico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `respiratorio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cardiovascular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trabajo_alturas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `test_fobias_trabajo_alturas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `otro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `espirometria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `audiometria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optometria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visiometria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `electrocardiograma` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `examen_coordinacion_motriz` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `examen_psicologia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `otro_complementario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuadro_hematico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `glicemia_pre_pos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perfil_lipido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parcial_orina` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `otro_laboratorio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tetanos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fiebre_amarilla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hepatitis_b` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `antirrabica` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `otro_vacuna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pve_requerido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recomendaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `restricciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remision_eps` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_compromiso_asistencia_eps` date NOT NULL,
  `asistencia_eps` date NOT NULL,
  `t8_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t10`
--

CREATE TABLE `t10` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t10_detalle`
--

CREATE TABLE `t10_detalle` (
  `id` int(10) UNSIGNED NOT NULL,
  `proceso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `origen_interno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `origen_externo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_version` date NOT NULL,
  `aprobado_por` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medio_almacenamiento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acceso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proteccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sitio_consulta_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sitio_consulta_registro_fisico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sitio_consulta_registro_digital` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiempo_retencion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disposicion_final` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motivo_cambio_version_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t10_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ver` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `celular`, `ver`, `estado`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$ftIuwrsdlgpDM6U6iGEgpuTsWOJ4QBbEE9XSiKTkmN5ubdRHuh0sa', 1, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(2, 'alex', 'alex@gmail.com', '$2y$10$uP9VWCa2juyIfSa4RE5/kOpqir2qK3g9lUF4RjaQpfSvEltyNonT.', 0, 'tutela', 'http://1drv.ms/1mswjXS', 'vencido', 1, NULL, NULL, NULL),
(3, 'Mario Sierra', 'mario.sierra@xestion3.com', '$2y$10$BUf0SO8e2zT8jbyx7b2RW.V8UGVMi4.6zVePnVYY.GTtSaSXBxUo6', 0, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(4, 'Miguel', 'm@gmail.com', '$2y$10$MHiB.KzGwuDBR/Quvnr.p.HdQLjaQVk6oZMOjhG/Ksr2odo775It.', 0, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(5, 'mario sierra', 'msierra@xestion3.com', '$2y$10$5h.A9WdXaaDcmHQ5Cn3D7O1KtKnjKUhtNJPF0CJb.9n1FO1nxVJK.', 0, NULL, NULL, NULL, 1, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `t1`
--
ALTER TABLE `t1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t1_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `t1_detalle`
--
ALTER TABLE `t1_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t1_detalle_t1_id_foreign` (`t1_id`);

--
-- Indices de la tabla `t2`
--
ALTER TABLE `t2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t2_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `t3`
--
ALTER TABLE `t3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t3_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `t3_detalle`
--
ALTER TABLE `t3_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t3_detalle_t3_id_foreign` (`t3_id`);

--
-- Indices de la tabla `t6`
--
ALTER TABLE `t6`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t6_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `t6_detalle`
--
ALTER TABLE `t6_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t6_detalle_t6_id_foreign` (`t6_id`);

--
-- Indices de la tabla `t7`
--
ALTER TABLE `t7`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t7_t1_id_foreign` (`t1_id`);

--
-- Indices de la tabla `t8`
--
ALTER TABLE `t8`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t8_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `t8_detalle`
--
ALTER TABLE `t8_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t8_detalle_t8_id_foreign` (`t8_id`);

--
-- Indices de la tabla `t10`
--
ALTER TABLE `t10`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t10_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `t10_detalle`
--
ALTER TABLE `t10_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t10_detalle_t10_id_foreign` (`t10_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT de la tabla `t1`
--
ALTER TABLE `t1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t1_detalle`
--
ALTER TABLE `t1_detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t2`
--
ALTER TABLE `t2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t3`
--
ALTER TABLE `t3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t3_detalle`
--
ALTER TABLE `t3_detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t6`
--
ALTER TABLE `t6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t6_detalle`
--
ALTER TABLE `t6_detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t7`
--
ALTER TABLE `t7`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t8`
--
ALTER TABLE `t8`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t8_detalle`
--
ALTER TABLE `t8_detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t10`
--
ALTER TABLE `t10`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t10_detalle`
--
ALTER TABLE `t10_detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t1`
--
ALTER TABLE `t1`
  ADD CONSTRAINT `t1_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t1_detalle`
--
ALTER TABLE `t1_detalle`
  ADD CONSTRAINT `t1_detalle_t1_id_foreign` FOREIGN KEY (`t1_id`) REFERENCES `t1` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t2`
--
ALTER TABLE `t2`
  ADD CONSTRAINT `t2_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t3`
--
ALTER TABLE `t3`
  ADD CONSTRAINT `t3_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t3_detalle`
--
ALTER TABLE `t3_detalle`
  ADD CONSTRAINT `t3_detalle_t3_id_foreign` FOREIGN KEY (`t3_id`) REFERENCES `t3` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t6`
--
ALTER TABLE `t6`
  ADD CONSTRAINT `t6_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t6_detalle`
--
ALTER TABLE `t6_detalle`
  ADD CONSTRAINT `t6_detalle_t6_id_foreign` FOREIGN KEY (`t6_id`) REFERENCES `t6` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t7`
--
ALTER TABLE `t7`
  ADD CONSTRAINT `t7_t1_id_foreign` FOREIGN KEY (`t1_id`) REFERENCES `t1` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t8`
--
ALTER TABLE `t8`
  ADD CONSTRAINT `t8_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t8_detalle`
--
ALTER TABLE `t8_detalle`
  ADD CONSTRAINT `t8_detalle_t8_id_foreign` FOREIGN KEY (`t8_id`) REFERENCES `t8` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t10`
--
ALTER TABLE `t10`
  ADD CONSTRAINT `t10_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t10_detalle`
--
ALTER TABLE `t10_detalle`
  ADD CONSTRAINT `t10_detalle_t10_id_foreign` FOREIGN KEY (`t10_id`) REFERENCES `t10` (`id`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
