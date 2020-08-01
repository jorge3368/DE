-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2020 a las 01:20:37
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `de`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `nombre_empleado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_empleado` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_empleado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_empleado` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eliminado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `id_empresa`, `nombre_empleado`, `apellido_empleado`, `telefono_empleado`, `direccion_empleado`, `eliminado`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mr. Michale Koepp DVM', 'Gleason', '7896-6399', '25182 Wilma Lane Suite 827\nLloydmouth, CT 08713-3416', 1, '2020-08-02 02:40:07', '2020-08-02 04:46:44'),
(2, 3, 'Dr. Betsy Jenkins IV', 'Bayer', '7896-6399', '88496 Ondricka Crossing\nEast Justonbury, WY 39304-8204', 1, '2020-08-02 02:40:07', '2020-08-02 05:09:27'),
(3, 3, 'Jensen Ullrich', 'Runolfsdottir', '7896-6399', '691 Kemmer Fall Apt. 139\nAllenestad, DC 22750-9740', 1, '2020-08-02 02:40:07', '2020-08-02 05:09:34'),
(4, 8, 'Melba Schroeder', 'Carter', '7896-6399', '57268 Chanelle Meadows Apt. 690\r\nLake Vilmaborough, TX 85589', 0, '2020-08-02 02:40:08', '2020-08-02 05:19:12'),
(5, 7, 'alex', 'lopez', '7896-0000', 'santelena', 1, '2020-08-02 02:40:08', '2020-08-02 05:19:24'),
(6, 5, 'Finn Romaguera', 'Emard', '7896-6399', '19926 Oral Motorway\nNew Tessie, RI 62625-9945', 1, '2020-08-02 02:40:09', '2020-08-02 05:09:41'),
(7, 6, 'Dereck Lynch', 'O\'Reilly', '7896-6399', '32295 Lakin Garden Suite 295\r\nNolanfort, WY 23718', 0, '2020-08-02 02:40:09', '2020-08-02 05:19:41'),
(8, 7, 'jorge', 'marca', '123123', 'asder', 0, '2020-08-02 04:43:15', '2020-08-02 04:43:15'),
(9, 6, 'nestor', 'paz a', '22222222', 'werader', 1, '2020-08-02 05:08:11', '2020-08-02 05:09:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_empresa` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_empresa` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_empresa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eliminado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre_empresa`, `direccion_empresa`, `telefono_empresa`, `eliminado`, `created_at`, `updated_at`) VALUES
(1, 'maxime', 'Quidem eum fugit expedita itaque natus non. Maiores ratione necessitatibus magni.', '2289-8989', 1, '2020-08-02 02:40:05', '2020-08-02 03:33:34'),
(2, 'praesentium', 'Omnis expedita quisquam id illo cumque. Iste fugit molestias accusamus magnam. Beatae eaque et non nisi. Omnis natus consequatur vel placeat non doloribus non.', '2289-8989', 1, '2020-08-02 02:40:05', '2020-08-02 03:34:45'),
(3, 'fugit', 'Sunt sunt ut qui. Ex delectus ut occaecati. Incidunt nihil tempore explicabo at adipisci ut aspernatur.', '2289-8989', 1, '2020-08-02 02:40:05', '2020-08-02 03:44:56'),
(4, 'commodi', 'Eligendi amet sint exercitationem veniam repellendus rerum. In dolor ducimus sequi ut amet. Sapiente esse dolor est est quisquam amet eum. Cupiditate esse earum quasi molestias et illo.', '2289-6666', 1, '2020-08-02 02:40:06', '2020-08-02 03:50:01'),
(5, 'aspernatur', 'Illum similique labore aut dolor quisquam nesciunt. Quia vero nihil natus incidunt placeat. Iusto nisi cum atque omnis nihil omnis repudiandae iusto.', '2289-5555', 1, '2020-08-02 02:40:06', '2020-08-02 05:17:27'),
(6, 'itca', 'santa tecla', '7777-9999', 0, '2020-08-02 02:40:07', '2020-08-02 04:49:36'),
(7, 'ipsa', 'Nobis itaque iure velit. Beatae et rerum aperiam itaque. Quibusdam laboriosam perspiciatis deleniti qui explicabo. Quod itaque maxime eius blanditiis quibusdam earum.', '2289-8989', 0, '2020-08-02 02:40:07', '2020-08-02 02:40:07'),
(8, 'microsoft', 'mexico', '7777-9999', 0, '2020-08-02 03:31:17', '2020-08-02 05:17:09'),
(9, 'a borrar', 'dede', '8888444', 1, '2020-08-02 03:53:40', '2020-08-02 03:54:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_01_201627_create_empresas_table', 1),
(5, '2020_08_01_201745_create_empleados_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_id_empresa_foreign` (`id_empresa`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_id_empresa_foreign` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
