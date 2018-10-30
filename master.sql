-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2018 a las 21:35:07
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `master_scit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_date` date DEFAULT NULL,
  `arrived_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantily` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `project_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Categoría A1', 'Area superior de sistemas de redes', 1, NULL, '2018-10-18 03:25:58', '2018-10-18 03:25:58'),
(2, 'Categoría A2', 'Area media de sistemas de redes', 1, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59'),
(3, 'Categoría B1', 'Area superior de centro de datos', 2, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59'),
(4, 'Categoría B2', 'Area media de centro de datos', 2, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59'),
(5, 'Categoría A2', 'Area media de sistemas de redes', 3, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59'),
(6, 'Categoría B1', 'Area superior de centro de datos', 4, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Demo Event-1', '2017-09-11', '2017-09-12', '2018-09-22 03:54:10', '2018-09-22 03:54:10'),
(2, 'Demo Event-2', '2017-09-11', '2017-09-13', '2018-09-22 03:54:10', '2018-09-22 03:54:10'),
(3, 'Demo Event-3', '2017-09-14', '2017-09-14', '2018-09-22 03:54:10', '2018-09-22 03:54:10'),
(4, 'Demo Event-3', '2017-09-17', '2017-09-17', '2018-09-22 03:54:10', '2018-09-22 03:54:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidents`
--

CREATE TABLE `incidents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `severity` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `project_id` int(10) UNSIGNED DEFAULT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `support_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `incidents`
--

