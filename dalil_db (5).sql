-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2025 at 04:20 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalil_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

DROP TABLE IF EXISTS `adds`;
CREATE TABLE IF NOT EXISTS `adds` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `atTop` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `atRight` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `otherSite` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `atHead` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `atTop`, `atRight`, `otherSite`, `atHead`, `created_at`, `updated_at`) VALUES
(1, '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Responsive -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-5316859218521647\"\r\n     data-ad-slot=\"3190348522\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Responsive -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-5316859218521647\"\r\n     data-ad-slot=\"3190348522\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Responsive -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-5316859218521647\"\r\n     data-ad-slot=\"3190348522\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '<meta name=\"msvalidate.01\" content=\"4A2EBC677560C58DA66C56B51975F90D\" />\r\n<meta name=\"google-site-verification\" content=\"wJH6pnmEx_LI0ip3Vtod2C8NlRJOruqZuzD2rmuT9M8\" />\r\n<!-- Google tag (gtag.js) -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-H484C93C7D\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-H484C93C7D\');\r\n</script>\r\n<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<script>\r\n  (adsbygoogle = window.adsbygoogle || []).push({\r\n    google_ad_client: \"ca-pub-5316859218521647\",\r\n    enable_page_level_ads: true\r\n  });\r\n</script>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `remember_token`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'soriaty@gmail.com', NULL, 'ZRVoI3tJxYSODCrvYznCoDaZkaVxgVAaiNVbdlHhO7HGKcHPvxYLz5eIAc3C', '$2y$10$xBZDxfrwMlHbNTPAWmYbJu2dfirfm0.An05nuheOjCL9rfL3G32GW', 0, '2023-06-10 16:04:29', '2023-10-09 08:16:13'),
(2, 'naji', 'najyms@gmail.com', NULL, 'MzBuNQgIXdd7c4JFCr2ZdSPLpHNTco3Lkun7fMFSY2CwaNEXBCFvusjVg1Lq', '$2y$10$.JNSXBv8BWrlq./chSM.ZOElhS2ohdP7wdb3mwIAeT7BIt9QqGkua', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible_status` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `country_id` int UNSIGNED DEFAULT NULL,
  `show_status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  KEY `categories_country_id_foreign` (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `href`, `title`, `image`, `keywords`, `visible_status`, `parent_id`, `country_id`, `show_status`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'آلات،خطوط إنتاج', 'Machines', 'آلات،خطوط إنتاج', '1660941815.webp', 'آلات ،خطوط إنتاج، مصانع, تصنيع', '0', 0, NULL, 0, '2023-11-20 09:02:17', '2023-11-20 09:20:08', NULL),
(2, 'الصحة', 'The_health', 'الصحة', '1660942819.webp', 'صحة , مستشفيات ,علاج ,أطباء ,مراكز طبية , طب', '0', 0, NULL, 0, '2023-11-20 09:04:43', '2023-11-20 09:20:35', NULL),
(3, 'سياحة و سفر ،حجوزات', 'Travel', 'سياحة و سفر ،حجوزات', '1660941946.webp', 'سياحة , سفر , حجز , طيران', '0', 0, NULL, 0, '2023-11-20 09:05:19', '2023-11-20 09:20:52', NULL),
(4, 'أشغال عامة،البناء', 'Building', 'أشغال عامة،البناء', '1660987706.webp', 'بناء , شركات بناء , شركات تعمير', '0', 0, NULL, 0, '2023-11-20 09:05:56', '2023-11-20 09:21:10', NULL),
(7, 'سيارات', 'Cars', 'سيارات', '1660942335.webp', 'سيارات , سيارة , مكاتب سيارات , تأجير سيارات , بيع سيارات', '0', 0, NULL, 0, '2023-11-20 09:06:53', '2023-11-20 09:19:39', NULL),
(6, 'الفنادق', 'Hotels', 'الفنادق', '1660942838.webp', 'سياحة , فندق, خمس نجوم, استرخاء , اوتيل', '0', 0, NULL, 0, '2023-11-20 09:06:24', '2025-01-31 21:45:12', '1738367112.png'),
(9, 'أغذية', 'Food', 'أغذية', '1660941635.webp', 'غذاء ،مأكولات ، معامل غذائية, أعلاف , ألبان', '0', 0, NULL, 0, '2023-11-20 09:10:33', '2023-11-20 09:19:28', NULL),
(12, 'الكيمياء،المنظفات', 'Chemistry', 'الكيمياء،المنظفات', '1660942901.webp', 'الأسمدة،المبيدات ,الصناعات الكيميائية , بترول ,شركات الطاقة', '0', 0, NULL, 0, '2023-11-20 09:16:15', '2023-11-20 09:16:15', NULL),
(13, 'شركات استقدام، توظيف', 'Recruitment', 'شركات استقدام، توظيف', '1660943430.webp', 'توظيف ،عمالة، شركات الاستقدام', '0', 0, NULL, 0, '2023-11-20 09:22:52', '2023-11-20 09:22:52', NULL),
(14, 'اتصالات و إنترنت', 'Communications', 'اتصالات و إنترنت', '1660942880.webp', 'استضافة مواقع ,جوال ,تسويق , تجارة الكترونية', '0', 0, NULL, 0, '2023-11-20 09:25:59', '2023-11-20 09:25:59', NULL),
(15, 'تأمين', 'Insurance', 'تأمين', '1660943958.webp', 'تأمين , شركات تأمين ,عقود تأمين', '0', 0, NULL, 0, '2023-11-20 09:26:47', '2023-11-20 09:26:47', NULL),
(16, 'شركات شحن', 'Shipping_companies', 'شركات شحن', '1660987686.webp', 'شركات شحن،تخليص جمركي,شحن', '0', 0, NULL, 0, '2023-11-20 09:29:15', '2023-11-20 09:29:15', NULL),
(17, 'استيراد،تصدير،وكالات', 'Agencies', 'استيراد،تصدير،وكالات', '1660943312.webp', 'استيراد،تصدير،وكالات', '0', 0, NULL, 0, '2023-11-20 09:41:58', '2023-11-20 09:41:58', NULL),
(18, 'تجارة', 'Trade', 'تجارة', '1660943620.webp', 'تجارة مواد صناعية ,تجارة مواد غذائية,متاجر و مراكز تسوق', '0', 0, NULL, 0, '2023-11-20 09:57:58', '2023-11-20 09:57:58', NULL),
(19, 'صناعات بلاستيكية', 'Plastic_industries', 'صناعات بلاستيكية', '1660942927.webp', 'أكياس ,منتجات بلاستيكية ,مواد بلاستيكية', '0', 0, NULL, 0, '2023-11-20 09:58:51', '2023-11-20 09:58:51', NULL),
(20, 'الأثاث و المفروشات', 'Furniture', 'الأثاث و المفروشات', '1660943286.webp', 'أثاث , مفروشات , موبيليا', '0', 0, NULL, 0, '2023-11-20 09:59:28', '2023-11-20 09:59:28', NULL),
(21, 'تحكم،مراقبة،أتمتة', 'Control', 'تحكم،مراقبة،أتمتة', '1660943157.webp', 'تحكم،مراقبة،أتمتة', '0', 0, NULL, 0, '2023-11-20 09:59:58', '2023-11-20 09:59:58', NULL),
(22, 'طباعة وكرتون', 'Printing', 'طباعة وكرتون', '1660943914.webp', 'طباعة,كرتون،تغليف،مكتبات', '0', 0, NULL, 0, '2023-11-20 10:00:52', '2023-11-20 10:00:52', NULL),
(23, 'الألبسة و الأحذية', 'Clothes', 'الألبسة و الأحذية', '1660943703.webp', 'الألبسة، الأحذية، الاكسسوارات, الجلود', '0', 0, NULL, 0, '2023-11-20 10:02:52', '2023-11-20 10:02:52', NULL),
(24, 'تعدين،معادن', 'Metals', 'تعدين،معادن', '1660942964.webp', 'تعدين،معادن ,صناعة ,ذهب , فضة , نحاس', '0', 0, NULL, 0, '2023-11-20 10:04:36', '2023-11-20 10:04:36', NULL),
(25, 'كومبيوتر ، إلكترونيات', 'Computer', 'كومبيوتر ، إلكترونيات', '1660943216.webp', 'كومبيوتر ، إلكترونيات , حاسوب , حاسبات , برامج , محمول , لابتوب', '0', 0, NULL, 0, '2023-11-20 10:05:08', '2023-11-20 10:05:08', NULL),
(26, 'البنوك،مؤسسات مالية', 'Banks', 'البنوك،مؤسسات مالية', '1660943730.webp', 'بنوك ,وساطة مالية , شركات صرافة , تصريف عملة , مؤسسة مالية', '0', 0, NULL, 0, '2023-11-20 10:05:36', '2023-11-20 10:05:36', NULL),
(27, 'تنظيم المناسبات،معارض', 'Exhibitions', 'تنظيم المناسبات،معارض', '1660987748.webp', 'مناسبات , معارض , ايفنت , أحداث , تنظيم فعاليات', '0', 0, NULL, 0, '2023-11-20 10:06:17', '2023-11-20 10:06:17', NULL),
(28, 'مؤسسات تعليمية', 'Education', 'مؤسسات تعليمية', '1660943054.webp', 'جامعات ,تعليم , مدارس , معاهد , تعليم عالي , تعليم مهني , تعليم نسوي , تعليم نظامي', '0', 0, NULL, 0, '2023-11-20 10:07:33', '2023-11-20 10:07:33', NULL),
(29, 'التصوير', 'Photo', 'التصوير', '1660942981.webp', 'تصوير , صور , مصور ,تصوير فوتوغرافي , مونتاج , فيديو', '0', 0, NULL, 0, '2023-11-20 10:08:16', '2023-11-20 10:08:16', NULL),
(30, 'خدمات', 'Services', 'خدمات', '1660943108.webp', 'تسويق, خدمات استشارية, خدمات عقارية ,خدمات مالية ,خدمات متنوعة ,محامون , مستودعات التبريد والتجميد', '0', 0, NULL, 0, '2023-11-20 10:09:01', '2023-11-20 10:09:01', NULL),
(31, 'الجهات الرسمية', 'Official_agencies', 'الجهات الرسمية', '1660943017.webp', 'جهة , وزارة, مديرية , قنصلية, سفارة , أحزاب , منظمات', '0', 0, NULL, 0, '2023-11-20 10:09:30', '2023-11-20 10:09:30', NULL),
(32, 'دعاية و إعلان،تسويق', 'Advertising', 'دعاية و إعلان،تسويق', '1660943033.webp', 'إذاعات, الانتاج الفني , شركات إعلانية , صحف و مجلات , قص ،حفر ليزر , مواد دعائية', '0', 0, NULL, 0, '2023-11-20 10:09:56', '2023-11-20 10:09:56', NULL),
(33, 'مطاعم،مطابخ،مخبوزات', 'Restaurants', 'مطاعم،مطابخ،مخبوزات', '1660943791.webp', 'مخبوزات وحلويات , مطابخ , مطاعم', '0', 0, NULL, 0, '2023-11-20 10:10:24', '2025-01-31 21:45:59', '1738367159.png'),
(34, 'مراكز تجميلية،رياضية', 'Sport', 'مراكز تجميلية،رياضية', '1661075171.webp', 'كوافير،مستحضرات تجميل ,مراكز رياضية', '0', 0, NULL, 0, '2023-11-20 10:11:08', '2023-11-20 10:11:08', NULL),
(35, 'آلات وخطوط إنتاج', 'production_lines', 'آلات وخطوط إنتاج', NULL, 'كهرباء صناعية ,مصانع , الآت ,خط إنتاج', '0', 1, NULL, 0, '2023-11-21 09:06:52', '2023-11-21 09:06:52', NULL),
(36, 'صنع الأجهزة الكهربائية', 'manufacture_of_electrical_appliances', 'صنع الأجهزة الكهربائية', NULL, 'صناعة , كهرباء , أجهزة كهربائية ,كهرباء صناعية', '0', 1, NULL, 0, '2023-11-21 09:07:23', '2023-11-21 09:07:23', NULL),
(37, 'المخابر', 'laboratories', 'المخابر', NULL, 'مخابر , مخابر جرثومية , مخابر كيميائية , تحليل مخبري , تحاليل مخبرية', '0', 2, NULL, 0, '2023-11-21 09:08:22', '2023-11-21 09:08:22', NULL),
(38, 'شركات الصناعات الدوائية', 'Pharmaceutical', 'شركات الصناعات الدوائية', NULL, 'صناعة دوائية , معامل أدوية ,تصميع الدواء ,دواء كيماوي', '0', 2, NULL, 0, '2023-11-21 09:08:52', '2023-11-21 09:08:52', NULL),
(39, 'مشافي وعيادات', 'Hospitals_clinics', 'مشافي وعيادات', NULL, 'مشافي ,عيادات , مشفى طبي ,علاج بالمشافي', '0', 2, NULL, 0, '2023-11-21 09:09:26', '2023-11-21 09:09:26', NULL),
(40, 'تجهيزات طبية ومخبرية', 'Medical_laboratory_equipment', 'تجهيزات طبية ومخبرية', NULL, 'تجهيزات طبية , تجهيزات مخبرية', '0', 2, NULL, 0, '2023-11-21 09:10:04', '2023-11-21 09:10:04', NULL),
(41, 'مستودعات الأدوية والصيدليات', 'Drugstores_pharmacies', 'مستودعات الأدوية والصيدليات', NULL, 'مستودع طبي ,صيدلية , دواء', '0', 2, NULL, 0, '2023-11-21 09:10:54', '2023-11-21 09:10:54', NULL),
(42, 'شركات السياحة،مكاتب الحجز', 'Tourism', 'شركات السياحة،مكاتب الحجز', NULL, 'مكتب حجز , حجز طيران , شركة سياحية , سفر', '0', 3, NULL, 0, '2023-11-21 09:16:19', '2023-11-21 09:16:19', NULL),
(44, 'أعمال بلاط ،تمديدات كهربائية وصحية', 'works', 'أعمال بلاط ،تمديدات كهربائية وصحية', NULL, 'أعمال بلاط ،تمديدات كهربائية ,تمديدات صحية , سمكرة', '0', 4, NULL, 0, '2023-11-21 09:18:01', '2023-11-21 09:18:01', NULL),
(45, 'التطوير و التعمير', 'development_construction', 'التطوير و التعمير', NULL, 'تطوير , عمار , تعمير , بناء ,شركات عقارية', '0', 4, NULL, 0, '2023-11-21 09:18:33', '2023-11-21 09:18:33', NULL),
(46, 'دهانات', 'Paints', 'دهانات', NULL, 'دهان , مواد دهان , شركات تدهين', '0', 4, NULL, 0, '2023-11-23 08:29:18', '2023-11-23 08:29:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country_id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `href` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name`, `href`, `created_at`, `updated_at`, `latitude`, `longitude`) VALUES
(1, 4, 'دمشق', 'damascus', '2025-02-05 15:30:11', NULL, '33.5138000', '36.2765000'),
(2, 4, 'ريف دمشق', 'rural-damascus', '2025-02-05 15:30:11', NULL, '33.5167000', '36.3000000'),
(3, 4, 'حلب', 'aleppo', '2025-02-05 15:30:11', NULL, '36.2021000', '37.1343000'),
(4, 4, 'حمص', 'homs', '2025-02-05 15:30:11', NULL, '34.7324000', '36.7132000'),
(5, 4, 'حماه', 'hama', '2025-02-05 15:30:11', NULL, '35.1318000', '36.7575000'),
(6, 4, 'اللاذقية', 'latakia', '2025-02-05 15:30:11', NULL, '35.5176000', '35.7833000'),
(7, 4, 'طرطوس', 'tartus', '2025-02-05 15:30:11', NULL, '34.8950000', '35.8867000'),
(8, 4, 'إدلب', 'idlib', '2025-02-05 15:30:11', NULL, '35.9297000', '36.6317000'),
(9, 4, 'الحسكة', 'hasakah', '2025-02-05 15:30:11', NULL, '36.5024000', '40.7467000'),
(10, 4, 'دير الزور', 'deir-ez-zor', '2025-02-05 15:30:11', NULL, '35.3333000', '40.1500000'),
(11, 4, 'الرقة', 'raqqa', '2025-02-05 15:30:11', NULL, '35.9594000', '39.0419000'),
(12, 4, 'السويداء', 'sweida', '2025-02-05 15:30:11', NULL, '32.7083000', '36.5667000'),
(13, 4, 'درعا', 'daraa', '2025-02-05 15:30:11', NULL, '32.6252000', '36.1025000'),
(14, 4, 'القنيطرة', 'quneitra', '2025-02-05 15:30:11', NULL, '33.1253000', '35.8247000');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `country_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_flag` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `keyword` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descr` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `show_status` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `href`, `country_flag`, `title`, `description`, `keyword`, `meta_descr`, `show_status`, `created_at`, `updated_at`) VALUES
(4, 'سوريا', 'Syria', '1738971824.webp', 'دليل شركات سوريا - دليل الشركات في سورية', NULL, 'سورية , شركات سورية ,دليل الشركات السورية ,أهم الشركات السورية ,فعاليات اقتصادية سورية', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق السورية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-02-23 10:59:16', '2023-11-20 09:56:55'),
(5, 'السعودية', 'Saudi', '1679354012.webp', 'دليل شركات السعودية - دليل الشركات في السعودية', NULL, 'السعودية , شركات سعودية ,دليل الشركات السعودية ,أهم الشركات السعودية ,فعاليات اقتصادية سعو', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق السعودية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-02-23 10:59:45', '2023-11-20 09:56:36'),
(6, 'الأمارات', 'Emirates', '1679354021.webp', 'دليل الشركات الأماراتية - دليل الشركات في الأمارات', NULL, 'الأمارات , شركات أماراتية ,دليل الشركات الأماراتية ,أهم الشركات الأماراتية ,فعاليات اقتصاد', 'دليل الشركات الأماراتية هو دليل تجاري متخصص يضم مجموعة واسعة من الشركات المتواجدة في السوق الأماراتية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-02-23 11:00:34', '2023-11-20 09:56:15'),
(7, 'البحرين', 'Bahrain', '1679354032.webp', 'دليل الشركات البحرينية - دليل الشركات في البحرين', NULL, 'البحرين , شركات بحرينية ,دليل الشركات البحرينية ,أهم الشركات البحرينية ,فعاليات اقتصادية ب', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق البحرينية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-02-23 11:04:10', '2023-11-20 09:55:52'),
(8, 'المغرب', 'Morocco', '1679433570.webp', 'دليل الشركات المغربية - دليل الشركات في المغرب', NULL, 'المغرب , شركات مغربية ,دليل الشركات المغربية ,أهم الشركات المغربية ,فعاليات اقتصادية مغربي', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق المغربية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:16:40', '2023-11-20 09:55:32'),
(9, 'مصر', 'Egypt', '1679073471.webp', 'دليل الشركات المصرية - دليل الشركات في مصر', NULL, 'مصر, شركات مصرية ,دليل الشركات المصرية ,أهم الشركات المصرية ,فعاليات اقتصادية مصرية , الدل', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق المصرية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:17:51', '2023-11-20 09:54:54'),
(10, 'الجزائر', 'Algeria', '1679073635.webp', 'دليل الشركات الجزائرية - دليل الشركات في الجزائر', NULL, 'الجزائر, شركات جزائرية ,دليل الشركات الجزائرية ,أهم الشركات الجزائرية ,فعاليات اقتصادية جز', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق الجزائرية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:20:35', '2023-11-20 09:54:10'),
(11, 'السودان', 'Sudan', '1679433588.webp', 'دليل الشركات السودانية - دليل الشركات في السودان', NULL, 'السودان , شركات سودانية ,دليل الشركات السودانية ,أهم الشركات السودانية ,فعاليات اقتصادية س', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق السودانية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:22:38', '2023-11-20 09:53:44'),
(12, 'ليبيا', 'Libya', '1679073929.webp', 'دليل الشركات الليبية - دليل الشركات في ليبيا', NULL, 'ليبيا, شركات ليبية ,دليل الشركات الليبية ,أهم الشركات الليبية ,فعاليات اقتصادية ليبية , ال', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق الليبية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:24:10', '2023-11-20 09:53:24'),
(13, 'تونس', 'Tunisia', '1679074023.webp', 'دليل الشركات التونسية - دليل الشركات في تونس', NULL, 'تونس , شركات تونسية ,دليل الشركات التونسية ,أهم الشركات التونسية ,فعاليات اقتصادية تونسية,', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق التونسية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:27:03', '2023-11-20 09:53:02'),
(14, 'اليمن', 'Yemen', '1679074101.webp', 'دليل الشركات اليمنية - دليل الشركات في اليمن', NULL, 'اليمن , شركات يمنية ,دليل الشركات اليمنية ,أهم الشركات اليمنية ,فعاليات اقتصادية يمنية , ا', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق اليمنية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:28:21', '2023-11-20 09:52:43'),
(15, 'الكويت', 'Kuwait', '1679074145.webp', 'دليل الشركات الكويتية - دليل الشركات في الكويت', NULL, 'الكويت , شركات كويتية ,دليل الشركات الكويتية ,أهم الشركات الكويتية ,فعاليات اقتصادية كويتي', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق الكويتية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:29:05', '2023-11-20 09:52:19'),
(16, 'عُمان', 'Oman', '1679074203.webp', 'دليل الشركات العمانية - دليل الشركات في عُمان', NULL, 'عُمان , شركات عُمانية ,دليل الشركات العمانية ,أهم الشركات العمانية ,فعاليات اقتصادية عُمان', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق العمانية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:30:03', '2023-11-20 09:51:53'),
(17, 'لبنان', 'Lebanon', '1679074244.webp', 'دليل الشركات اللبنانية - دليل الشركات في لبنان', NULL, 'لبنان , شركات لبنانية ,دليل الشركات اللبنانية ,أهم الشركات اللبنانية ,فعاليات اقتصادية لبن', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق اللبنانية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:30:44', '2023-11-20 09:50:33'),
(18, 'العراق', 'Iraq', '1679074286.webp', 'دليل شركات العراق - دليل الشركات في العراق', NULL, 'العراق , شركات عراقية ,دليل الشركات العراقية ,أهم الشركات العراقية ,فعاليات اقتصادية عراقي', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق العراقية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:31:26', '2023-11-20 09:51:23'),
(19, 'الأردن', 'Jordan', '1679074359.webp', 'دليل الشركات الأردنية - دليل الشركات في الأردن', NULL, 'الأردن, شركات أردنية ,دليل الشركات الأردنية,أهم الشركات الأردنية ,فعاليات اقتصادية أردنية ', 'دليل الشركات الأردنية هو دليل تجاري متخصص يضم مجموعة واسعة من الشركات المتواجدة في السوق الأردنية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:32:39', '2023-11-20 09:50:08'),
(20, 'قطر', 'Qatar', '1679074401.webp', 'دليل الشركات القطرية - دليل الشركات في قطر', NULL, 'قطر , شركات قطرية ,دليل الشركات القطرية ,أهم الشركات القطرية ,فعاليات اقتصادية قطرية , الد', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق القطرية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:33:21', '2023-11-20 09:50:57'),
(21, 'فلسطين', 'Palestinian', '1679074453.webp', 'دليل الشركات الفلسطينية - دليل الشركات في فلسطين', NULL, 'فلسطين, شركات فلسطينية ,دليل الشركات الفلسطينية ,أهم الشركات الفلسطينية ,فعاليات اقتصادية ', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق الفلسطينية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:34:13', '2023-11-20 09:49:48'),
(22, 'الصومال', 'Somalia', '1679074484.webp', 'دليل الشركات الصومالية - دليل الشركات في الصومال', NULL, 'الصومال , شركات صومالية ,دليل الشركات البحرينية ,أهم الشركات الصومالية ,فعاليات اقتصادية ص', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق الصومالية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:34:44', '2023-11-20 09:49:31'),
(23, 'موريتانيا', 'Mauritania', '1679074601.webp', 'دليل الشركات الموريتانية - دليل الشركات في موريتانيا', NULL, 'موريتانيا, شركات موريتانية ,دليل الشركات الموريتانية ,أهم الشركات الموريتانية ,فعاليات اقت', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق الموريتانية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:36:41', '2023-11-20 09:49:02'),
(24, 'جيبوتي', 'Djibouti', '1679074647.webp', 'دليل الشركات الجيبوتية - دليل الشركات في جيبوتي', NULL, 'جيبوتي, شركات جيبوتية ,دليل الشركات الجيبوتية ,أهم الشركات الجيبوتية ,فعاليات اقتصادية جيب', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق الجيبوتية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:37:27', '2023-11-20 09:48:44'),
(25, 'اريتريا', 'Eritrea', '1679074692.webp', 'دليل الشركات الأريتيرية - دليل الشركات في اريتريا', NULL, 'اريتيريا , شركات أريتيرية ,دليل الشركات الأريتيرية ,أهم الشركات الأريتيرية,فعاليات اقتصادي', 'دليل تجاري متخصص يضم الشركات المتواجدة في السوق الأريتيرية مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:38:12', '2023-11-20 09:48:17'),
(26, 'جزر القمر', 'Comoros', '1688981924.webp', 'دليل الشركات في جزر القمر', NULL, 'جزر القمر , شركات جزر القمر ,دليل الشركات في جزر القمر,أهم الشركات في جزر القمر ,فعاليات ا', 'دليل تجاري متخصص يضم الشركات المتواجدة في سوق جزر القمر مصنفة حسب القطاعات الصناعية والتجارية والخدمية .', 0, '2023-03-17 14:39:10', '2023-11-20 09:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `durations`
--

DROP TABLE IF EXISTS `durations`;
CREATE TABLE IF NOT EXISTS `durations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `duration` int DEFAULT NULL,
  `status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `durations`
--

INSERT INTO `durations` (`id`, `duration`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'active', NULL, NULL),
(2, 2, 'active', NULL, NULL),
(3, 3, 'active', NULL, NULL),
(4, 4, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `durations_packages`
--

DROP TABLE IF EXISTS `durations_packages`;
CREATE TABLE IF NOT EXISTS `durations_packages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `duration_id` bigint UNSIGNED DEFAULT NULL,
  `package_id` bigint UNSIGNED DEFAULT NULL,
  `status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `durations_packages`
--

INSERT INTO `durations_packages` (`id`, `duration_id`, `package_id`, `status`, `created_at`, `updated_at`, `price`) VALUES
(4, 1, 5, '1', '2025-02-12 19:00:58', '2025-02-16 16:31:08', '100.00'),
(7, 4, 5, '1', '2025-02-12 19:00:58', '2025-02-16 16:31:08', '650.00'),
(8, 2, 5, '1', '2025-02-12 20:37:39', '2025-02-16 16:31:08', '200.00'),
(9, 3, 5, '1', '2025-02-12 20:37:39', '2025-02-16 16:31:08', '300.00'),
(10, 1, 6, '1', '2025-02-13 10:06:27', '2025-02-13 10:06:27', '200.00'),
(11, 2, 6, '1', '2025-02-13 10:06:27', '2025-02-13 10:06:27', '300.00'),
(12, 3, 6, '1', '2025-02-13 10:06:27', '2025-02-13 10:06:27', '400.00'),
(13, 4, 6, '1', '2025-02-13 10:06:27', '2025-02-13 10:06:27', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fixed_sites`
--

DROP TABLE IF EXISTS `fixed_sites`;
CREATE TABLE IF NOT EXISTS `fixed_sites` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int UNSIGNED NOT NULL,
  `show_status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fixed_sites_main`
--

DROP TABLE IF EXISTS `fixed_sites_main`;
CREATE TABLE IF NOT EXISTS `fixed_sites_main` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fixed_sites_news`
--

DROP TABLE IF EXISTS `fixed_sites_news`;
CREATE TABLE IF NOT EXISTS `fixed_sites_news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `link` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `img` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_07_103002_create_categories_table', 1),
(6, '2022_03_08_124442_create_sites_table', 1),
(7, '2022_03_12_122718_create_countries_table', 1),
(8, '2022_03_13_153701_create_pages_table', 1),
(9, '2022_03_29_104404_create_profiles_table', 1),
(10, '2022_04_03_195655_create_sittings_table', 1),
(11, '2022_04_03_200151_create_adds_table', 1),
(12, '2022_04_03_200921_create_pinned_pages_table', 1),
(14, '2022_06_07_185822_create_tags_table', 1),
(15, '2022_06_12_151817_create_site_tag_table', 1),
(16, '2023_06_10_164207_create_admins_table', 2),
(18, '2025_01_31_000055_add_latitude_to_sites_table', 4),
(19, '2025_01_31_000305_add_icon_to_categories_table', 4),
(20, '2025_01_31_182825_update_cities_id_on_sites_table', 5),
(21, '2025_02_02_190235_add_city_id_to_sites_table', 6),
(22, '2025_02_02_211608_add_user_id_to_sites_table', 7),
(23, '2025_02_03_115144_create_products_table', 8),
(24, '2025_02_03_115544_create_p_categories_table', 8),
(25, '2025_02_03_162515_add_currency_to_products_table', 9),
(26, '2025_02_05_140245_add_latitude_to_cities_table', 10),
(27, '2025_02_05_140249_add_latitude_to_subcities_table', 10),
(28, '2025_02_05_141527_add_longtude_to_cities_table', 11),
(29, '2025_02_10_224451_create_packages_table', 12),
(30, '2025_02_10_224720_create_packages_users_table', 13),
(31, '2025_02_10_231059_add_packge_user_id_to_sites_table', 13),
(32, '2025_02_12_131037_create_durations_table', 14),
(33, '2025_02_12_131229_add_duration_id_to_packages_users_table', 14),
(34, '2025_02_12_131631_create_durations_packages_table', 14),
(35, '2025_02_12_134336_add_durationid_to_packages_users_table', 15),
(36, '2025_02_12_140824_add_price_to_durations_packages_table', 16),
(37, '2025_02_12_153637_add_status_to_packages_table', 17),
(38, '2025_02_14_120405_add_duration_package_id_to_packages_users_table', 18),
(39, '2025_02_14_143814_add_used_sites_count_to_users_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `descr` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `imageShowing` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `views` bigint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `descr`, `image`, `imageShowing`, `views`, `created_at`, `updated_at`) VALUES
(2, 'تقويم دي كيوب الرقمي يجمع الأحداث في مكان واحد', '<p>يحتاج الإنسان للتذكير في بعض الأحيان بمواعيد المناسبات خاصة إذا كانت مهمة ويتوجب عليه الاستعداد لها، لكن يُعد تجميع جميع تواريخ المناسبات العامة صعبًا، إلا أن التقويم على الهواتف الذكية يساعد قليلًا في ذلك مع إمكانية تعيين جميع التواريخ ومزامنتها، حتى انتشرت تقويمات جاهزة لبعض المناسبات يمكن تثبيتها للبقاء على إطلاع حولها، وحديثًا انطلق تقويم دي كيوب الرقمي المميز والشامل.</p>\r\n\r\n<p>فبينما نشاهد بين الحين والأخر بعض التغريدات على تويتر أو النشاطات على انستجرام وفيس بوك تتحدث عن يوم كذا أو كذا لنتفاجأ بأن هناك احتفالات سنوية بأشياء لا تخطر على البال والخاطر في الكثير من الأحيان، يجمع تقويم دي كيوب جميع هذه المناسبات والأحداث العالمية في مكان واحد، بجانب الأحداث المحلية بطبيعة الحال.</p>\r\n\r\n<p>ويجمع التقويم الجديد أغلب الأيام المحلية والعالمية في مجالات مثل الصحة، الفن، الطعام، الدين، الترفيه، الرياضة، الطبيعة، وغيرها.</p>\r\n\r\n<p>فبين يوم البانكيك بالتوت الأزرق، إلى يوم الكرز المغطى للشكولاتة، وحتى يوم لعبة التريفيا، أو يوم الكهرباء الساكنة، ويوم تقدير النباتات المنزلية، وغيرها. سنجد تقويم دي كيوب يقدم جميع هذه الأيام في مكان واحد وبشكل مجاني.</p>\r\n\r\n<p>ويتيح التقويم كذلك إمكانية مشاركة لأحداث والفعاليات مع الأصدقاء عبر مواقع التواصل الاجتماعي المختلفة مثل تويتر، فيس بوك، وانستجرام.</p>\r\n\r\n<p>يمكن تحميل التقويم وتثبيته مجانًا من خلال <a href=\"https://dcube.me/calendar/\">هذا الرابط</a>، كما يمكن تصفح الأيام وتواريخ الأحداث العالمية على الموقع نفسه للبقاء على إطلاع بما يحتفي به العالم كل يوم في أنحاءه المتفرقة.</p>', '1698924131.webp,1698924131.webp', NULL, 292, NULL, '2024-12-07 14:40:57'),
(6, 'وصلات أكبر دليل عربي شامل للمواقع', '<p>في عصر التكنولوجيا والإنترنت والذكاء الاصطناعي اليوم، أصبح البحث عن المحتوى المفيد على شبكة الإنترنت أمراً مرهقاً كما أنّ مليارات الأشخاص حول العالم يبحثون بشكل مستمر. وبالنظر إلى العدد الهائل للمواقع والمنصات على الشابكة، بات من الضروري وجود دليل يسهل عملية البحث ويوفر وصولاً سهلاً وسريعاً إلى مختلف الصفحات والموارد على الإنترنت.</p>\r\n\r\n<p>وفي هذا السياق، أطلق فريق وصلات أكبر دليل عربي للمواقع، حيث يسعى ليكون المرشد الأمثل في رحلة المستخدم في الشابكة، حيث يقدم ميزات استثنائية تجعل منه الخيار الأمثل للباحثين عن المحتوى على الإنترنت.</p>\r\n\r\n<p>تحتوي وصلات على ميزات رائعة تجعله متفوّقاً على الأدلة الأخرى، منها:</p>\r\n\r\n<ol>\r\n	<li><strong>تصنيف شامل</strong>: يحتوي وصلات على مجموعة واسعة من التصنيفات تشمل كافة القطاعات والمجالات المختلفة. سواء كنت تبحث عن أخبار، تكنولوجيا، رياضة، ثقافة، أو أي موضوع آخر، ستجد القسم المخصص له في وصلات.</li>\r\n	<li><strong>بحث متقدم</strong>: يوفر وصلات ميزة بحث متقدم تمكنك من تحديد معايير البحث بدقة. بغض النظر عن مجال اهتمامك، يمكنك تحديد الكلمات الرئيسية، والمواقع، وحتى استخدام مرشحات متقدمة لتحديد نطاق البحث.</li>\r\n	<li><strong>تصميم سهل الاستخدام</strong>: يتميز واجهة موقع وصلات بتصميم بسيط وسهل الاستخدام، مما يجعل من تصفح الموقع أمراً ممتعاً وسهلاً للمستخدمين من مختلف الفئات العمرية والمستويات التقنية.</li>\r\n	<li><strong>تحديث دوري</strong>: يتم تحديث قاعدة بيانات وصلات بشكل دوري لضمان توفير أحدث وأفضل المواقع والمحتوى على الإنترنت.</li>\r\n	<li><strong>تجربة مستخدم مخصصة</strong>: يمكن للمستخدمين تخصيص تجربتهم على وصلات من خلال إمكانية إنشاء حساب شخصي وحفظ المواقع المفضلة لديهم وإضافة تقييمات وتعليقات شخصية.</li>\r\n	<li><strong>متوافق مع الأجهزة المحمولة</strong>: يتيح موقع وصلات تصفح المحتوى بسهولة على مختلف الأجهزة المحمولة، مما يجعله مرافقًا مثاليًا للمستخدمين الذين يتصفحون الإنترنت عبر هواتفهم الذكية.</li>\r\n</ol>\r\n\r\n<p>باختصار، إطلاق موقع وصلات يمثل نقلة نوعية في عالم الأدلّة العربية على الإنترنت. يوفر للمستخدمين وسيلة موثوقة وفعالة للوصول إلى المواقع والمحتوى الذي يبحثون عنه بسهولة وسرعة.</p>', '1698922363.webp,1698922363.webp', NULL, 405, '2023-10-10 08:40:40', '2024-12-07 09:55:52'),
(7, 'أفضل مواقع الخدمات المصغرة العربية', '<p>&nbsp;الخدمات المصغرة هي منصات الكترونية لتقديم الخدمات الصغيرة والمتوسطة في مختلف المجالات، مثل التسويق الرقمي وتصميم الجرافيك وكتابة المحتوى والبرمجة والترجمة، والعديد من المجالات الأخرى. إن مثل هذه المنصات توفر فرصًا رائعة للأشخاص الذين يرغبون في تقديم خدماتهم للآخرين والعمل مع العملاء في جميع أنحاء العالم.<br />\r\n<br />\r\nفي هذا المقال سنستعرض أهم مواقع الخدمات المصغرة العربية<br />\r\n1- <a href=\"https://waslat.com/I/khamsat.com\">خمسات </a>هي منصة عربية للعمل الحر عبر الإنترنت تأسست عام 2010 وتوفر فرص عمل للمستقلين في مجالات متنوعة مثل التصميم، البرمجة، التسويق الإلكتروني، الكتابة وغيرها. يمكن للمستخدمين عرض خدماتهم وعروضهم والتفاوض على الأسعار وإتمام الصفقات عبر المنصة. تحظى خمسات بشعبية كبيرة في العالم العربي وتعتبر واحدة من أكبر المنصات العربية للعمل الحر عبر الإنترنت.<br />\r\n2- <a href=\"https://waslat.com/I/kafiil.com\">كفيل</a> هي منصة للعمل الحر عبر الإنترنت تأسس عام 2017&nbsp; يتميز بكونه الموقع الوحيد في الوطن العربي الذي يضم الأنماط الثلاثة المعروفة عالميا في العمل الحر (الخدمات المصغرة &ndash; المشاريع &ndash; المسابقات) حيث تلبي تلك الإختيارات التلاتة كافة رغبات ومتطلبات السوق العربي.<br />\r\n3- <a href=\"https://waslat.com/I/ikhedmah.com\">أي خدمة</a> &nbsp;وهي منصة عربية للخدمات المصغرة، تحتوي على العديد من الخدمات المختلفة في مجالات متنوعة مثل التصميم والبرمجة والترجمة وغيرها.<br />\r\n<br />\r\nكما يوجد العديد من مواقع الخدمات المصغرة والتي يمكنك الإطلاع على روابطها من <a href=\"https://waslat.com/category/Lebanon/Freelancing\">هنا</a></p>\r\n\r\n<p>تعدّ المواقع التي توفرالعمل الحر والخدمات المصغرة&nbsp;فرصًا قيمة للأشخاص الذين يريدون الاستقلالية في العمل والحصول على دخل إضافي، وتتيح هذه المنصات للمستقلين والمتقدمين للوظائف العثور على فرص عمل في مجالات مختلفة، والتواصل مع العملاء المناسبين، و&nbsp;علاوة على ذلك، تساهم هذه المواقع في تحسين جودة الخدمات التي تقدم للعملاء، حيث يتم تقييم العمل المنجز وتوفير ملاحظات وتعليقات للمستقلين والمتقدمين للوظائف لتحسين أدائهم في المستقبل .</p>', '1698924435.webp,1698924435.webp', NULL, 315, '2023-10-10 09:28:43', '2024-12-07 12:39:23'),
(8, 'أفضل موقع لتحليل الشخصية و الاختبارات الثقافية', '<p>ربما صادفتم عشرات أو مئات المواقع التي تعطيك نتائج تحليل شخصيتك بناءً على حجم إصبعك وما شابه، ومن الواضح أنّ هذه النتائج تظهر بشكل عشوائي لأنّك لو أعدت دخول الاختبار ستحصل على نتائج مختلفة.</p>\r\n\r\n<p>موقع واحد صادفته يعتمد بالفعل على إجاباتك لإظهار نتيجة متوافقة معها، لكن مع ذلك فإنّ هذا الموقع يحوي مئات الاختبارات التي تتوزع بين الثقافية الحقيقية والذكاء والمعلومات العامة والترفيهية والعشوائية أيضًا، لكن ما يميّزه أنّه يحوي تصنيفات فيمكنك الدخول إلى التصنيف الذي تحب وتبتعد عن الأنواع المزعجة الأخرى.</p>\r\n\r\n<p>للدخول إلى صفحة اختبارات المعلومات الثقافية&nbsp;<a href=\"https://www.haliva.com/cat/info\" target=\"_blank\">من هن</a>ا</p>\r\n\r\n<p>وللدخول إلى صفحة اختبارات الذكاء&nbsp;<a href=\"https://www.haliva.com/cat/iq\" target=\"_blank\">من هنا</a></p>\r\n\r\n<p>الميزة الأهمّ في هذا الموقع هي أنّك يمكنك إنشاء اختباراتك بنفسك بعد أن تسجّل حساب عادي، حساب بواسطة الإيميل، ولن يأخذ بياناتك على فيسبوك مثلًا فهو آمن (على ضمانتي الشخصية).</p>\r\n\r\n<p>ودخلت من اسمي الشخصي، وأنشأت اختبارًا للتجربة، لكن فوجئت بأنّ إدارة الموقع قد وافقت عليه ونشرته وبقي هناك منذ أكثر من سنتين وهو بعنوان:&nbsp;<strong>هل تحب الصراصير؟&nbsp;</strong><a href=\"https://www.haliva.com/quiz/1048/start\" target=\"_blank\">يمكنك تجربته من هنا</a></p>', '1698922574.webp,1698922574.webp', NULL, 400, '2023-10-10 10:01:26', '2024-12-07 08:17:26'),
(54, 'منصة كفيل: تحقيق النجاح من خلال العمل الحر', '<p>مع تطوّر العمل الحرّ والتسوّق عبر الإنترنت، أصبح من السهل على الأفراد المستقلين تقديم خدماتهم ومهاراتهم للعملاء من مختلف أنحاء العالم، ومن بين المنصّات الرائدة في هذا المجال تبرز منصة كفيل كأفضل منصة موثوقة لبيع الخدمات المصغرة</p>\r\n\r\n<p><strong>كفيل حيث تتنوّع الخدمات</strong></p>\r\n\r\n<p>تضمّ منصّة كفيل مجموعة واسعة من الخدمات المصغّرة التي تشمل كافّة الاحتياجات والمجالات، وسواءً كنت مصمّمًا جرافيكيًا، أو كاتبًا محترفًا، أو خبيرًا في التسويق الرقمي، ستجد مكانًا هنا لتقديم خدماتك بكفاءة</p>\r\n\r\n<p><strong>سهولة الاستخدام</strong></p>\r\n\r\n<p>تتيح منصة كفيل للمستخدمين تصفّح الخدمات بسهولة والعثور على ما يحتاجونه بسرعة، كما يمكن للبائعين إعداد صفحاتهم الشخصية بسهولة ليتمكنّوا من عرض خبراتهم وأعمالهم بشكل مميّز</p>\r\n\r\n<p><strong>الأمان والموثوقيّة</strong></p>\r\n\r\n<p>لكفيل من اسمه نصيب، فمن خلال استخدام تقنيات الدفع الآمنة، تضمن منصّة كفيل حماية العمليات المالية للبائعين والمشترين، كما تقدّم دعمًا فنيًا ممتازًا لضمان تجربة استخدام مريحة وموثوقة للجميع</p>\r\n\r\n<p><strong>فرص النموّ والتطوّر من خلال كفيل</strong></p>\r\n\r\n<p>من خلال بيئة نشطة ومجتمع مستقر من المبدعين والمشترين، يمكن للأفراد أن يجدوا الفرص لتوسيع شبكاتهم وزيادة دخلهم من خلال منصة كفيل</p>\r\n\r\n<p><strong>المسابقات، هل سمعت بها من قبل؟!</strong></p>\r\n\r\n<p>تنفرد كفيل بميزة رائعة عن جميع منصات العمل الحرّ سواء التي تبيع الخدمات المصغرة أو المشاريع الكبيرة، وهي المسابقات، حيث يمكن لصاحب المشروع بدلًا من نشر مشروعه بالطريقة التقليدية، نشره كمسابقة وتلقّي مشاركات المستقلّين ثمّ إعلان الفائز، إنها طريقة مبتكرة، فبدلًا من مشاهدة نماذج عمل، يمكن تلقّي أعمال أنشئت خصيصًا لهذا المشروع.</p>\r\n\r\n<p><strong>المشاريع لتبدأ مشروعك بالشكل الصحيح</strong></p>\r\n\r\n<p>يوفر لك قسم المشاريع الفرصة لإضافة تفاصيل أي مهمة تود تنفيذها عن بعد (مثل: التصميم &ndash; الترجمة &ndash; الكتابة &ndash; البرمجة &ndash; التسويق -&hellip;.إلخ) حيث تقوم بكتابة تفاصيل المشروع المراد تنفيذه محدداً المدة الزمنية والميزانية المقترحة, وحينها يتقدم المستقلون أصحاب المهارة المطلوبة بعروضهم لتنفيذ طلبك, ثم تختار أنت العرض الأنسب لك وحينها يبدأ المستقل في تنفيذ مشروعك وفقاً للشروط المبينة في وصف المشروع, مع العلم بأن المستقل لا يتسلم قيمة المشروع إلا بعد أن تقوم أنت بإستلام المشروع في شكله النهائي وتضغط زر&nbsp; إتمام المشروع .</p>\r\n\r\n<p>نصيحتي كمستقلّ: إذا كنت تتمتع بمهارات فريدة وتبحث عن فرصة لتقديمها لجمهور واسع، فإن منصة <a href=\"https://kafiil.com/ref/4e2bef028f\">كفيل </a>هي الخيار الأمثل لك.</p>', '1698922746.webp,1698922746.webp', NULL, 383, '2023-10-17 10:41:34', '2024-12-08 02:49:23'),
(55, 'أفضل مواقع البريد الالكتروني 2023', '<p>في عالمنا المتصل بالإنترنت، أصبح البريد الإلكتروني أداة أساسية للتواصل والمراسلة الإلكترونية.<br />\r\nومن أجل الاستفادة القصوى من خدمات البريد الإلكتروني، يتعين على المستخدمين اختيار أفضل مواقع البريد الإلكتروني التي توفر الأمان والموثوقية والمزايا القوية.<br />\r\nفي مقالنا هذا، سنلقي نظرة على بعض أفضل مواقع البريد الإلكتروني المتاحة حاليًا.</p>\r\n\r\n<p>1. <a href=\"https://waslat.com/I/gmail.com\">جيميل</a>:<br />\r\nيعتبر Gmail، الذي تقدمه شركة Google، واحدًا من أفضل مواقع البريد الإلكتروني المتاحة.<br />\r\nيتميز Gmail بواجهة مستخدم بسيطة وسهلة الاستخدام، وسعة تخزين كبيرة مجانية تصل إلى 15 غيغابايت، ويدعم الترتيب التلقائي للرسائل والتصنيفات المختلفة.<br />\r\nكما يوفر Gmail أيضًا خدمة الدردشة ومكالمات الفيديو المجانية من خلال تطبيقه المرافق Google Hangouts.</p>\r\n\r\n<p>2. <a href=\"https://waslat.com/I/hotmail.com\">أوتلوك</a>:<br />\r\nتقدم Microsoft خدمة بريد Outlook المعروفة سابقًا بـ Hotmail. يتميز Outlook بواجهة مستخدم مرنة ومتجاوبة تعمل بسلاسة على مختلف الأجهزة.<br />\r\nيتضمن Outlook أدوات قوية لتنظيم البريد الوارد، والتركيب التلقائي للرسائل المهمة، وتصفية الرسائل غير المرغوب فيها. كما يتميز بتكامل ممتاز مع تطبيقات Office الأخرى.</p>\r\n\r\n<p>3. <a href=\"https://waslat.com/I/mail.yahoo.com\">ياهو مايل</a>:<br />\r\nتعتبر Yahoo Mail واحدة من أقدم وأشهر مواقع البريد الإلكتروني. يتميز Yahoo Mail بتصميم جذاب وسهولة الاستخدام، ويوفر سعة تخزين مجانية تصل إلى 1 تيرابايت.<br />\r\nيتضمن Yahoo Mail أيضًا ميزات مثل التصنيف التلقائي للرسائل، وعلامات البريد الشخصية، وتنظيم المرفقات بشكل مريح.</p>\r\n\r\n<p>4. <a href=\"https://waslat.com/I/proton.me\">بروتون مايل</a>:<br />\r\nإذا كنت تبحث عن موقع بريد إلكتروني آمن ومشفر، فإن ProtonMail هو الخيار المثالي. يتميز ProtonMail بتشفير نهاية إلى نهاية، مما يعني أنه يوفر أعلى مستويات الأمان والخصوصية للمستخدمين.<br />\r\nكما يوفر ProtonMail واجهة مستخدم رائعة وسهلة الاستخدام، ويتضمن ميزات مثل التوقيع الرقمي، والتركيب التلقائي للرسائل، والتأكيد على التسليم.</p>\r\n\r\n<p>5. <a href=\"https://waslat.com/I/zoho.com\">زوهو مايل</a>:<br />\r\nيوفر Zoho Mail خدمة بريد إلكتروني ممتازة للأفراد والشركات الصغيرة والمتوسطة. يتميز Zoho Mail بواجهة مستخدم متقدمة ومخصصة توفر تجربة سلسة ومرنة.<br />\r\nيحتوي Zoho Mail على أدوات قوية لإدارة البريد الإلكتروني، وتصنيف الرسائل، وجدولة الرسائل، والتعاون الفريقي.</p>\r\n\r\n<p>باختيار أحد هذه المواقع، ستحصل على تجربة <a href=\"https://waslat.com/category/Saudi/E-mail\">بريد إلكتروني</a> متقدمة وفعالة. ومع ذلك، يجب عليك أن تأخذ في الاعتبار احتياجاتك الشخصية والمهنية عند اختيار موقع البريد الإلكتروني الأفضل بالنسبة لك.</p>', '1698923419.webp,1698923419.webp', NULL, 393, '2023-10-23 16:59:08', '2024-12-06 23:23:52'),
(56, 'أفضل خمسة مواقع تسوق نسائية في عام 2023', '<p>مع تطور التكنولوجيا، أصبح التسوق عبر الإنترنت من الطرق الأكثر شيوعاً لشراء الملابس والاكسسوارات، وتزايد عدد المتاجر الإلكترونية بشكل لا يمكن تصوّره، وأصبح اتّخاذ قرار بالشراء عبر الإنترنت صعبًا للغابة بسبب كثرة الخيارات، وبطبيعة الحال فإنّ الكثير من هذه الخيارات ليست خيارات جيدة، لذا سنجمع قائمة بأفضل المواقع وفق المعطيات التي سنذكرها تاليًا.</p>\r\n\r\n<p><strong>يجب أن يتمتّع الموقع المناسب للشراء بالميزات التالية:</strong></p>\r\n\r\n<ul>\r\n	<li>أن يحوي تشكيلة واسعة من المنتجات والعلامات التجارية المحلية والعالمية كي يتمكن المستهلك من المقارنة داخل الموقع بسرعة وسهولة.</li>\r\n	<li>أن تكون أسعاره تنافسية ويقدّم خصومات وعروض ترويجية في المناسبات.</li>\r\n	<li>أن يكون سهل الاستخدام ويتيح سهولة التنقل ويوفر أدوات مساعدة متقدمة تساعد المتسوقين على العثور على المنتجات التي يبحثون عنها.</li>\r\n	<li>أن يقدّم خدمة عملاء متميزة على مدار الساعة طوال أيام الأسبوع.&nbsp;</li>\r\n	<li>أن يقدّم الموقع ضمان استرداد الأموال لمدة 28 يومًا على جميع المنتجات التي يبيعها.</li>\r\n	<li>أن يوفّر خيارات شحن مناسبة من حيث الكلفة والسرعة والأمان.</li>\r\n</ul>\r\n\r\n<p><strong>قائمة أفضل خمسة مواقع تسوّق نسائية لعام 2023</strong></p>\r\n\r\n<p><a href=\"https://www.asos.com/\">ASOS</a></p>\r\n\r\n<p>مع مجموعة متنوعة من الملابس والاكسسوارات الحديثة والعصرية، تعد ASOS واحدة من أبرز وجهات التسوق عبر الإنترنت للنساء، تقدم ASOS ماركات مختلفة وتصميمات حصرية بأسعار معقولة.</p>\r\n\r\n<p><a href=\"https://www.zara.com/\">Zara</a></p>\r\n\r\n<p>لا يمكن تجاهل تأثير متجر Zara على صناعة الموضة، تقدم Zara تشكيلات جديدة باستمرار وتعرض مجموعة واسعة من الأزياء الأنيقة والعصرية</p>\r\n\r\n<p>&nbsp;<a href=\"https://www.net-a-porter.com/ar-sa/\">Net-a-Porter</a></p>\r\n\r\n<p>إذا كنت تبحث عن الأزياء الفاخرة والماركات العالمية، فإن Net-a-Porter هي المكان المثالي لك. تقدم هذه المنصة مجموعة منتقاة بعناية من الملابس والاكسسوارات من أشهر المصممين.</p>\r\n\r\n<p><a href=\"https://www.amazon.com/amazon-fashion/b?ie=UTF8&amp;node=7141123011\">Amazon Fashion</a></p>\r\n\r\n<p>مع توسع موقع أمازون إلى عالم الموضة، أصبح بإمكانك العثور على مجموعة متنوعة من الأزياء والاكسسوارات بأسعار مختلفة. يوفر Amazon Fashion تجربة تسوق مريحة ومتنوعة.</p>\r\n\r\n<p><a href=\"https://modcloth.com/\">ModCloth</a></p>\r\n\r\n<p>إذا كنت تفضلين الأسلوب الفريد والقطع ذات التصميم الرائع، فإن ModCloth هي الموقع المثالي، تقدم ModCloth تشكيلة منتقاة من الفساتين والملابس النسائية بأسلوب فريد ورائع.</p>', '1698923897.webp,1698923897.webp', NULL, 462, '2023-10-26 11:58:04', '2025-02-02 08:28:33'),
(60, 'اليوم السابع في قمة المواقع الإخبارية العربية', '<p>موقع صحيفة &quot;<a href=\"https://waslat.com/I/youm7.com\">اليوم السابع</a>&quot; صحيفة إخبارية إلكترونية يومية شاملة، تصدر عن الشركة &quot;المصرية للصحافة والنشر والإعلان&quot;، وهى الشركة الناشرة لصحيفة &quot;اليوم السابع&quot; المطبوعة التي تصدر يومياً، وكانت تصدر أسبوعياً منذ أكتوبر 2008، وصدرت يومياً ابتداء من 31 مايو 2011، وهو أكثر المواقع الإخبارية العربية شهرة ومتابعة حيث يواكب الحدث لحظة بلحظة وينشر تحقيقات وأخبار ميدانية أكثر دقة ووضوح من غيره.</p>\r\n\r\n<p>وتعمل أسرة تحرير &quot;اليوم السابع&quot; عبر موقعها الرسمي على نشر الأخبار اليومية، وفق القواعد المهنية الأصيلة لمهنة الصحافة، والتي تعطى الأولوية في صناعة الصحافة لإنتاج الأخبار والمعلومات بمصداقية مطلقة، وعمق في التحليل، وشفافية في المعلومات وهي أولوية في عملها لتشكل جسراً أساسياً للوصول إلى قرائها، وذلك بلا انتماءات سياسية أو حزبية أو انحيازات عقائدية أو مذهبية أو طائفية مسبقة وتستند في الفكر و الرؤية على إيمان عميق وصارم بأسس الدولة المدنية التي تجعل من القانون المرجعية الأولى، وتتزن حركتها بالفصل التام بين السلطات ، وتعتمد نهج الديمقراطية في السياسة، والحرية في الاقتصاد بمسئولية وطنية كأساس للتطور و النهضة والاستقرار الاجتماعي.<br />\r\n<br />\r\nتتنوع الأخبار والمقالات والتحقيقات المنشورة على الموقع من أخبار عاجلة إلى حوادث ورياضة وتعليم وصحة وتكنولوجيا وسياسة واقتصاد ومحليات مصرية وكاريكاتير وثقافة وألبومات وفيديو وفن ومرأة وإلى أقسام التحقيقات والتقارير وعرب ومقالات أسرة التحرير ولا ترتبط الأخبار والمقالات والتحقيقات المنشورة في الموقع بحدود الجغرافيا المصرية بل تطال العرب والعالم وتلقي النظر على أهم وأحدث الأنباء والمعلومات والأخبار حول الكرة الأرضية لتضع المتابع العربي في صورة التطورات الأخيرة.</p>', '1699286429.webp,1699286429.webp', NULL, 225, '2023-11-06 16:00:29', '2024-12-11 02:49:56'),
(61, 'أفضل مواقع بيع وشراء العقارات في السعودية', '<p>عند البحث عن عقار في السعودية، يمكن أن تكون المهمة محيرة ومرهقة. ومع زيادة استخدام التكنولوجيا، أصبح من الأسهل الآن العثور على العقار المناسب من خلال استخدام مواقع البحث عن العقارات.<br />\r\nوسنوجز فيما يلي بعض أهم مواقع البحث عن العقارات في المملكة العربية السعودية :<br />\r\n<a href=\"https://wasalt.com\">وصلت </a>.. منصة الكترونية لبيع العقارات في المملكة العربية السعودية مرخص من الهيئة العامة للعقار وهو موقع شامل من حيث التنوع ببيع العقارات والمناطق التي يتضمنها ويمتاز بسهولة فائقة بالتعامل مع المستخدم ويستطيع الباحث عن العقار أن يجد طلبه بكل سهولة ويسر من خلال التصنيفات والتبويبات التي وضعت لسهولة البحث.<br />\r\nيمكن للمستخدم عبر موقع وصلت تحميل التطبيق على جهازه الخليوية لسهولة مشاهدة أحدث العروض أو المشاركة بالمزادات أو رؤية المخططات ويتيح للمشتركين بالموقع &quot;إضافة العقار&quot; لعرضه للبيع أو الايجار حيث يتطلب الموقع عندها أضافة رقم المستخدم الخليوي ومعلومات عن العقار والمنطقة والسعر المطلوب حيث يتطلب من المستخدم ملء البيانات للوصول إلى المرحلة النهائية التي تتيح له عرض إعلانه على الموقع.<br />\r\n<br />\r\n<a href=\"https://aqargate.com\">بوابة العقار</a> يعتبر من أهم وأشهر المنصات والمواقع السعودية التي تهتم بسوق العقارات فهو منصة العقار السعودية التي تشكل خيارك الأول لنشر إعلاناتك وإدارة العقارات المنصة مرخصة من الهيئة العامة للعقار بالمملكة العربية السعودية ومن السهل على المستخدم التعامل مع الموقع سواء من خلال عرض العقارات ( شقق &ndash; فلل &ndash; مزارع &ndash; محلات &ndash; أراضي &ndash; عمارات &ndash; دور .. ) للبيع أو الايجار ويمكن إضافة عقار أو البحث عن عقار معين ويتطلب الموقع من المستخدم بيانات شخصية عندما يقرر أن يكون مشتركاً بالموقع.<br />\r\nعندما يتعذر إيجاد العقار المناسب الذي يلبي طموحات المستخدم يمكن له الاستعانة بالشركات العقارية أو المسوقين العقاريين من خلال النقر على نافذة &quot;الوسطاء العقاريين&quot; أما في نافذة &quot;خدمة التوثيق&quot;&nbsp; يمكن التعرف على أهم العملاء والشركات التي تعمل في مجال توثيق عقود البيع والايجار وإنجاز المعاملات العقارية أما نافذة &quot;الخريطة العقارية&quot; تتيح للمستخدم التعرف على العقارات المعروضة للبيع عبر اظهار خريطة بالأماكن.<br />\r\n<br />\r\n<a href=\"https://aqarito.com/\">عقاريتو </a>.. ابحث عن عقارك المفضل في السعودية مع المنصة الأولى في الوطن العربي لسوق العقارات ويتضمن أتاح عروض ( شقق للإيجار &ndash; فيلات للإيجارات &ndash; عمارة للإيجار &ndash; أرض للبيع &ndash; محل للإيجار &ndash; شقة للبيع &ndash; فيلات للبيع &ndash; عمارة للبيع ..) ويتح لك عرض أحدث العروض العقارية التي يقوم المستخدمين بإضافتها على الموقع.<br />\r\nكل اعلان بالموقع يتضمن عرض للعقار سواء كان للبيع أو الايجار مع صورة عن العقار ووصف دقيق والسعر المطلوب والعنوان بالتفاصيل حيث يسهل على الباحث عن عقار الوصول لطلبه بكل سهولة ويسر.</p>', '1700310134.webp,1700310134.webp', NULL, 177, '2023-11-18 12:22:15', '2024-12-09 16:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nameSite` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `href` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sites_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_guest`
--

DROP TABLE IF EXISTS `orders_guest`;
CREATE TABLE IF NOT EXISTS `orders_guest` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(90) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `id_site` bigint DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `facebook` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `snapchat` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `LinkedIn` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `is_approve` tinyint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` int DEFAULT NULL,
  `category` int DEFAULT NULL,
  `title` int DEFAULT NULL,
  `logo` int DEFAULT NULL,
  `mobile_number` int DEFAULT NULL,
  `phone_number` int DEFAULT NULL,
  `video` int DEFAULT NULL,
  `description` int DEFAULT NULL,
  `articale` int DEFAULT NULL,
  `subcategories` int DEFAULT NULL,
  `keyword` int DEFAULT NULL,
  `social` int DEFAULT NULL,
  `android` int DEFAULT NULL,
  `ios` int DEFAULT NULL,
  `views` int DEFAULT NULL,
  `priority` int DEFAULT NULL,
  `maploc` int DEFAULT NULL,
  `city` int DEFAULT NULL,
  `sites_count` int DEFAULT NULL,
  `products_count` int DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `is_free` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `code`, `href`, `category`, `title`, `logo`, `mobile_number`, `phone_number`, `video`, `description`, `articale`, `subcategories`, `keyword`, `social`, `android`, `ios`, `views`, `priority`, `maploc`, `city`, `sites_count`, `products_count`, `price`, `is_free`, `created_at`, `updated_at`, `status`) VALUES
(5, 'test', 'test-1', 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1, 1, 3, 2, NULL, 0, '2025-02-12 19:00:58', '2025-02-16 16:31:08', '1'),
(6, 'advance', 'advance', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1, 1, 10, 5, NULL, 0, '2025-02-13 10:06:27', '2025-02-13 10:06:27', '1'),
(7, 'Free', 'free', 1, 1, 1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 1, 1, NULL, NULL, 0, 1, 2, 1, NULL, 1, '2025-02-17 09:23:48', '2025-02-25 16:13:11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `packages_users`
--

DROP TABLE IF EXISTS `packages_users`;
CREATE TABLE IF NOT EXISTS `packages_users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `package_id` bigint UNSIGNED DEFAULT NULL,
  `total_sites_count` int DEFAULT NULL,
  `used_sites_count` int DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` int DEFAULT NULL,
  `category` int DEFAULT NULL,
  `title` int DEFAULT NULL,
  `logo` int DEFAULT NULL,
  `mobile_number` int DEFAULT NULL,
  `phone_number` int DEFAULT NULL,
  `video` int DEFAULT NULL,
  `description` int DEFAULT NULL,
  `articale` int DEFAULT NULL,
  `subcategories` int DEFAULT NULL,
  `keyword` int DEFAULT NULL,
  `social` int DEFAULT NULL,
  `android` int DEFAULT NULL,
  `ios` int DEFAULT NULL,
  `views` int DEFAULT NULL,
  `priority` int DEFAULT NULL,
  `maploc` int DEFAULT NULL,
  `city` int DEFAULT NULL,
  `sites_count` int DEFAULT NULL,
  `products_count` int DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `is_free` int DEFAULT NULL,
  `duration` int DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `duration_id` bigint UNSIGNED DEFAULT NULL,
  `duration_package_id` bigint UNSIGNED DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages_users`
--

INSERT INTO `packages_users` (`id`, `user_id`, `package_id`, `total_sites_count`, `used_sites_count`, `name`, `code`, `href`, `category`, `title`, `logo`, `mobile_number`, `phone_number`, `video`, `description`, `articale`, `subcategories`, `keyword`, `social`, `android`, `ios`, `views`, `priority`, `maploc`, `city`, `sites_count`, `products_count`, `price`, `is_free`, `duration`, `expire_date`, `created_at`, `updated_at`, `start_date`, `duration_id`, `duration_package_id`, `status`) VALUES
(6, 4, 6, 10, 0, 'advance', 'advance', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1, 1, 10, 5, '400.00', 0, 3, '2028-02-25 00:00:00', '2025-02-25 10:41:40', '2025-02-25 17:21:51', '2025-02-25 00:00:00', 3, 12, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_me`
--

DROP TABLE IF EXISTS `page_me`;
CREATE TABLE IF NOT EXISTS `page_me` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_me`
--

INSERT INTO `page_me` (`id`, `name`, `href`, `users_id`, `created_at`, `updated_at`) VALUES
(47, 'fdfd', 'https://gofffogle.com', 2, '2025-02-02 19:08:53', '2025-02-02 19:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('khaledamiramin@gmail.com', '$2y$10$VeK1NvA6guXz14KN0KWieO17kj/AltabwYLoM.3m.hJ0c6h4gMsSW', '2023-10-23 06:08:08'),
('sample@email.tst', '$2y$10$o9Idh0P9jopjCteEGFu7kONG17CwXn6Kqk4eHUznXnnZ8WBFdf2hm', '2023-11-05 13:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pinned_pages`
--

DROP TABLE IF EXISTS `pinned_pages`;
CREATE TABLE IF NOT EXISTS `pinned_pages` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinned_pages`
--

INSERT INTO `pinned_pages` (`id`, `page_name`, `href`, `title`, `keyword`, `content`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'عن وصلات', 'about-waslat', 'عن وصلات', 'وصلات', '<p>موقع وصلات هو أحد منتجات شركة&nbsp; السورية لخدمات الانترنت، أنشىء فى شهر نيسان عام 2013 ، وهو أول دليل مواقع على الإنترنت فى سورية،&nbsp; وأصبح الموقع الأول للعديد من المستخدمين .<br />\r\nيهدف موقع وصلات إلى أن يقدم للمستخدم خدمة دليل مواقع بسيطة ومفيدة . وهدف جميع العاملين فى موقع وصلات هو أنك تتمتع بتصفح أكثر راحة وسهولة .<br />\r\nوباعتبار وصلات هو أول دليل المواقع&nbsp; ، لذا فندعوك لتذكر رابط موقعنا www.waslat.com حتى تضمن الدخول الآمن للإنترنت . إذا كنت تفضل موقعنا وصلات&nbsp; فساعدنا فى نشره بين أصدقائك.</p>', NULL, '2023-02-23 10:52:10', '2023-02-23 10:52:10'),
(2, 'الأقتراحات', 'feedback', 'الأقتراحات', 'اقتراح', '<p>يمكنكم مراسلتنا وارسال ملاحظاتكم وتعليقاتكم على صفحتنا على فايسبوك</p>\r\n\r\n<p><a href=\"http://facebook.com/waslat.sy\">http://facebook.com/waslat.sy</a></p>', NULL, '2023-03-17 13:58:28', '2023-09-13 08:53:27'),
(3, 'إخلاء المسؤولية - هام', 'disclaimer2', 'إخلاء المسؤولية - هام', 'مسؤولية', '<p>&nbsp;&nbsp;&nbsp; كل المعلومات المقدمة في موقع وصلات من روابط مواقع ، صور ، فيديو ، لوجوهات ، وأيقونات الخ ، وانها ملكاً للغير ولا تنتمى بأي شكل من الأشكال لملكية شركة السورية لخدمات الانترنت وموقع وصلات بإستثناء لوجو وأيقون وصلات.</p>', NULL, '2023-03-17 14:10:43', '2023-03-17 14:10:43'),
(4, 'الخدمات الترويجية', 'adv', 'الخدمات الترويجية', 'اعلانات', '<p>الخطط الإعلانية<br />\r\n1- إضافة موقع ضمن الدليل مع مقال يتضمن باك لينك عدد 2 مقابل 25 دولار<br />\r\nمثال<br />\r\n<a href=\"https://waslat.com/I/haliva.com\">https://waslat.com/I/haliva.com</a><br />\r\n<a href=\"https://waslat.com/I/yalla-shoot-matches.com\">https://waslat.com/I/yalla-shoot-matches.com</a><br />\r\n2- تثبيت أيقونة لموقعك لمدة شهر ضمن الدولة التي تختارها مقابل 10 دولار<br />\r\n<br />\r\nللطلب والدفع من خلال موقعي خمسات وكفيل عبر الروابط التالية<br />\r\n<a href=\"http://https://khamsat.com/marketing/directory-submission/2032724\">https://khamsat.com/marketing/directory-submission/2032724</a><br />\r\n<a href=\"https://kafiil.com/service/87\">https://kafiil.com/service/87</a></p>', NULL, '2023-07-29 12:56:22', '2023-10-14 05:20:37'),
(5, 'في الصحافة', 'Journalism', 'في الصحافة', 'صحافة', '<p>شهبانيوز : <a href=\"https://www.shahbanews.com/n/137026.html\">وصلات .. أكبر محتوى رقمي على الشبكة يفتح أمامك الأبواب ليصلك إلى أهم المواقع</a></p>\r\n\r\n<p>مدونة ملحوظة : <a href=\"https://www.raghebnotes.com/?p=14359\">إطلاق موقع وصلات، أكبر دليل عربي للمواقع</a></p>\r\n\r\n<p>وكالة العرب الإخبارية : <a href=\"http://allarab.info/node/30793\">الإعلان عن أطلاق وصلات موريتانيا</a></p>\r\n\r\n<p>دام برس : <a href=\"https://www.dampress.net/index.php?page=show_det&amp;category_id=14&amp;id=26227\">إطلاق موقع وصلات سورية</a></p>', NULL, '2023-09-07 07:49:55', '2023-10-09 06:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `unit` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sequence` int DEFAULT NULL,
  `tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `site_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `category_p_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `currency` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `description`, `image`, `price`, `unit`, `status`, `sequence`, `tag`, `site_id`, `user_id`, `category_p_id`, `created_at`, `updated_at`, `currency`) VALUES
(4, 'ttt', 's', '<p>bhkhj</p>', NULL, '1.00', 'q', 'wait', 1, NULL, 17, 2, NULL, '2025-02-03 18:09:29', '2025-02-05 10:19:13', 'ee'),
(6, 'ahmad', 'p', '<p>tyhtyjtyj</p>', NULL, '10.00', 'tyty', 'wait', 4, NULL, 17, 2, NULL, '2025-02-03 18:41:40', '2025-02-03 18:41:40', 'p'),
(7, 'p11', 'p', '<p>lknlnlk</p>', '71738615472.png', '200.00', 'uu', 'wait', 1, NULL, 17, 2, NULL, '2025-02-03 18:44:32', '2025-02-03 18:44:32', '$'),
(8, 'lknl', 's', '<p>onn;</p>', '81738619636.webp', '100.00', 'oo', 'wait', 1, NULL, 17, 2, NULL, '2025-02-03 18:48:04', '2025-02-03 19:53:56', '$'),
(9, 'ssd', 's', '<p>sdvsd</p>', '91738620153.webp', '100.00', 'tt', 'wait', 2, NULL, 17, 2, NULL, '2025-02-03 20:02:33', '2025-02-03 20:02:34', 'sc'),
(10, 'براد 50 قدم', 'p', '<p>براد 50 قدم&nbsp;براد 20 قدم</p>', '101739107905.webp', '100.00', 'قطعة', 'wait', 2, NULL, 18, 2, NULL, '2025-02-09 11:31:45', '2025-02-10 15:47:07', '$'),
(11, 'براد 30 قدم', 'p', '<p>براد 30قدم&nbsp;براد 30 قدم</p>', '111739107984.webp', '150.00', 'قطعة', 'wait', 2, NULL, 18, 3, NULL, '2025-02-09 11:33:04', '2025-02-09 11:33:04', '$'),
(12, 'bbb', 'p', '<p>bbbb</p>', '121739201639.webp', '300.00', 'KG', 'wait', 1, NULL, 19, 2, NULL, '2025-02-10 13:33:11', '2025-02-10 13:33:59', '$'),
(14, 'موبيل', 'p', '<p>موبيل</p>', '141739798739.webp', '100.00', 'قطعة', 'wait', 1, NULL, 29, NULL, NULL, '2025-02-17 10:25:39', '2025-02-17 10:25:39', '$'),
(15, 'موبيل 2', 'p', '<p>موبيل</p>', '151739798783.webp', '200.00', 'قطعة', 'wait', NULL, NULL, 29, NULL, NULL, '2025-02-17 10:26:23', '2025-02-17 10:26:23', '$'),
(16, 'pro1', 'p', '<p>efceqfqewf</p>', NULL, '200.00', 'قطعة', 'wait', NULL, NULL, 30, 4, NULL, '2025-02-25 08:36:23', '2025-02-25 08:36:23', '$'),
(17, 'pro2', 'p', '<p>efceqfqewf</p>', NULL, '200.00', 'قطعة', 'wait', 1, NULL, 30, 4, NULL, '2025-02-25 08:36:56', '2025-02-25 08:36:56', '$');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p_categories`
--

DROP TABLE IF EXISTS `p_categories`;
CREATE TABLE IF NOT EXISTS `p_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cities_id` int UNSIGNED DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `articale` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `countries_id` int UNSIGNED DEFAULT NULL,
  `subcategories` int DEFAULT NULL,
  `keyword` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LinkedIn` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `android` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ios` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` bigint DEFAULT '0',
  `priority` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `confirmed` tinyint(1) DEFAULT '1',
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `city_id` bigint UNSIGNED DEFAULT NULL,
  `subcity_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `package_user_id` bigint UNSIGNED DEFAULT NULL,
  `used_products_count` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sites_category_id_foreign` (`category_id`),
  KEY `sites_subcategories_foreign` (`subcategories`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `site_name`, `href`, `category_id`, `title`, `logo`, `mobile_number`, `phone_number`, `video`, `cities_id`, `description`, `articale`, `countries_id`, `subcategories`, `keyword`, `facebook`, `twitter`, `instagram`, `snapchat`, `youtube`, `telegram`, `LinkedIn`, `android`, `ios`, `views`, `priority`, `created_at`, `updated_at`, `confirmed`, `latitude`, `longitude`, `city_id`, `subcity_id`, `user_id`, `package_user_id`, `used_products_count`) VALUES
(29, 'hospital', 'https:/hospital.com', 2, 'hospital', '1739797381.webp', '09595959595', '12123243', 'رهي', NULL, '<p>نبذة عن الشركة</p>', '<p>مقال عن الشركة</p>', NULL, 37, 'صحة,علاج', 'face.com', 'twit.com', 'insta', 'snap', 'yout', 'teleg', NULL, 'androif', 'ios', 0, 1, '2025-02-17 09:47:40', '2025-02-17 10:26:23', 1, '36.2331968', '37.1145630', 3, NULL, 2, NULL, 2),
(30, 'Machine', 'https://Machine.com', 1, 'Machine', NULL, '09595959595', '02149596595', 'ss', NULL, '<p>Machine&nbsp;Machine</p>', '<p>Machine</p>', NULL, 35, 'صناعة', 'face', 'twit.com', 'insta', 'snap', 'yputyb', 'telegr', NULL, 'android', 'ios', 0, 1, '2025-02-17 19:33:08', '2025-02-25 17:21:51', 1, '36.1988499', '37.2244263', 3, 6, 4, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sites_tag`
--

DROP TABLE IF EXISTS `sites_tag`;
CREATE TABLE IF NOT EXISTS `sites_tag` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `sites_id` int UNSIGNED DEFAULT NULL,
  `tag_id` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites_tag`
--

INSERT INTO `sites_tag` (`id`, `sites_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(9, 29, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sittings`
--

DROP TABLE IF EXISTS `sittings`;
CREATE TABLE IF NOT EXISTS `sittings` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nameWebsite` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkWebsite` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keywords` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `socialMidiaFacebook` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialMidiaTelegram` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialMidiaInstagram` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialMidiaYoutube` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insertQuick` tinyint DEFAULT '0',
  `favicon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_default` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Is_hide` tinyint(1) NOT NULL DEFAULT '0',
  `footerText` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sittings`
--

INSERT INTO `sittings` (`id`, `nameWebsite`, `linkWebsite`, `Keywords`, `Description`, `socialMidiaFacebook`, `socialMidiaTelegram`, `socialMidiaInstagram`, `socialMidiaYoutube`, `insertQuick`, `favicon`, `image_default`, `Is_hide`, `footerText`, `created_at`, `updated_at`) VALUES
(1, 'وصلات .. دليل الشركات العربية', 'https://waslat.com/brand/', 'دليل الشركات العربية,دليل شركات الامارات العربية المتحدة,دليل الشركات والمؤسسات بالمملكة العربية السعودية,دليل شركات العرب,دليل شركات قطر,دليل شركات الكويت,دليل شركات التأمين العربية,دليل الشركات المصرية,الشركات في السعودية,الشركات في مصر,الشركات في قطر,الشركات في الكويت,الشركات في الامارات,الشركات في البحرين,الشركات في سورية,الشركات,العربية,الوطن العربي,دليل', 'دليل الشركات العربية دليل تجاري متخصص يضم الشركات المتواجدة في السوق العربية حسب الدولة و القطاعات الصناعية والتجارية والخدمية', 'https://www.facebook.com/waslat.sy', NULL, NULL, NULL, 0, '1779011183564736.webp', '1784565113517868.webp', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcities`
--

DROP TABLE IF EXISTS `subcities`;
CREATE TABLE IF NOT EXISTS `subcities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subname` varchar(50) COLLATE utf8mb3_bin NOT NULL,
  `city_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `href` varchar(50) COLLATE utf8mb3_bin NOT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `subcities`
--

INSERT INTO `subcities` (`id`, `subname`, `city_id`, `created_at`, `updated_at`, `href`, `latitude`, `longitude`) VALUES
(1, 'دمشق', 1, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'damascus', '33.5138000', '36.2765000'),
(2, 'دوما', 2, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'douma', '33.5711000', '36.4033000'),
(3, 'حرستا', 2, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'harasta', '33.5667000', '36.3667000'),
(4, 'التل', 2, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-tal', '33.6100000', '36.3100000'),
(5, 'قطنا', 2, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'qatana', '33.4333000', '36.3333000'),
(6, 'حلب', 3, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'aleppo', '36.2021000', '37.1343000'),
(7, 'منبج', 3, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'manbij', '36.5287000', '37.9550000'),
(8, 'اعزاز', 3, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'azaz', '36.5862000', '37.0467000'),
(9, 'السفيرة', 3, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'as-Safira', '36.0769000', '37.3725000'),
(10, 'حمص', 4, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'homs', '34.7324000', '36.7132000'),
(11, 'تدمر', 4, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'palmyra', '34.5560000', '38.2739000'),
(12, 'الرستن', 4, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-rastan', '34.9267000', '36.7417000'),
(13, 'القصير', 4, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-qusayr', '34.5097000', '36.5739000'),
(14, 'حماه', 5, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'hama', '35.1318000', '36.7575000'),
(15, 'السقيلبية', 5, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-suqaylabiyah', '35.3667000', '36.4000000'),
(16, 'مصياف', 5, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'masyaf', '35.0667000', '36.3333000'),
(17, 'الغاب', 5, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-ghab', '35.2500000', '36.5000000'),
(18, 'اللاذقية', 6, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'latakia', '35.5176000', '35.7833000'),
(19, 'جبلة', 6, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'jableh', '35.3667000', '35.9333000'),
(20, 'القرداحة', 6, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'qardaha', '35.4333000', '36.0667000'),
(21, 'الحفة', 6, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-haffah', '35.6000000', '36.0333000'),
(22, 'طرطوس', 7, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'tartus', '34.8950000', '35.8867000'),
(23, 'بانياس', 7, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'banias', '35.1833000', '35.9500000'),
(24, 'الشيخ بدر', 7, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'sheikh-bader', '35.0667000', '35.9333000'),
(25, 'دريكيش', 7, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'drekish', '34.9833000', '36.1333000'),
(26, 'إدلب', 8, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'idlib', '35.9297000', '36.6317000'),
(27, 'أريحا', 8, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'ariha', '35.8167000', '36.6000000'),
(28, 'معرة النعمان', 8, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'maarat-al-numan', '35.6500000', '36.6667000'),
(29, 'جسر الشغور', 8, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'jisr-al-shughur', '35.8167000', '36.3167000'),
(30, 'الحسكة', 9, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'hasakah', '36.5024000', '40.7467000'),
(31, 'القامشلي', 9, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'qamishli', '37.0500000', '41.2167000'),
(32, 'المالكية', 9, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-malikiyah', '37.1667000', '42.1333000'),
(33, 'رأس العين', 9, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'ras-al-ayn', '36.8500000', '40.0667000'),
(34, 'دير الزور', 10, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'deir-ez-zor', '35.3333000', '40.1500000'),
(35, 'البوكمال', 10, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-bukamal', '34.4667000', '40.9333000'),
(36, 'الميادين', 10, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-mayadin', '35.0167000', '40.4500000'),
(37, 'موحسن', 10, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'mohasan', '34.8833000', '40.5667000'),
(38, 'الرقة', 11, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'raqqa', '35.9594000', '39.0419000'),
(39, 'الثورة', 11, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'al-thawra', '35.8333000', '38.5333000'),
(40, 'تلبيسة', 11, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'talbisah', '34.8333000', '38.5500000'),
(41, 'معدان', 11, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'maadan', '35.7667000', '39.1000000'),
(42, 'السويداء', 12, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'sweida', '32.7083000', '36.5667000'),
(43, 'صلخد', 12, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'salkhad', '32.5000000', '36.5667000'),
(44, 'شهبا', 12, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'shahba', '32.8500000', '36.6333000'),
(45, 'قم', 12, '2025-02-01 22:44:19', '2025-02-05 15:31:15', 'qanawat', '32.9167000', '36.3333000'),
(46, 'درعا', 13, '2025-02-01 22:44:20', '2025-02-05 15:31:15', 'daraa', '32.6252000', '36.1025000'),
(47, 'ازرع', 13, '2025-02-01 22:44:20', '2025-02-05 15:31:15', 'izra', '32.8667000', '36.2500000'),
(48, 'نوى', 13, '2025-02-01 22:44:20', '2025-02-05 15:31:15', 'nawa', '32.9333000', '36.0500000'),
(49, 'الشيخ مسكين', 13, '2025-02-01 22:44:20', '2025-02-05 15:31:15', 'sheikh-miskin', '32.8167000', '36.1667000'),
(50, 'القنيطرة', 14, '2025-02-01 22:44:20', '2025-02-05 15:31:15', 'quneitra', '33.1253000', '35.8247000'),
(51, 'خان أرنبة', 14, '2025-02-01 22:44:20', '2025-02-05 15:31:15', 'khan-arnabeh', '33.0667000', '35.7833000'),
(52, 'فيق', 14, '2025-02-01 22:44:20', '2025-02-05 15:31:15', 'fiq', '32.7833000', '35.7000000'),
(53, 'البطيحة', 14, '2025-02-01 22:44:20', '2025-02-05 15:31:15', 'al-baath', '33.2000000', '35.8500000');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(9, 'صحة', '2025-02-17 10:03:01', '2025-02-17 10:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `triple_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint NOT NULL DEFAULT '0',
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `used_sites_count` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `en_name` (`en_name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `en_name`, `triple_name`, `birthday`, `phone`, `visible`, `photo`, `facebook_link`, `whatsapp_link`, `telegram_link`, `created_at`, `updated_at`, `used_sites_count`) VALUES
(1, '', 'ah711043738med@gmail.com', NULL, '$2y$10$cermq6KcR7egi6D99P/.6uOxaKGVdbCY7LMEgcJEXYQMdYIVd0IOe', NULL, 'Ahmed', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '2024-06-25 16:25:51', '2024-06-25 16:25:51', NULL),
(2, '', 'ddd@gmail.com', NULL, '$2y$10$.JNSXBv8BWrlq./chSM.ZOElhS2ohdP7wdb3mwIAeT7BIt9QqGkua', NULL, 'ahmad', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '2025-01-31 16:36:28', '2025-02-17 09:47:40', 1),
(3, '', 'test@gmail.com', NULL, '$2y$10$MM4NRBY70iABHqqkm1lmOOQlkY0gPUYvLXnnt2JhQDTuB.5hs.xt6', NULL, 'test', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '2025-02-03 11:49:51', '2025-02-17 09:44:17', 0),
(4, '', 'aaa@aaa.com', NULL, '$2y$10$3sjC1Ts07N/u1ksM2CYLtee1lHixgQ3.g6aR/KSSnqRdXwhN7FoCS', NULL, 'scasc', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '2025-02-04 08:12:21', '2025-02-17 19:33:08', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcities`
--
ALTER TABLE `subcities`
  ADD CONSTRAINT `subcities_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
