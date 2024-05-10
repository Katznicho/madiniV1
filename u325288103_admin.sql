-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2024 at 05:57 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u325288103_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `breezy_sessions`
--

CREATE TABLE `breezy_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authenticatable_type` varchar(255) NOT NULL,
  `authenticatable_id` bigint(20) UNSIGNED NOT NULL,
  `panel_id` varchar(255) DEFAULT NULL,
  `guard` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('023a049a0686fe4cd5668fd05f22021e85610042', 'i:1;', 1713238088),
('023a049a0686fe4cd5668fd05f22021e85610042:timer', 'i:1713238088;', 1713238088),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1713008823),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1713008823;', 1713008823),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:2;', 1713008901),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1713008901;', 1713008901),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1713241556),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1713241556;', 1713241556);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Sand', '\"building sand\"', 'category/01HVJF8J5Z090WE5K4P0PPSDQM.png', '2024-04-13 08:43:43', '2024-04-16 03:29:58'),
(2, 'Value Added', '\"Value Adding Products\"', 'category/01HVJGT4ZRXN47C53AHVQSP05R.png', '2024-04-16 03:57:03', '2024-04-16 03:57:03'),
(3, 'HardWare Safety', '\"HardWare Safety\"', 'category/01HVJGV5FN2CBX43EKVX2PG3CG.png', '2024-04-16 03:57:36', '2024-04-16 03:57:36'),
(4, 'Tools', '\"These are tools\"', 'category/01HVJGXN4EH506256TZMDBFHPY.png', '2024-04-16 03:58:58', '2024-04-16 03:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `cooperatives`
--

CREATE TABLE `cooperatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cooperatives`
--

INSERT INTO `cooperatives` (`id`, `name`, `description`, `logo`, `status`, `phone_number`, `email`, `website`, `account_number`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kawempe Boys', '\"kawempe lwera connect\"', 'cooperative/01HVBMCPB900N2XD64S96QPTNW.webp', 'active', '+256709730060', 'jprize70@gmail.com', NULL, 'MA00000004', 'n/a', 4, '2024-04-13 08:45:01', '2024-04-13 08:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cooperative_id` bigint(20) UNSIGNED NOT NULL,
  `oder_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_addresses`
--

INSERT INTO `delivery_addresses` (`id`, `user_id`, `name`, `phone_number`, `address`, `address_type`, `city`, `state`, `country`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 3, 'Muyenga', '0772722999', 'Muyenga', 'Offices', 'Kampala', NULL, 'Uganda', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_08_071244_create_categories_table', 1),
(5, '2024_04_08_071251_create_cooperatives_table', 1),
(6, '2024_04_08_071252_create_products_table', 1),
(7, '2024_04_08_071312_create_miners_table', 1),
(8, '2024_04_08_071854_create_delivery_addresses_table', 1),
(9, '2024_04_08_075121_add_themes_settings_to_users_table', 1),
(10, '2024_04_08_075643_create_breezy_sessions_table', 1),
(11, '2024_04_08_080451_create_personal_access_tokens_table', 1),
(12, '2024_04_12_071845_create_orders_table', 1),
(13, '2024_04_13_055526_create_order_items_table', 1),
(14, '2024_04_13_071850_create_deliveries_table', 1),
(15, '2024_04_14_071839_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `miners`
--

CREATE TABLE `miners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `cooperative_id` bigint(20) UNSIGNED NOT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `pin_recovery` varchar(255) DEFAULT NULL,
  `pin_reset` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cooperative_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_address_id` bigint(20) UNSIGNED NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `purchase_cost` varchar(255) NOT NULL,
  `delivery_cost` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cooperative_id`, `delivery_address_id`, `total_cost`, `purchase_cost`, `delivery_cost`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-13 09:01:40', '2024-04-13 09:01:40'),
(3, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-13 09:26:48', '2024-04-13 09:26:48'),
(4, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-13 13:16:48', '2024-04-13 13:16:48'),
(5, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-14 03:29:53', '2024-04-14 03:29:53'),
(6, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-14 12:38:16', '2024-04-14 12:38:16'),
(7, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-14 12:38:51', '2024-04-14 12:38:51'),
(8, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-14 12:41:23', '2024-04-14 12:41:23'),
(9, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-14 12:46:48', '2024-04-14 12:46:48'),
(10, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-14 13:33:28', '2024-04-14 13:33:28'),
(11, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-14 13:34:02', '2024-04-14 13:34:02'),
(12, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-14 14:05:01', '2024-04-14 14:05:01'),
(13, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-04-15 17:32:12', '2024-04-15 17:32:12'),
(14, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-05-05 11:09:50', '2024-05-05 11:09:50'),
(15, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-05-06 07:42:26', '2024-05-06 07:42:26'),
(16, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-05-06 15:16:26', '2024-05-06 15:16:26'),
(17, 3, 1, 1, '24000', '12000', '12000', '1', 'pending', '2024-05-06 18:12:17', '2024-05-06 18:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1', '12000', '2024-04-13 09:01:40', '2024-04-13 09:01:40'),
(2, 3, 1, '1', '12000', '2024-04-13 09:26:48', '2024-04-13 09:26:48'),
(3, 4, 1, '1', '12000', '2024-04-13 13:16:48', '2024-04-13 13:16:48'),
(4, 5, 1, '1', '12000', '2024-04-14 03:29:53', '2024-04-14 03:29:53'),
(5, 6, 1, '1', '12000', '2024-04-14 12:38:16', '2024-04-14 12:38:16'),
(6, 7, 1, '1', '12000', '2024-04-14 12:38:51', '2024-04-14 12:38:51'),
(7, 8, 1, '1', '12000', '2024-04-14 12:41:23', '2024-04-14 12:41:23'),
(8, 9, 1, '1', '12000', '2024-04-14 12:46:48', '2024-04-14 12:46:48'),
(9, 10, 1, '1', '12000', '2024-04-14 13:33:28', '2024-04-14 13:33:28'),
(10, 11, 1, '1', '12000', '2024-04-14 13:34:02', '2024-04-14 13:34:02'),
(11, 12, 1, '1', '12000', '2024-04-14 14:05:01', '2024-04-14 14:05:01'),
(12, 13, 1, '1', '12000', '2024-04-15 17:32:12', '2024-04-15 17:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `cooperative_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `category_id`, `cooperative_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lake Sand', '\"Discover the natural beauty and versatility of our locally sourced lake sand from Lwera Masaka. Meticulously crafted by nature, our lake sand boasts a fine texture and a rich composition of minerals, making it ideal for various applications. Whether you\'re enhancing your landscape, building a tranquil beachfront, or perfecting plastering projects, our premium lake sand delivers unparalleled quality and performance. Experience the difference with our carefully selected lake sand, a testament to the splendor of nature\'s craftsmanship.\"', 'product/01HVJFJ1TTM1ZAK978HZKZH7YE.png', '120000', 1, 1, 'active', '2024-04-15 23:28:49', '2024-04-16 03:35:09'),
(3, 'Nyanja sand', '\"Dive into the allure of Nyanja sand, sourced from the pristine shores of Lake Victoria. Our Nyanja sand offers a unique blend of fine grains and natural beauty, reflecting the picturesque landscapes surrounding the Nyanja. With its smooth texture and distinct character, our Nyanja sand is perfect for creating serene beaches, enhancing aquatic habitats, or adding a touch of elegance to your projects. Immerse yourself in the essence of Nyanja sand and let its enchanting qualities elevate your next endeavor.\"', 'product/01HVJFM3X1XFNVCDB4QYM04JEB.png', '150000', 1, 1, 'active', '2024-04-15 23:33:15', '2024-04-16 03:36:17'),
(4, 'Lwere Sand', '\"Discover the exceptional quality of Lwere sand, meticulously sourced from the renowned region of Lwera Masaka. Our Lwere sand embodies the essence of this unique locale, boasting a fine texture and a rich, earthy hue. Crafted by nature\'s own hand, this premium sand is perfect for a wide range of applications. Whether you\'re landscaping your garden, constructing durable concrete structures, or creating intricate artworks, our Lwere sand offers unparalleled versatility and reliability. Experience the difference with Lwere sand and elevate your projects with the natural beauty and strength of this exceptional material.\"', 'product/01HVJFNYAK6FK4940YTFTEYB25.png', '150000', 1, 1, 'active', '2024-04-15 23:34:34', '2024-04-16 03:37:16'),
(5, 'Spade', '\"A spade is a reliable safety tool commonly used in gardening and construction. Its sturdy blade and ergonomic handle make it ideal for digging and moving soil safely. Designed to withstand tough conditions, it reduces the risk of accidents by offering precise control and minimizing strain on the user\'s muscles. Whether in landscaping or construction, the spade is an essential safety companion for various tasks.\"', 'product/01HVJHQ7JQYPRPK332M4WGF2RM.png', '15000', 4, 1, 'active', '2024-04-16 04:12:56', '2024-04-16 04:12:56'),
(6, 'Wheelbarrow', '\"A wheelbarrow is a practical and indispensable safety tool frequently employed in construction, landscaping, and gardening tasks. With its simple yet effective design, it facilitates the transportation of heavy materials such as soil, gravel, and debris with minimal strain on the user. Featuring a sturdy frame, ergonomic handles, and a single wheel for stability, the wheelbarrow ensures safe and efficient movement of loads across various terrains\"', 'product/01HVJHSX8Y18DZRNVMYDNKHBER.png', '120000', 4, 1, 'active', '2024-04-16 04:14:24', '2024-04-16 04:14:24'),
(7, 'Axe', '\"An axe, a classic tool with a sharp blade and sturdy handle, serves as a versatile implement for various tasks, including chopping wood and clearing debris. Despite its seemingly basic design, the axe is an essential safety tool when used correctly. Its well-balanced construction and ergonomic handle allow for controlled swings and precise cutting motions, reducing the risk of accidents or injuries.\"', 'product/01HVJHW42FEKAD617F81WC07NP.png', '25000', 4, 1, 'active', '2024-04-16 04:15:36', '2024-04-16 04:15:36'),
(8, 'Safety Helmet', '\"A safety helmet is a vital piece of personal protective equipment (PPE) designed to safeguard the head against potential hazards in various work environments, such as construction sites, industrial settings, and outdoor activities. Constructed from durable materials like hard plastics or fiberglass, the helmet features a rigid outer shell that provides impact resistance, shielding the wearer from falling objects, bumps, or collisions. Inside, the helmet typically incorporates a suspension system comprising adjustable straps and padding, ensuring a secure and comfortable fit for the user.\"', 'product/01HVJHZ9HFR410SM828GAMCSX8.png', '5000', 3, 1, 'active', '2024-04-16 04:17:20', '2024-04-16 04:17:20'),
(9, 'Safety Boots', '\"Safety boots are essential protective footwear designed to shield the feet from workplace hazards and potential injuries in various industries, including construction, manufacturing, and agriculture. Crafted from durable materials such as leather, rubber, or synthetic compounds, these boots feature reinforced toe caps, often made of steel or composite materials, to protect against impacts and compression from heavy objects\"', 'product/01HVJJ1QT1KAEGB28SXHYN2069.png', '50000', 3, 1, 'active', '2024-04-16 04:18:40', '2024-04-16 04:18:40'),
(10, 'Gloves', '\"Gloves are fundamental safety accessories designed to protect hands from various hazards in workplaces such as construction sites, laboratories, and manufacturing facilities. Crafted from a range of materials including leather, rubber, and synthetic fibers, safety gloves offer different levels of protection depending on the task at hand. For instance, leather gloves provide durability and resistance against abrasions and punctures, ideal for heavy-duty tasks, while chemical-resistant gloves safeguard against exposure to hazardous substances\"', 'product/01HVJJ3P14RE43A3DMKQ1ZSW38.png', '25000', 3, 1, 'active', '2024-04-16 04:19:44', '2024-04-16 04:19:44'),
(11, 'Pavers', '\"Get ready to elevate your outdoor spaces with our top-quality paver, now available online at an amazing price! Designed for easy installation and long-lasting durability, our paver is the perfect choice for enhancing your patio, walkway, or driveway\"', 'product/01HVJJ7SMQ9CC4CQCV3W1NWC3J.png', '1200', 2, 1, 'active', '2024-04-16 04:21:59', '2024-04-16 04:21:59'),
(12, 'Hexa Paver', '\"Upgrade your outdoor aesthetic with our hexagonal paver, now available for purchase online! Engineered for both style and durability, our hexa paver brings a modern touch to any patio, walkway, or garden project\"', 'product/01HVJJB6G89G7CN1PDW4XQ0V81.png', '1500', 2, 1, 'active', '2024-04-16 04:23:50', '2024-04-16 04:23:50'),
(13, 'Square Paver', '\"Transform your outdoor space effortlessly with our square paver, now available for purchase online! Designed for durability and style, our square paver is the perfect solution for creating stunning patios, pathways, and more.\"', 'product/01HVJJD9CCZNVEEK7Y90CZ9CQ5.png', '1500', 2, 1, 'active', '2024-04-16 04:24:59', '2024-04-16 04:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2kGjEyMZOwAg3F4d9gluj2n2djHWwoYcHHnlevLl', NULL, '2.58.56.191', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWNTSzBGZGVQTXNkNHJOSU45cW5vMHh6RENST0VCakRueUc3MXdSUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715118620),
('34RBdnc8BiQa81aj3elsB00ggYD6BftuszGo2OA5', NULL, '159.65.52.141', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEhScWtOVU95VDBUQ2pybUdlMGVBaUN6cVhCajlhUWJMQjB2dW9UcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbS9wcm9kdWN0cy8zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715124911),
('bbeM6xPqBcuD3Xdx79U92avwSkbxTQ0bRHxzKHiZ', NULL, '66.249.70.192', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.118 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEQwZnl4TTZ5UklhS0JjSUhTT2syYjIzZVE4SmlYalRMOEF5ZldsaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RzLzEzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715106917),
('BUi7LfNizSgjnvxOQloJceAbi8QclLRLIQDDA8Th', NULL, '66.249.70.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.118 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmZrTWVpUmI2MU5NSTV0UTJBOXNLdXRwN2ZZTFdaUUZNUk1Cd1JoRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715079495),
('cO1zquZkgAkkhtLmu8dNizpdfKZULK0FTfPnaidS', NULL, '64.23.214.79', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEFVTXlWMVJ6R0swMm04Y3paSXRxMDBmdnVsSnNac3NsdThHeE5QNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbS9wcm9kdWN0Q2hlY2tvdXQ/Mz0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715138421),
('DzETvXgum5CdFlZcmxZkDnTITfqfjWt77uW68dAX', NULL, '41.84.196.234', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0pFbEl2R01FQldkUUozRlNHT3VUVTB4ZGN6OGtaa1FRa1gwV1NaYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RzLzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715081155),
('eWoEaASXDeoYpwLaYOuBBFGROjTGjDnE2FGFk63n', NULL, '41.210.145.134', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0xFREZ6c2Y5N2hmVmc1Q1BlT3RUbVZNMFVVRGZVRXlBTjJIWnRJQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715104354),
('GmnRyT24XPcOQjmvOFFtYnTiWFRUekD2GwNUKcm0', NULL, '134.209.203.77', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZTdvMUR2WmJaSlVlWVBmWGw4SGk5VVE0eHo3ZlpDVUxIdUxNNWNQMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715120850),
('hbJR6wofBg2GT3xWQ8x6EF08ufP7drYZn999qMtX', NULL, '66.249.70.192', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.118 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0VJZnU3QzRqTTZudWk2WVBBeFpXR0pyMmZTV1BPYUF4V2lwcXgzdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RDaGVja291dD81PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715108843),
('j4FgDqTkOquNBVo1tqpTsN6kwPXLTqzQzIq32qZM', NULL, '209.38.130.231', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWtOb3Nvdjl3OTJsb09rU1hITVZrTk9QRk1rYnh3T3k1aEV5V09XQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbS9wcm9kdWN0cy80Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715138160),
('JkViVXDBBzGsrn3z4onNSqIlBMrXo7EysBwOiSVZ', NULL, '102.36.221.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0JBTFB5V0tJOHExNUczeVVhQUF4UWNyWVZJbmdUOFhvTU96UWlNSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RDaGVja291dD8yPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715147731),
('K1ZcbtZgJh0NGuyiyfcJV3gpWxkzIvWnjSUmWo9d', NULL, '42.83.147.34', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko)Chrome/74.0.3729.169 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkkwV2hYajduSUM2eWVhZU92cGt3cFFBSXdCM3g0VXJ5cTZSYTduZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715089061),
('kHbZMicN5b6pGuTab3jUF1M2uo0pxymWZCA2sI5f', NULL, '2a02:4780:2c:3::5', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoibElaaTNpbnMwWkZMaWdtTnBRdFR6ZVRIVXBwNEdCYlVOZ3BUdHhqQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715130598),
('kO0bOULcDhe8kBmSgH7S4pKHzKkaxzPyXfdVYjYA', NULL, '2a02:4780:2c:3::5', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjJDWW9uTzFGQXZWNzZxTnZyZ2d4amI2YmxudnJ6ZGhqdmF5ZERjZSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNToiaHR0cHM6Ly9hZG1pbi5tYWRpbmlncm91cC5jb20uOjQ0My8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715130597),
('LjVzcpXvcIaXdPH01Rmw2ZsdRXu1imu1HUdfwdwB', NULL, '165.232.173.95', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDJ3VFQ4R0FqWjU0THlpZmozc3ZkSURHUVQ5MUdOZnVkckV2M0VseCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715120962),
('m0cBRKFBEe7HINgFWKalQkrzRQpgHx3eQ8wTc6PQ', NULL, '164.92.83.171', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.0; +https://openai.com/gptbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmFUUnc1a3FrVHN6TkRTUHR4dkE3REYzdnkxd0I2eUt6NlpaNDd6TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715120925),
('m67pOb8l2cgfGTL85TzXEmIg0eTdMvSJ9dx3K5vF', NULL, '66.249.70.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.118 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSk5LT1h2WUtGWHZlOHBhV3hQdWk2TXB0THhqZE02c1dwTktzQWtZNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RzLzUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715125023),
('MeneODJmFxkgPo9XzOheJunQdueHTwMpA28SoNbu', NULL, '66.249.70.2', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjdnb0xxZVNxOE5tUHdKZExrVURKbTViUFlycDZIRTl4RnRDdlFjNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715086446),
('mTQjlYtvNsVga3Wjih4dbVvbAsl5omb05liJxgv0', NULL, '66.249.70.192', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.118 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0t4NG9URUs0NXJFZXZoRFFTUDJYWTdoR2VEMlh2VHFyZTFjOHRQMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RzLzEzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715101144),
('N1ILd8Cl1tpU9Uw4JzA2qODXv1aLVufmXjDbzHMW', NULL, '51.222.253.14', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYU1kQkN6TWdDQVVHbTFJZktickxSSGk3akI0MXYzN0MzYVN0UTVlUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RzLzYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715078983),
('N282Jo75cQR1RxWFbKwKjI6JILkPiY1QNhYiVbjV', NULL, '2a02:4780:2c:3::5', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSnl3amhzSW0xb3RTQmVGdzZDQXVkV1hHcjJja0V3M2hSWGw2aGlSdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715144295),
('NAGNlQjjLHPUw0UtrIJzWSSmDTwiKI6yhGnNZ8YI', NULL, '43.153.93.68', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXlSVWVOTkUyU0VxRkV5V0ZnVFdNTlBxSGpBMkFOYUVrdmJqNzB4MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715095585),
('NMNpK5fVta0CIUNI7SMHxbltXULV3YmrNZw5YIgS', NULL, '2a02:4780:2c:3::5', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiZXV6ZzlrY29oZjBhbUJEdUloV2JhN1pTbXlQOHhnZnNQdkowR2hHaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715130597),
('QvMaXhgrwZHimlGxJzNj1P02sjUzuhoqz1IvN2vd', NULL, '142.93.179.75', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkpWSHIwNHU2VnRic3ZqUXhSeXdCVmN5M2dBVndoTVNhZUFtSTVwNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715122572),
('SOPxqqZF527Tb1o6NwdUiizq24Q7LlsXH18DzPhE', NULL, '143.198.211.47', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicU9XcFVRcG5mQ1lHYTJlNXMyS1l4RGo2YTRnQWZkYUlNQzl4MzZDMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715135782),
('TEaCPATO4wQfskZsMy5rOt8KfSl1o7SnxDKkceP5', NULL, '161.35.137.225', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTV0TGtwb3g2MGtIeFlqSmlrUERONVhwNG5DV1ZlQnNrNjFabTEzdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715109540),
('TN8S3RbJRTcWof3vosYIPlRDFxaGWOlHNfuq9MoS', NULL, '143.198.41.140', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibTBEMEpKcFJpSGxQYklwTjFlRElUMHhtUGVLSW9uUHpHcXE0TEloeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbS9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715137461),
('UaIgGx0U4UyItP7yeQxvYEg2zE4ubYrbav6c68Io', NULL, '66.249.70.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.118 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0FCMTZWNG1kV09ZRktGbTNJYXhEbE13dkpHVDRQZlAxR2o4WHhWVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715086447),
('UE6fn7FidLANDJtGD2ngvKMXpbKGpYRFBPpUxZrB', NULL, '43.159.128.172', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia1hXNm1LT1ZRNzVYalY4OFU5eVZQWlcyQTV0RHpiM2hWMnVsUUczNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715135628),
('uJxXWGZ77hJS0KQwRRYb3FWwQtB3zU7Rp0wVsahx', NULL, '165.232.163.49', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEphVjlWbk5HQlUyOHg1anoycmZOOEJ2angxZXk3emFQcXdMZXUwSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vd3d3Lm1hZGluaWdyb3VwLmNvbS9wcm9kdWN0Q2hlY2tvdXQ/ND0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715141591),
('VlACNuVrQ86r6w5iEfP07PFJljqpH0TGpZbWYRcg', NULL, '51.89.211.248', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlZRd291U3VDV3U1RHdmekowam9xc3dad1NDRExFT0ttMHNxQUtJeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715108767),
('vlnAS6jHixCkkfPMWXoA1aOjVn1rZfoufLRqgolf', NULL, '154.227.131.172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkRFREI3d1BzOUxvdEEyOFlieTVVOHB2MnhsTG1RbjREd3ZNdmNwWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RzLzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715136529),
('VNOjwm6EGBfet9xoRDytzZ14Ed7wnbe2IcJy9yg3', NULL, '65.154.226.169', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHhKNVVKUlNFVkdWU2tPbndLdHgwNm5LS0V1TUVybzVFWUVYQTVTRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715137541),
('WAu4gxLZtSlBmF07OdLzzPPxwYzqUViR6cCPHzpK', NULL, '102.36.221.142', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3htSHZua0lMY2Vnams0SmxqUHlsVHpPU0F2dTMzWkdLU3N0VTY0SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715147100),
('XyevrSOz4AKUgPYboJTnVpB37vma1qnOTuTUm1q0', NULL, '66.249.70.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.118 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkFTdVMzZUpLQjh6N09PMUdrbUw0cmdOY2xybkdqSGZ4ZTU2bFBDMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tL3Byb2R1Y3RzLzgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715119461),
('zzZ5hSyqGkvcDjF1iOTdsLEJo8CmLmj9G3mkA1HS', NULL, '35.92.20.232', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHE0Nk5BZHF3OWRyT205ckRYQzVLRFluc09wS0JhRDRxc3JPYzdlciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vbWFkaW5pZ3JvdXAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715076607);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `reference` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `order_tracking_id` varchar(255) DEFAULT NULL,
  `OrderNotificationType` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cooperative_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `amount`, `phone_number`, `payment_mode`, `payment_method`, `description`, `reference`, `status`, `order_tracking_id`, `OrderNotificationType`, `user_id`, `cooperative_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'debit', '24000', NULL, 'web', 'MTNUG', NULL, 'a85af14a-4370-4dcc-834e-a07a08acb276', 'Failed', '39af1960-da8a-4899-b799-dd5bd5592d51', NULL, 3, 1, 2, '2024-04-13 09:01:40', '2024-04-13 09:11:24'),
(2, 'debit', '24000', NULL, 'web', 'MTNUG', NULL, 'cc35702d-4864-42ef-8ca8-0ba6fcd9daa3', 'Failed', 'efd00d15-af41-4a86-bfb0-dd5bd9feda26', NULL, 3, 1, 3, '2024-04-13 09:26:48', '2024-04-13 09:30:59'),
(3, 'debit', '24000', NULL, 'web', NULL, NULL, 'f08ce55a-8780-4d82-b1b8-652e73422fb2', 'pending', NULL, NULL, 3, 1, 4, '2024-04-13 13:16:48', '2024-04-13 13:16:48'),
(4, 'debit', '24000', NULL, 'web', NULL, NULL, 'a9778df2-d113-4413-b6d0-7b78cbbc0076', 'pending', NULL, NULL, 3, 1, 5, '2024-04-14 03:29:53', '2024-04-14 03:29:53'),
(5, 'debit', '24000', NULL, 'web', NULL, NULL, 'e6dfd631-d24a-4dd1-a68a-c3cc99bda0d9', 'pending', NULL, NULL, 3, 1, 6, '2024-04-14 12:38:16', '2024-04-14 12:38:16'),
(6, 'debit', '24000', NULL, 'web', NULL, NULL, '2c08a384-784a-41b6-9434-1b88c21c6775', 'pending', NULL, NULL, 3, 1, 7, '2024-04-14 12:38:51', '2024-04-14 12:38:51'),
(7, 'debit', '24000', NULL, 'web', NULL, NULL, 'af7bdc20-d147-4ce3-a825-fb37e7cfdcb4', 'pending', NULL, NULL, 3, 1, 8, '2024-04-14 12:41:23', '2024-04-14 12:41:23'),
(8, 'debit', '24000', NULL, 'web', '', NULL, 'ab76e289-6e8f-41a4-9d4c-81b1788d8f2c', 'Failed', '3055db0c-183c-4b0c-9a20-dd5af18bea6c', NULL, 3, 1, 9, '2024-04-14 12:46:48', '2024-04-14 12:47:22'),
(9, 'debit', '24000', NULL, 'web', '', NULL, '1735ad32-6eba-4def-9785-d25d7b1e0e07', 'Failed', 'e22d630b-3ff9-4d77-86b8-dd5a3108cafc', NULL, 3, 1, 10, '2024-04-14 13:33:28', '2024-04-14 13:45:33'),
(10, 'debit', '24000', NULL, 'web', NULL, NULL, 'bdde1308-0039-4a12-b29a-2abaf92656f4', 'pending', NULL, NULL, 3, 1, 11, '2024-04-14 13:34:02', '2024-04-14 13:34:02'),
(11, 'debit', '24000', NULL, 'web', NULL, NULL, 'd98241b6-fcd4-4250-970e-798ccb21d204', 'pending', NULL, NULL, 3, 1, 12, '2024-04-14 14:05:01', '2024-04-14 14:05:01'),
(12, 'debit', '24000', NULL, 'web', '', NULL, 'ea4bd4a9-4340-4d7d-a51f-a3de6fb68ae8', 'Failed', '43c76611-d8c8-477f-bc58-dd595b95be05', NULL, 3, 1, 13, '2024-04-15 17:32:12', '2024-04-15 17:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `theme` varchar(255) DEFAULT 'default',
  `theme_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`, `theme`, `theme_color`) VALUES
(1, 'Wogute David Samuel', NULL, 'wdsamuel@gmail.com', NULL, '$2y$12$/GI5FAuHzgqxcj7o2Hv9sOA6d9OfCdntd64cEvCFuVxlbje69hsSC', 'admin', 'SccOdhQNtYZZYDGgC9YyskEqXkwLM3QWLOwXntFlh65wZJ1R6u2OIbNgxtlv', '2024-04-13 08:37:14', '2024-04-13 08:37:14', 'default', NULL),
(3, 'Betrand Mpora', '0772722999', 'wogutesamueldavid@gmail.com', NULL, '$2y$12$sy/R/x6UbhyKRDkRnBk81OJCT3EHL8TstEpJMvn46dfuXt.8Xyc86', 'user', 'P1nxQ57NIFhjvr0aYjW6gpQXsIjV1WxaFAZTMm6fRYjNUr16Uaby8Uoo39Bx', '2024-04-13 08:43:16', '2024-04-13 08:43:16', 'default', NULL),
(4, 'Kawempe Boys', NULL, 'jprize70@gmail.com', NULL, '$2y$12$WBYnvuUA49oQ8AErmB/GsOeziCy12P814/y.ytK7eDQdXuFgQvngi', 'cooperative', 'wcJnRKwe2mJ3FPY1heu8hkbvK0bJzXyeqrlIZnYTRKQgIUlpUHNZbJVED0ph', '2024-04-13 08:44:55', '2024-04-13 08:44:55', 'default', NULL),
(5, 'Katende Nicholas', NULL, 'katznicho@gmail.com', NULL, '$2y$12$e8BcIC9YAMOQDoM3nh/ae.T2RT8BHxHoUqW4TSeQAdv1xMdw/STTG', 'admin', 'SccOdhQNtYZZYDGgC9YyskEqXkwLM3QWLOwXntFlh65wZJ1R6u2OIbNgxtlv', '2024-04-13 08:37:14', '2024-04-13 08:37:14', 'default', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breezy_sessions`
--
ALTER TABLE `breezy_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `breezy_sessions_authenticatable_type_authenticatable_id_index` (`authenticatable_type`,`authenticatable_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cooperatives`
--
ALTER TABLE `cooperatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cooperatives_user_id_foreign` (`user_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveries_user_id_foreign` (`user_id`),
  ADD KEY `deliveries_cooperative_id_foreign` (`cooperative_id`),
  ADD KEY `deliveries_oder_id_foreign` (`oder_id`);

--
-- Indexes for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miners`
--
ALTER TABLE `miners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `miners_cooperative_id_foreign` (`cooperative_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_cooperative_id_foreign` (`cooperative_id`),
  ADD KEY `orders_delivery_address_id_foreign` (`delivery_address_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_cooperative_id_foreign` (`cooperative_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_cooperative_id_foreign` (`cooperative_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breezy_sessions`
--
ALTER TABLE `breezy_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cooperatives`
--
ALTER TABLE `cooperatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `miners`
--
ALTER TABLE `miners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cooperatives`
--
ALTER TABLE `cooperatives`
  ADD CONSTRAINT `cooperatives_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_cooperative_id_foreign` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperatives` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deliveries_oder_id_foreign` FOREIGN KEY (`oder_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deliveries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD CONSTRAINT `delivery_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `miners`
--
ALTER TABLE `miners`
  ADD CONSTRAINT `miners_cooperative_id_foreign` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperatives` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cooperative_id_foreign` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperatives` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_delivery_address_id_foreign` FOREIGN KEY (`delivery_address_id`) REFERENCES `delivery_addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_cooperative_id_foreign` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperatives` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_cooperative_id_foreign` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperatives` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