INSERT INTO `incidents` (`id`, `title`, `description`, `severity`, `organization`, `active`, `category_id`, `project_id`, `level_id`, `client_id`, `support_id`, `created_at`, `updated_at`) VALUES
(1, 'incidencia en sala de sistemas administrativo', 'Hubo un desperfecto de cableado de red en las oficinas .', 'N', 'administracion.', 1, 2, 1, 1, 2, 3, '2018-09-22 03:32:05', '2018-09-22 03:32:05'),
(2, 'incidencia en sala de datacenter', 'Hubo un desperfecto en unidades de disco .', 'A', 'centro de datos.', 1, 3, 1, 1, 2, 4, '2018-09-22 03:32:05', '2018-09-22 03:32:05'),
(3, 'incidencia en sala de marketing', 'Hubo un desperfecto con la terminal M12 .', 'M', 'marketing.', 1, 3, 1, 1, 2, 5, '2018-09-22 03:32:05', '2018-09-25 03:32:05'),
(4, 'incidencia en sala de servidores', 'Hubo un desperfecto en uno de los cluster .', 'A', 'centro de datos.', 1, 1, 1, 1, 2, 4, '2018-09-22 03:32:05', '2018-10-22 03:32:05'),
(5, 'incidencia en sala de atencion al cliente', 'Hubo un desperfecto con la terminal C45 .', 'N', 'atencion al cliente.', 1, 2, 1, 1, 2, 3, '2018-10-23 03:32:05', '2018-10-23 03:35:05'),
(6, 'incidencia en sala de copiado', 'Hubo un desperfecto con las impresoras Brother y Hp .', 'N', 'centro de copiado.', 1, 5, 1, 1, 2, 3, '2018-10-25 03:32:05', '2018-10-26 03:32:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `levels`
--

INSERT INTO `levels` (`id`, `name`, `project_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Atención  teléfonica', 1, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59'),
(2, 'Envío de personal técnico', 1, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59'),
(3, 'Mesa de ayuda de entrada', 2, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59'),
(4, 'Consulta especializada por ingeniero', 2, NULL, '2018-10-18 03:25:59', '2018-10-18 03:25:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `incident_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `incident_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'help test', '2018-10-18 17:49:32', '2018-10-18 17:49:32');

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
(165, '2018_09_11_100010_create_projects_table', 1),
(166, '2018_09_11_100012_create_users_table', 1),
(167, '2018_09_11_100013_create_password_resets_table', 1),
(168, '2018_09_11_163253_create_categories_table', 1),
(169, '2018_09_11_163311_create_levels_table', 1),
(170, '2018_09_11_163329_create_incidents_table', 1),
(171, '2018_09_11_164718_create_project_user_table', 1),
(172, '2018_09_11_165720_create_messages_table', 1),
(173, '2018_09_12_005220_create_products_table', 1),
(174, '2018_09_12_151409_create_product_images_table', 1),
(175, '2018_09_21_235913_create_events_table', 1),
(176, '2018_10_02_124816_create_carts_table', 1),
(177, '2018_10_02_131829_create_cart_details_table', 1);

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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8_unicode_ci,
  `price` double(8,2) NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `long_description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'ubuntu server', 'ultima version del sistema operativo', 'puesta a punto del servicio funcionando y soporte tecnico actualizado', 5.70, NULL, '2018-09-22 03:32:05', '2018-09-26 11:57:08'),
(2, 'windows server 2012', 'sistema operativo de microsof', 'funciones complejas y configuraciones de administrador', 300.00, NULL, '2018-09-22 03:32:05', '2018-09-26 11:58:18'),
(3, 'Servidor Nas', 'Servidor Nas Synology Ds218 Video 4k Garantia Oficial', 'DS218 es un NAS de 2 bahías con transcodificacion de video 4K , posee avanzadas hogares y empresas en crecimiento y de ese modo gestionar, proteger y compartir datos eficazmente. Equipado con aplicaciones de oficina integrales, DS218 eleva la eficiencia de trabajo, mientras que asegura los datos con soluciones completas de copia de seguridad', 400.00, NULL, '2018-09-22 03:32:05', '2018-09-26 12:01:19'),
(4, 'Dual Band Router Print Server ', 'Dual Band Router Print Server Usb Tenda Ac15 5.8ghz Gigalan', 'El AC15 es un router WiFi Gigabit de doble banda inteligente AC1900 diseñado especialmente para cubrir las necesidades de los hogares inteligentes. Gracias a una velocidad de transmisión que alcanza los 1900 Mbps, tecnología Beamforming+, amplificadores de alta potencia incorporados y antenas externas, podrá disfrutar de juegos en línea sin retardos y transmisión de vídeo sin interrupciones en cualquier momento y en cualquier lugar. ', 10.00, NULL, '2018-09-22 03:32:05', '2018-09-26 12:04:27'),
(5, 'Libre Office', 'Libre Office 6.1.0', 'Instalamos la suite de Office Gratuita: Reemplaza a Word, Excel, Powerpoint y Publisher, tanto para Windows como Linux y Android, Compatible con todas las versiones!!\r\n\r\nCompatible con Windows ( XP en adelante ) - Linux - Mac OS - Android\r\n\r\nEquivalente a Microsoft® Office 2013, extensible fácilmente a través de sus poderoso mecanismo de extensiones. Es compatible todos los formatos de documento Microsoft Word, Excel, PowerPoint y Publisher.\r\n\r\nCuenta con actualizaciones periódicas. Lo asesoramos y capacitamos para que la implementación del cambio sea un éxito.', 5.00, NULL, '2018-09-22 03:32:05', '2018-09-26 12:11:15'),
(6, 'Eos dignissimos dolor quia', 'Eos id et ab dolores nihil consequatur voluptatem veritatis voluptas illo.', 'Temporibus quia in deleniti. Exercitationem consequatur molestiae itaque doloribus dolorem doloribus. Culpa sunt sed aliquid nemo et eum voluptas.', 61.51, NULL, '2018-09-22 03:32:05', '2018-09-22 03:32:05'),
(7, 'Sapiente repellendus veniam fugit', 'Iste sunt adipisci deserunt a alias porro quia.', 'Qui quaerat eos consectetur. Nam et ut illum rerum voluptatem nostrum commodi. Accusantium consequatur quia qui voluptatum maxime quo.', 28.68, NULL, '2018-09-22 03:32:05', '2018-09-22 03:32:05'),
(8, 'Hic earum est corporis', 'Ut voluptates aut ut et dolorem repudiandae esse voluptate.', 'Sit soluta a accusamus sit pariatur eius eum. Et cupiditate error pariatur sunt deleniti. Non vitae asperiores consequatur consectetur.', 75.78, NULL, '2018-09-22 03:32:05', '2018-09-22 03:32:05'),
(9, 'Eaque sit ipsam eum', 'Eos est voluptatem pariatur assumenda maiores architecto dignissimos quo et.', 'Id dolore reprehenderit eius eum qui. Corrupti id nulla fuga iure consectetur recusandae. Id qui aliquam et.', 58.18, NULL, '2018-09-22 03:32:05', '2018-09-22 03:32:05'),
(10, 'Autem quo unde', 'Quisquam praesentium distinctio et possimus ab repellat.', 'Nam quisquam sequi similique consequuntur ut hic suscipit. Non culpa excepturi qui incidunt molestias non. Sint similique aut et ipsum non.', 6.28, NULL, '2018-09-22 03:32:05', '2018-09-22 03:32:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `featured`, `product_id`, `created_at`, `updated_at`) VALUES
(2, '5baac07724bf21 (1).png', 0, 2, '2018-09-25 23:10:47', '2018-09-25 23:10:47'),
(3, '5baac0944a96a1057132.jpeg', 0, 2, '2018-09-25 23:11:16', '2018-09-25 23:11:16'),
(4, '5baac0a579f3bAA3N_1313102059013104227ejnx3FeVH.jpg', 0, 2, '2018-09-25 23:11:33', '2018-09-25 23:11:33'),
(5, '5baac0dfa009a1 (1).png', 0, 1, '2018-09-25 23:12:31', '2018-09-25 23:12:31'),
(6, '5baac1e8d0dc9category_wireless_banner.jpg', 0, 3, '2018-09-25 23:16:56', '2018-09-25 23:16:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `start`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Proyecto A', 'El proyecto A consiste en reparaciones en el sector   de redes.', NULL, NULL, '2018-10-18 03:25:58', '2018-10-18 03:25:58'),
(2, 'Proyecto B', 'El proyecto B consiste en mantenimiento en el sector del sistema  de alarmas.', NULL, NULL, '2018-10-18 03:25:58', '2018-10-18 03:25:58'),
(3, 'Proyecto C', 'El proyecto C consiste en trabajos de reaparaciones en el sector  de datacenter', NULL, NULL, '2018-10-18 03:25:58', '2018-10-18 03:25:58'),
(4, 'Proyecto D', 'El proyecto D consiste trabajos de  mantenimento de  software en area tecnica.', NULL, NULL, '2018-10-18 03:25:58', '2018-10-18 03:25:58'),
(5, 'Proyecto H', 'El proyecto D consiste trabajos de  reparaciones en oficina tecnica de diseño.', NULL, NULL, '2018-10-18 03:25:58', '2018-10-18 03:25:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_user`
--

CREATE TABLE `project_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `project_user`
--

INSERT INTO `project_user` (`id`, `project_id`, `user_id`, `level_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2018-10-18 03:26:00', '2018-10-18 03:26:00'),
(2, 1, 4, 2, '2018-10-18 03:26:00', '2018-10-18 03:26:00'),
(3, 2, 3, 1, '2018-10-18 03:26:00', '2018-10-18 03:26:00'),
(4, 2, 3, 1, '2018-10-18 03:26:00', '2018-10-18 03:26:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '2',
  `selected_project_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `phone`, `email`, `password`, `role`, `selected_project_id`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'marx', 'sanchez', '2-234-2345', 'admin@gmail.com', '$2y$10$HoUnUA7m9gqsUT4dJdCkMup8YrNQF.nzsxV1qZL3NuG2Giw9laolS', 0, 1, 'M6oFJDHVjw06pwV9f8MqXYQODwOHbK1zCff9bkhhvguUYjTgsLtqAfwZMfg0', NULL, '2018-09-22 03:32:04', '2018-09-27 13:04:48'),
(2, 'Lass', 'ilia', '2-234-2345', 'cliente@gmail.com', '$2y$10$a6F8ifUFRaXpWoF0LmHl3eQe0ZajdFHcsqMepaVxsN9nznrldtw22', 2, 1, 'VQJX7gdoE96jlOqqMC5ApUlUhWkBDMOZoy6u6UBu1t1RRECnb73GRcMcBuqq', NULL, '2018-09-22 03:32:04', '2018-09-27 11:45:47'),
(3, 'Soporte S1', 'cortazar', '2-234-2345', 'soporte1@gmail.com', '$2y$10$cImfUph6FRs9VC1DDv08neRAt.81i7idiFSfzJaXm/8s13mFgFnFi', 1, 1, 'E7YvBALOKjfbVPUXgKVFvWWmuCYALq8uqKvceByJBsw5BITzbxEwImaCZsIY', NULL, '2018-09-22 03:32:05', '2018-09-23 14:25:13'),
(4, 'Soporte S2', 'napoleon', '2-234-2345', 'soporte2@gmail.com', '$2y$10$CotNiMdCGToIckeW2k/GJ.JaQ5QpRp2XUFLoWyhjiXwpGnj95DN6C', 1, NULL, NULL, NULL, '2018-09-22 03:32:05', '2018-09-22 03:32:05'),
(5, 'Soporte S3', 'albor', '2-234-2345', 'soporte3@gmail.com', '$2y$10$CV9SBWepJrTp6PUWxa4vKeVgyI9EyjH2MLh9HkoWSziyTHuC9wKwe', 1, NULL, NULL, NULL, '2018-09-22 03:32:05', '2018-09-22 03:32:05'),
(6, 'Lart', NULL, NULL, 'cliente7@gmail.com', '$2y$10$a6F8ifUFRaXpWoF0LmHl3eQe0ZajdFHcsqMepaVxsN9nznrldtw22', 2, 1, 'VQJX7gdoE96jlOqqMC5ApUlUhWkBDMOZoy6u6UBu1t1RRECnb73GRcMcBuqq', NULL, '2018-09-22 03:32:04', '2018-09-27 11:45:47'),
(7, 'Bart', NULL, NULL, 'cliente8@gmail.com', '$2y$10$a6F8ifUFRaXpWoF0LmHl3eQe0ZajdFHcsqMepaVxsN9nznrldtw22', 2, 1, 'VQJX7gdoE96jlOqqMC5ApUlUhWkBDMOZoy6u6UBu1t1RRECnb73GRcMcBuqq', NULL, '2018-09-22 03:32:04', '2018-09-27 11:45:47'),
(8, 'Barto', NULL, NULL, 'cliente3@gmail.com', '$2y$10$a6F8ifUFRaXpWoF0LmHl3eQe0ZajdFHcsqMepaVxsN9nznrldtw22', 2, 1, 'VQJX7gdoE96jlOqqMC5ApUlUhWkBDMOZoy6u6UBu1t1RRECnb73GRcMcBuqq', NULL, '2018-09-22 03:32:04', '2018-09-27 11:45:47'),
(9, 'Larry', NULL, NULL, 'cliente1@gmail.com', '$2y$10$z5pNaFlOo9OI9ZDpy5jzJ.AFbmR0f.iHBLLjek86JeQgMYtJCLlFO', 2, NULL, NULL, NULL, '2018-10-25 18:38:21', '2018-10-25 18:38:21'),
(10, 'Curly', NULL, NULL, 'cliente2@gmail.com', '$2y$10$SHgJgow1YAlNwJnPH2jr6Oz9FFlKY0aNIXlsOz1zjSkW4.TdNWDjq', 2, NULL, NULL, NULL, '2018-10-25 18:39:10', '2018-10-25 18:39:10'),
(11, 'Moe', NULL, NULL, 'cliente6@gmail.com', '$2y$10$CcFZpGtddxttlc.fw4Xi..Yjn029cWzdytOSxvu6aRePj4rbtMRoO', 2, NULL, NULL, NULL, '2018-10-25 18:39:23', '2018-10-25 18:39:23'),
(12, 'Shemp ', NULL, NULL, 'soporte4@gmail.com', '$2y$10$vellQ8bGQP71zEceb9z3COqpvsMb3/y6y3UjC/Si1gTP41SIi/EWq', 2, NULL, NULL, NULL, '2018-10-25 18:40:54', '2018-10-25 18:40:54'),
(13, 'Joe ', NULL, NULL, 'cliente4@gmail.com', '$2y$10$X9afkFasjntcKlP31lsQ9ueF9oUnfLsvat95S1eNBME1BLu.0sthm', 2, NULL, NULL, NULL, '2018-10-25 18:42:19', '2018-10-25 18:42:19'),
(14, 'Monty', NULL, NULL, 'cliente5@gmail.com', '$2y$10$5SLyTPa5.Xt9nm.iRYItr.KBF48me55tbAz4MMO6aDXahky0NxgD.', 2, NULL, NULL, NULL, '2018-10-25 19:00:10', '2018-10-25 19:00:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_details_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_details_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_project_id_foreign` (`project_id`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incidents_category_id_foreign` (`category_id`),
  ADD KEY `incidents_project_id_foreign` (`project_id`),
  ADD KEY `incidents_level_id_foreign` (`level_id`),
  ADD KEY `incidents_client_id_foreign` (`client_id`),
  ADD KEY `incidents_support_id_foreign` (`support_id`);

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levels_project_id_foreign` (`project_id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_incident_id_foreign` (`incident_id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

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
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `project_user`
--
ALTER TABLE `project_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_user_project_id_foreign` (`project_id`),
  ADD KEY `project_user_user_id_foreign` (`user_id`),
  ADD KEY `project_user_level_id_foreign` (`level_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_selected_project_id_foreign` (`selected_project_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incidents`
--
ALTER TABLE `incidents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `project_user`
--
ALTER TABLE `project_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Filtros para la tabla `incidents`
--
ALTER TABLE `incidents`
  ADD CONSTRAINT `incidents_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `incidents_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `incidents_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `incidents_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `incidents_support_id_foreign` FOREIGN KEY (`support_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Filtros para la tabla `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_incident_id_foreign` FOREIGN KEY (`incident_id`) REFERENCES `incidents` (`id`),
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `project_user`
--
ALTER TABLE `project_user`
  ADD CONSTRAINT `project_user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `project_user_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `project_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_selected_project_id_foreign` FOREIGN KEY (`selected_project_id`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
