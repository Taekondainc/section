-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2020 at 07:14 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `growguyana`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `author` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=238 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

DROP TABLE IF EXISTS `covid`;
CREATE TABLE IF NOT EXISTS `covid` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `assist` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `members` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nonemp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pensioner` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id`, `assist`, `name`, `aid`, `prefix`, `address`, `region`, `contact`, `members`, `disable`, `nonemp`, `parent`, `pensioner`, `employment`, `created_at`, `updated_at`) VALUES
(1, 'sss', 'Triston Simeon marlon Carter', 'ss', 'ssss', '34 john street lodge', 'Demerara mahaica', 'ssss', 'ss', 'sss', 'ss', 'ssss', 'sss', 'sss', '2020-06-29 05:17:51', '2020-06-29 05:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `events-uploads`
--

DROP TABLE IF EXISTS `events-uploads`;
CREATE TABLE IF NOT EXISTS `events-uploads` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `urltext` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `localbusinesses`
--

DROP TABLE IF EXISTS `localbusinesses`;
CREATE TABLE IF NOT EXISTS `localbusinesses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2020_06_07_032632_localbusinesses', 1),
(11, '2020_10_01_035818_rating', 10),
(4, '2020_06_16_191445_vacan-table', 3),
(5, '2020_06_29_010032_covid', 4),
(6, '2020_08_12_043926_blog', 5),
(7, '2020_08_26_222324_question', 6),
(8, '2020_08_28_055215_create_comments_table', 7),
(9, '2020_08_15_133259_create_events-uploads_table', 8),
(10, '2014_10_12_000000_create_users_table', 9),
(12, '2020_10_01_040726_trating', 11),
(13, '2020_10_03_141819_create_queries_table', 12),
(14, '2020_10_03_142112_create_subscribes_table', 13),
(15, '2020_10_11_031503_create_reviews_table', 14),
(16, '2020_10_13_043812_create_sitereviews_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('3d7b257fd7fc935c57754aa10667359f8396d270c0f315637cf7fdd86c2be3923f0b7e8dd13d7c3d', 2, 1, 'Personal Access Token', '[]', 1, '2020-09-20 05:46:41', '2020-09-20 05:46:41', '2021-09-20 01:46:41'),
('409abc068c1aeede47ea7e7bfbbb283af7a9c07930d5a63248c87c483fba401eca3f36e876922707', 2, 1, 'Personal Access Token', '[]', 1, '2020-09-11 08:01:06', '2020-09-11 08:01:06', '2021-09-11 04:01:06'),
('fc27ff35ba64522f3307e4c879f6865dd77ab61fee1d4b29f92b4f22233529905b616c1164868c27', 2, 1, 'Personal Access Token', '[]', 0, '2020-09-01 23:18:36', '2020-09-01 23:18:36', '2021-09-01 19:18:36'),
('5aeee574a411711b83cfbc2599e211b033476d1635f603b463498952e4a4285d9d383b697fd04b1e', 2, 1, 'Personal Access Token', '[]', 1, '2020-08-28 00:37:20', '2020-08-28 00:37:20', '2021-08-27 20:37:20'),
('04f773f5c8a2adcf401194ab81fbafbc988c6cb08c8e5fef13b6335c23aa72ad1b797709d930cb94', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-27 00:07:00', '2020-06-27 00:07:00', '2021-06-26 20:07:00'),
('24bffad0be3112dc6a7916a944bac9de2cc4e74a518ba5ec385b724ff2cffda928e28f5017645ec7', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-27 00:04:27', '2020-06-27 00:04:27', '2021-06-26 20:04:27'),
('3232639a28ef532737c9f4d88f0e748cab32a212ae3c6e9d9430af269bea5af7ad474f89884e5c73', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-26 04:55:43', '2020-06-26 04:55:43', '2021-06-26 00:55:43'),
('514f916a66437667ef8ffdb2b1c0cd49f898c0666b964ba58c8a84f6597881ec85cbffb3ab728ef5', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-23 21:11:42', '2020-06-23 21:11:42', '2021-06-23 17:11:42'),
('8c60e501cd1c47d722da636178f90e50deb2fd4e9d348abffc9f0b554f6e89d6886464088721f58b', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-23 21:11:22', '2020-06-23 21:11:22', '2021-06-23 17:11:22'),
('c16ac52a45d77c365f0c8b5a2188f3c23c8084d9179884a6df76fb788cc13cacafcf9fca63bed90b', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-23 21:04:50', '2020-06-23 21:04:50', '2021-06-23 17:04:50'),
('30decb90781314ff2bab715197a735bcb8396b9ad676b19dd778b5c8c7cef19c4768d23739357a0b', 2, 1, 'Personal Access Token', '[]', 0, '2020-06-23 21:04:49', '2020-06-23 21:04:49', '2021-06-23 17:04:49'),
('a7bbf75fe68b5f36fb4f03eafc3c65ada1c5959ae0caa07facdcff9630d9e9d413ada006b090b401', 2, 1, 'Personal Access Token', '[]', 0, '2020-06-23 21:04:46', '2020-06-23 21:04:46', '2021-06-23 17:04:46'),
('70406580e3e4b5c08dc6cade1ec7a72ecffdcce75eb7c1e65aff47fdcc518c7147120d2653df0e25', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-17 23:47:44', '2020-06-17 23:47:44', '2021-06-17 19:47:44'),
('3f37ab47c2962be63ea3ea6ee0f05de340120189a65a59f8c569c1c2c6548c3d1a681bb9b50e7109', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-17 23:47:05', '2020-06-17 23:47:05', '2021-06-17 19:47:05'),
('ef2b4925e2a691b33f79097654de2d3f669259f612c551e0564a73244ca205969548d2ca97b13a2c', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-17 23:46:33', '2020-06-17 23:46:33', '2021-06-17 19:46:33'),
('95bd2c23c4cca3ed4dc3fbeca89cb9f6a70ab94bff9e9c5e50b7938cb8e3e7154441a981ab0204a9', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-17 23:41:16', '2020-06-17 23:41:16', '2021-06-17 19:41:16'),
('75843778a42df4d0296defa93af8f9186302d84db594a835c205f425b144a9bb22a01c20a809dac4', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-17 23:39:32', '2020-06-17 23:39:32', '2021-06-17 19:39:32'),
('05f15f322e57295185e2c53b56bbf322b328cd4ac5eac7a1229b87506234188faf1e3e0dd5ea0128', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-17 23:38:37', '2020-06-17 23:38:37', '2021-06-17 19:38:37'),
('a2cca505ac9e8fa1d7b66344d8e617fb210eba5ba830e267277473bc87dd8ae2e7f2b30f28193e41', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-15 07:09:07', '2020-06-15 07:09:07', '2021-06-15 03:09:07'),
('8fefb7dce08af9e56f153535fbd2332b25d3fe9a3043bf7fe936846cb710f7aadd67281e02165090', 2, 1, 'Personal Access Token', '[]', 0, '2020-06-15 07:09:02', '2020-06-15 07:09:02', '2021-06-15 03:09:02'),
('30390d0ae212a9deb05e7e7096e40c0283ca07139b75e7142defc41b829713c68395750babda9293', 2, 1, 'Personal Access Token', '[]', 0, '2020-06-14 08:31:22', '2020-06-14 08:31:22', '2021-06-14 04:31:22'),
('c0082646c768bf3a294226d68485f7058fc42812711cee457ec1848879b205147a4ff566f6aac03e', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-11 20:14:40', '2020-06-11 20:14:40', '2021-06-11 16:14:40'),
('97b790975c9421f345baab860680ad0e54888f2f26b160d2fb8e9b3476465b7da247a04a69a28ea6', 2, 1, 'Personal Access Token', '[]', 0, '2020-06-02 23:27:45', '2020-06-02 23:27:45', '2021-06-02 19:27:45'),
('3122c4263e7ee7dc53017088f2b0c1c75b7ca377c9a617bf04bb52cbebe3e15cc9e439445788ff39', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 02:24:17', '2020-06-02 02:24:17', '2021-06-01 22:24:17'),
('6c679f91b7c559cc698cc0d90232f4d9c39c91c5603a6089be66c0ff7b94c02fc31eab7f75fa7f78', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:46:36', '2020-06-02 00:46:36', '2021-06-01 20:46:36'),
('f1b5eb5b520bc9c014ab01772c9989db04dc2263d9fea70436197a9c568f225f6e8b4280a433979c', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:35:03', '2020-06-02 00:35:03', '2021-06-01 20:35:03'),
('a56a5000752d902adb72dd1da74e262be3c8b339a046e409c5a30d9e202635a8b063a651cbcee6b9', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:32:18', '2020-06-02 00:32:18', '2021-06-01 20:32:18'),
('637b6a5436d1ab4b37a50350e0186a362aa5bcdd34c23e28152a60939d4675255eca8ce6c4e89553', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:32:10', '2020-06-02 00:32:10', '2021-06-01 20:32:10'),
('aff5dffb09854e11efa1d7943dffd18f147121ab9a1eee5e7e72b24b7710958500ec6c7e57d678ce', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:31:11', '2020-06-02 00:31:11', '2021-06-01 20:31:11'),
('654b0fc928180e96f09070101984ec21e79a7724afa71a119851c62664fbb64419bffdc74d7d48c6', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:31:02', '2020-06-02 00:31:02', '2021-06-01 20:31:02'),
('8bcbb601438107cccc910d9651e6f28959aa094004731905d2e4571ace4dd82871bfd8df4a640051', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:29:42', '2020-06-02 00:29:42', '2021-06-01 20:29:42'),
('e208326415dc6ffa0106630244d50bbfce5d5f9c8bbf8018bfc1e78c6c7de7a778d1f4e49e668643', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:25:07', '2020-06-02 00:25:07', '2021-06-01 20:25:07'),
('d45ebb54bf38e7799fba8ac24f97d11386df16016b140d183cadacc2054a1a644b272a184a484e6f', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:23:10', '2020-06-02 00:23:10', '2021-06-01 20:23:10'),
('d03fa704d2e34e32b1e50784dd94db80e798e8025e53a5343b3be4cac3e1f10596dd87a01d965784', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:22:20', '2020-06-02 00:22:20', '2021-06-01 20:22:20'),
('f963c7becba0933e1f4e6a5e83e44bb19e0ddf400c6046a578d1ac4879f7664f57faa4e8feba3076', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:21:56', '2020-06-02 00:21:56', '2021-06-01 20:21:56'),
('49de21d4ce32e0540e6b1c36da7d4203ef79c07d29c19b26a0a8d087c02b542cd64e57d68117abed', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:21:42', '2020-06-02 00:21:42', '2021-06-01 20:21:42'),
('17741e6481f7778c328320f97bc5dc2832fb0e77ded7f5a039f0413b6f606a85c1d7e6f94b94ee25', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:20:17', '2020-06-02 00:20:17', '2021-06-01 20:20:17'),
('0c5b33fc469c682697a8a85f4f3ae339e10001ba063808e05b4c11bc97234844b9ad0c5c25d397d6', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:17:09', '2020-06-02 00:17:09', '2021-06-01 20:17:09'),
('ad13156ccd1085b4244e7d65257deb17bd2c521eb8d366b96c5b4f09bf4e8a09ebbbc503f712cce6', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:16:16', '2020-06-02 00:16:16', '2021-06-01 20:16:16'),
('18d696259f8315a30bb93896612004a388ba9ccbc6235413977088b2e7edfc1a94a41ffd83fe8b30', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:14:51', '2020-06-02 00:14:51', '2021-06-01 20:14:51'),
('6951957f04868709c0fbf0ffee1e6218b2f78fc0fb2c1b2fd55991f79982c7ffaf193bdf7c92436c', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-02 00:12:46', '2020-06-02 00:12:46', '2021-06-01 20:12:46'),
('e83505800883cdbd311d55bea93fe32b07db4843ee29c5df23652406fcf111a1059720938153d40c', 2, 1, 'Personal Access Token', '[]', 1, '2020-06-01 03:30:36', '2020-06-01 03:30:36', '2021-05-31 23:30:36'),
('a2a00f0360fc79dfacffaf8f4fe5261891d852e657672aa0a20e705b522f6ce0a8ef76743258a309', 2, 1, 'Personal Access Token', '[]', 0, '2020-06-01 02:09:28', '2020-06-01 02:09:28', '2021-05-31 22:09:28'),
('1dfdc4108b44e07a6f0832293c271060fd8459f4006d83ceb49be399b50be942d9f89bed663ea4e3', 2, 1, 'Personal Access Token', '[]', 0, '2020-06-01 02:05:52', '2020-06-01 02:05:52', '2021-05-31 22:05:52'),
('6153bc2266699b13302519909ec27662c624ab74893d5717e6114dd514e62c3d1de06527eff3f4d2', 2, 1, 'Personal Access Token', '[]', 0, '2020-10-01 03:01:51', '2020-10-01 03:01:51', '2021-09-30 23:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'fj8f481uL9B0O13a6sHaUbqzlLSWmnWPAjBaaLC2', NULL, 'http://localhost', 1, 0, 0, '2020-05-30 18:08:00', '2020-05-30 18:08:00'),
(2, NULL, 'Laravel Password Grant Client', '6vilaS8GHtwS2OdglgDPdsyNvFRLOk71whLDfLIE', 'users', 'http://localhost', 0, 1, 0, '2020-05-30 18:08:00', '2020-05-30 18:08:00'),
(3, NULL, 'Laravel Personal Access Client', 'lAIYAWTNXYyyKxhBouMmMbHInUarQ5zGsvuyXQba', NULL, 'http://localhost', 1, 0, 0, '2020-10-01 03:32:56', '2020-10-01 03:32:56'),
(4, NULL, 'Laravel Password Grant Client', 'ikfEa49B4qmMT9AG5duQ8tZLPgpQ3fUW4rKMqZsS', 'users', 'http://localhost', 0, 1, 0, '2020-10-01 03:32:56', '2020-10-01 03:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-05-30 18:08:00', '2020-05-30 18:08:00'),
(2, 3, '2020-10-01 03:32:56', '2020-10-01 03:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
CREATE TABLE IF NOT EXISTS `queries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `uid`, `sum`, `total`, `created_at`, `updated_at`) VALUES
(17, '44', '3', '4.171875', '2020-10-01 08:36:27', '2020-10-01 11:21:29'),
(13, '52', '3', '3.6666666666667', '2020-10-01 08:36:19', '2020-10-01 11:20:43'),
(12, '51', '5', '3.0357142857143', '2020-10-01 08:30:30', '2020-10-02 05:02:30'),
(10, '51', '3', '3.0357142857143', '2020-10-01 08:28:27', '2020-10-02 05:02:30'),
(9, '51', '5', '3.0357142857143', '2020-10-01 08:28:01', '2020-10-02 05:02:30'),
(16, '44', '3', '4.171875', '2020-10-01 08:36:26', '2020-10-01 11:21:29'),
(15, '43', '5', '3.25', '2020-10-01 08:36:22', '2020-10-01 11:20:04'),
(14, '53', '1', '2.4705882352941', '2020-10-01 08:36:20', '2020-10-09 02:07:54'),
(11, '51', '3', '3.0357142857143', '2020-10-01 08:30:23', '2020-10-02 05:02:30'),
(18, '44', '5', '4.171875', '2020-10-01 08:36:28', '2020-10-01 11:21:29'),
(29, '44', '3.125', '4.171875', '2020-10-01 11:20:14', '2020-10-01 11:21:29'),
(20, '44', '1', '4.171875', '2020-10-01 08:36:33', '2020-10-01 11:21:29'),
(19, '44', '2', '4.171875', '2020-10-01 08:36:30', '2020-10-01 11:21:29'),
(21, '44', '5', '4.171875', '2020-10-01 08:36:35', '2020-10-01 11:21:29'),
(28, '44', '4', '4.171875', '2020-10-01 11:20:12', '2020-10-01 11:21:29'),
(22, '53', '4', '2.4705882352941', '2020-10-01 11:19:44', '2020-10-09 02:07:54'),
(23, '53', '5', '2.4705882352941', '2020-10-01 11:19:50', '2020-10-09 02:07:54'),
(41, '53', '1', '2.4705882352941', '2020-10-01 11:20:51', '2020-10-09 02:07:54'),
(24, '43', '5', '3.25', '2020-10-01 11:19:58', '2020-10-01 11:20:04'),
(25, '43', '2', '3.25', '2020-10-01 11:20:00', '2020-10-01 11:20:04'),
(26, '43', '1', '3.25', '2020-10-01 11:20:04', '2020-10-01 11:20:04'),
(27, '44', '2', '4.171875', '2020-10-01 11:20:07', '2020-10-01 11:21:29'),
(30, '44', '5', '4.171875', '2020-10-01 11:20:15', '2020-10-01 11:21:29'),
(31, '44', '5', '4.171875', '2020-10-01 11:20:16', '2020-10-01 11:21:29'),
(33, '44', '5', '4.171875', '2020-10-01 11:20:22', '2020-10-01 11:21:29'),
(32, '44', '5', '4.171875', '2020-10-01 11:20:19', '2020-10-01 11:21:29'),
(37, '44', '4', '4.171875', '2020-10-01 11:20:33', '2020-10-01 11:21:29'),
(34, '44', '5', '4.171875', '2020-10-01 11:20:26', '2020-10-01 11:21:29'),
(35, '44', '4', '4.171875', '2020-10-01 11:20:29', '2020-10-01 11:21:29'),
(36, '44', '4', '4.171875', '2020-10-01 11:20:31', '2020-10-01 11:21:29'),
(56, '44', '5', '4.171875', '2020-10-01 11:21:27', '2020-10-01 11:21:29'),
(38, '52', '4', '3.6666666666667', '2020-10-01 11:20:41', '2020-10-01 11:20:43'),
(39, '52', '4', '3.6666666666667', '2020-10-01 11:20:43', '2020-10-01 11:20:43'),
(40, '53', '4', '2.4705882352941', '2020-10-01 11:20:48', '2020-10-09 02:07:54'),
(42, '53', '2', '2.4705882352941', '2020-10-01 11:20:53', '2020-10-09 02:07:54'),
(45, '53', '2', '2.4705882352941', '2020-10-01 11:20:56', '2020-10-09 02:07:54'),
(43, '53', '2', '2.4705882352941', '2020-10-01 11:20:55', '2020-10-09 02:07:54'),
(44, '53', '2', '2.4705882352941', '2020-10-01 11:20:55', '2020-10-09 02:07:54'),
(47, '53', '2', '2.4705882352941', '2020-10-01 11:20:57', '2020-10-09 02:07:54'),
(46, '53', '2', '2.4705882352941', '2020-10-01 11:20:56', '2020-10-09 02:07:54'),
(53, '44', '5', '4.171875', '2020-10-01 11:21:26', '2020-10-01 11:21:29'),
(48, '53', '2', '2.4705882352941', '2020-10-01 11:20:57', '2020-10-09 02:07:54'),
(49, '53', '2', '2.4705882352941', '2020-10-01 11:20:58', '2020-10-09 02:07:54'),
(50, '53', '2', '2.4705882352941', '2020-10-01 11:20:58', '2020-10-09 02:07:54'),
(51, '53', '2', '2.4705882352941', '2020-10-01 11:20:58', '2020-10-09 02:07:54'),
(52, '53', '2', '2.4705882352941', '2020-10-01 11:20:59', '2020-10-09 02:07:54'),
(54, '44', '5', '4.171875', '2020-10-01 11:21:26', '2020-10-01 11:21:29'),
(55, '44', '5', '4.171875', '2020-10-01 11:21:27', '2020-10-01 11:21:29'),
(61, '46', '1', '2', '2020-10-01 11:21:46', '2020-10-01 11:21:49'),
(60, '48', '5', '3.5', '2020-10-01 11:21:44', '2020-10-01 11:21:53'),
(57, '44', '5', '4.171875', '2020-10-01 11:21:28', '2020-10-01 11:21:29'),
(58, '44', '5', '4.171875', '2020-10-01 11:21:28', '2020-10-01 11:21:29'),
(59, '44', '5', '4.171875', '2020-10-01 11:21:29', '2020-10-01 11:21:29'),
(62, '46', '3', '2', '2020-10-01 11:21:49', '2020-10-01 11:21:49'),
(63, '48', '2', '3.5', '2020-10-01 11:21:53', '2020-10-01 11:21:53'),
(64, '47', '5', '3.5', '2020-10-01 11:32:32', '2020-10-01 11:32:33'),
(65, '47', '2', '3.5', '2020-10-01 11:32:33', '2020-10-01 11:32:33'),
(66, '51', '3', '3.0357142857143', '2020-10-02 04:39:03', '2020-10-02 05:02:30'),
(68, '51', '1', '3.0357142857143', '2020-10-02 04:42:31', '2020-10-02 05:02:30'),
(67, '51', '5', '3.0357142857143', '2020-10-02 04:39:11', '2020-10-02 05:02:30'),
(70, '51', '5', '3.0357142857143', '2020-10-02 04:42:35', '2020-10-02 05:02:30'),
(69, '51', '1', '3.0357142857143', '2020-10-02 04:42:33', '2020-10-02 05:02:30'),
(72, '51', '4', '3.0357142857143', '2020-10-02 04:42:40', '2020-10-02 05:02:30'),
(71, '51', '2', '3.0357142857143', '2020-10-02 04:42:37', '2020-10-02 05:02:30'),
(78, '51', '5', '3.0357142857143', '2020-10-02 04:42:52', '2020-10-02 05:02:30'),
(73, '51', '4', '3.0357142857143', '2020-10-02 04:42:41', '2020-10-02 05:02:30'),
(74, '51', '4', '3.0357142857143', '2020-10-02 04:42:42', '2020-10-02 05:02:30'),
(75, '51', '5', '3.0357142857143', '2020-10-02 04:42:45', '2020-10-02 05:02:30'),
(76, '51', '5', '3.0357142857143', '2020-10-02 04:42:46', '2020-10-02 05:02:30'),
(77, '51', '5', '3.0357142857143', '2020-10-02 04:42:47', '2020-10-02 05:02:30'),
(82, '51', '1', '3.0357142857143', '2020-10-02 04:43:00', '2020-10-02 05:02:30'),
(79, '51', '2', '3.0357142857143', '2020-10-02 04:42:56', '2020-10-02 05:02:30'),
(80, '51', '1', '3.0357142857143', '2020-10-02 04:42:59', '2020-10-02 05:02:30'),
(81, '51', '1', '3.0357142857143', '2020-10-02 04:42:59', '2020-10-02 05:02:30'),
(87, '51', '1', '3.0357142857143', '2020-10-02 04:43:02', '2020-10-02 05:02:30'),
(83, '51', '1', '3.0357142857143', '2020-10-02 04:43:00', '2020-10-02 05:02:30'),
(84, '51', '1', '3.0357142857143', '2020-10-02 04:43:01', '2020-10-02 05:02:30'),
(85, '51', '1', '3.0357142857143', '2020-10-02 04:43:01', '2020-10-02 05:02:30'),
(86, '51', '1', '3.0357142857143', '2020-10-02 04:43:01', '2020-10-02 05:02:30'),
(88, '51', '5', '3.0357142857143', '2020-10-02 05:02:27', '2020-10-02 05:02:30'),
(89, '51', '5', '3.0357142857143', '2020-10-02 05:02:30', '2020-10-02 05:02:30'),
(90, '112', '5', '4', '2020-10-02 07:36:18', '2020-10-03 08:33:12'),
(91, '112', '3', '4', '2020-10-02 07:36:21', '2020-10-03 08:33:12'),
(92, '49', '1', '2.5', '2020-10-02 14:44:30', '2020-10-02 14:44:40'),
(93, '45', '3', '2', '2020-10-02 14:44:35', '2020-10-02 14:44:36'),
(94, '45', '1', '2', '2020-10-02 14:44:36', '2020-10-02 14:44:36'),
(95, '49', '4', '2.5', '2020-10-02 14:44:40', '2020-10-02 14:44:40'),
(96, '112', '4', '4', '2020-10-03 08:33:12', '2020-10-03 08:33:12'),
(97, '53', '5', '2.4705882352941', '2020-10-09 02:07:54', '2020-10-09 02:07:54'),
(98, '121', '5', '3.3181818181818', '2020-10-13 20:35:48', '2020-10-13 20:36:20'),
(99, '121', '3', '3.3181818181818', '2020-10-13 20:36:01', '2020-10-13 20:36:20'),
(100, '121', '1', '3.3181818181818', '2020-10-13 20:36:04', '2020-10-13 20:36:20'),
(101, '121', '5', '3.3181818181818', '2020-10-13 20:36:05', '2020-10-13 20:36:20'),
(102, '121', '2', '3.3181818181818', '2020-10-13 20:36:09', '2020-10-13 20:36:20'),
(103, '121', '5', '3.3181818181818', '2020-10-13 20:36:11', '2020-10-13 20:36:20'),
(104, '121', '3.5', '3.3181818181818', '2020-10-13 20:36:13', '2020-10-13 20:36:20'),
(105, '121', '1', '3.3181818181818', '2020-10-13 20:36:14', '2020-10-13 20:36:20'),
(106, '121', '1', '3.3181818181818', '2020-10-13 20:36:16', '2020-10-13 20:36:20'),
(108, '121', '5', '3.3181818181818', '2020-10-13 20:36:20', '2020-10-13 20:36:20'),
(107, '121', '5', '3.3181818181818', '2020-10-13 20:36:17', '2020-10-13 20:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sitereviews`
--

DROP TABLE IF EXISTS `sitereviews`;
CREATE TABLE IF NOT EXISTS `sitereviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitereviews`
--

INSERT INTO `sitereviews` (`id`, `name`, `description`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Triston Simeon marlon Carter', 'hhhhhhhhhhddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'taekonda18@gmail.com', '2020-10-13 11:58:19', '2020-10-13 11:58:19'),
(2, 'gggg', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'taekonda18@gmail.com', '2020-10-13 12:01:10', '2020-10-13 12:01:10'),
(3, 'Triston Simeon marlon Carter', 'ioiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'ctriston34@gmail.com', '2020-10-13 12:07:24', '2020-10-13 12:07:24'),
(4, 'Triston Simeon marlon Carter', 'name: this.name,\n                    description: this.description,\n                    email: this.email name: this.name,\n                    description: this.description,\n                    email: this.email name: this.name,\n                    description: this.description,\n                    email: this.email name: this.name,\n                    description: this.description,\n                    email: this.email name: this.name,\n                    description: this.description,\n                    email: this.email name: this.name,\n                    description: this.description,\n                    email: this.email name: this.name,\n                    description: this.description,\n                    email: this.email name: t', 'taekonda18@gmail.com', '2020-10-13 12:13:55', '2020-10-13 12:13:55'),
(5, 'Triston Simeon marlon Carter', ',kjhjgfgjklkhjghhgjkhjghfghkjllkghjkkljkhghfgdgfghgfdfgfhgfgdgfhjhgjkjjhjghkj.kjhghkkjkhjghjhkjhjghklkhjgh', 'taekonda18@gmail.com', '2020-10-13 12:15:18', '2020-10-13 12:15:18'),
(6, 'Triston Simeon marlon Carter', 'zxdfzfcccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'ctriston34@gmail.com', '2020-10-13 12:19:28', '2020-10-13 12:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

DROP TABLE IF EXISTS `subscribes`;
CREATE TABLE IF NOT EXISTS `subscribes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'tristoncarter34@yahoo.com', '2020-10-03 19:36:44', '2020-10-03 19:36:44'),
(2, 'ctriston34@gmail.com', '2020-10-03 19:36:44', '2020-10-03 19:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `trating`
--

DROP TABLE IF EXISTS `trating`;
CREATE TABLE IF NOT EXISTS `trating` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trating`
--

INSERT INTO `trating` (`id`, `uid`, `total`, `created_at`, `updated_at`) VALUES
(1, '51', '3.0357142857143', '2020-10-01 08:28:01', '2020-10-02 05:02:30'),
(2, '52', '3.6666666666667', '2020-10-01 08:36:19', '2020-10-01 11:20:43'),
(3, '53', '2.4705882352941', '2020-10-01 08:36:20', '2020-10-09 02:07:54'),
(4, '43', '3.25', '2020-10-01 08:36:22', '2020-10-01 11:20:04'),
(5, '44', '4.171875', '2020-10-01 08:36:26', '2020-10-01 11:21:29'),
(6, '48', '3.5', '2020-10-01 11:21:44', '2020-10-01 11:21:53'),
(7, '46', '2', '2020-10-01 11:21:46', '2020-10-01 11:21:49'),
(8, '47', '3.5', '2020-10-01 11:32:32', '2020-10-01 11:32:33'),
(9, '112', '4', '2020-10-02 07:36:18', '2020-10-03 08:33:12'),
(10, '49', '2.5', '2020-10-02 14:44:30', '2020-10-02 14:44:40'),
(11, '45', '2', '2020-10-02 14:44:35', '2020-10-02 14:44:36'),
(12, '121', '3.3181818181818', '2020-10-13 20:35:48', '2020-10-13 20:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'ctri#$@gmail.com', '0000-00-00 00:00:00', '$2y$10$kkM16Au1WniXf0HLsCh13uxF2PT6brQ4odBKaXwhnKSj2jcE8POh6', 'NULL', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vacan-table`
--

DROP TABLE IF EXISTS `vacan-table`;
CREATE TABLE IF NOT EXISTS `vacan-table` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `company` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobdesc` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
