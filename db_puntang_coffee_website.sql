/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 11.8.1-MariaDB : Database - db_puntang_coffee_website
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_puntang_coffee_website` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci */;

USE `db_puntang_coffee_website`;

/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache` */

/*Table structure for table `cache_locks` */

DROP TABLE IF EXISTS `cache_locks`;

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache_locks` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `job_batches` */

DROP TABLE IF EXISTS `job_batches`;

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
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `job_batches` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(9,'0001_01_01_000000_create_users_table',1),
(10,'0001_01_01_000001_create_cache_table',1),
(11,'0001_01_01_000002_create_jobs_table',1),
(12,'2026_03_06_213859_create_mst_modules_table',1),
(13,'2026_03_06_213941_create_mst_module_routes_table',1),
(14,'2026_03_06_215151_create_mst_menus_table',1),
(15,'2026_03_06_215230_create_mst_permissions_table',1),
(16,'2026_03_06_223441_create_mst_template_colors_table',2),
(17,'2026_03_06_223959_create_mst_template_settings_table',3),
(18,'2026_03_13_225333_create_mst_role_permissions_table',4);

/*Table structure for table `mst_header` */

DROP TABLE IF EXISTS `mst_header`;

CREATE TABLE `mst_header` (
  `msh_id` int(11) NOT NULL AUTO_INCREMENT,
  `msh_title` varchar(255) DEFAULT NULL,
  `msh_content` text DEFAULT NULL,
  `msh_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`msh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `mst_header` */

insert  into `mst_header`(`msh_id`,`msh_title`,`msh_content`,`msh_image`) values 
(1,'About Us','The perfect choice for your next project','gmb_f4.png'),
(2,'Processing Methods','The perfect choice for your next project','gmb_f9.png');

/*Table structure for table `mst_menus` */

DROP TABLE IF EXISTS `mst_menus`;

CREATE TABLE `mst_menus` (
  `msmnu_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `msmnu_module_id` bigint(20) unsigned NOT NULL,
  `msmnu_name` varchar(255) NOT NULL,
  `msmnu_route` varchar(255) NOT NULL,
  `msmnu_icon` varchar(255) DEFAULT NULL,
  `msmnu_parent` bigint(20) unsigned DEFAULT NULL,
  `msmnu_order` int(11) NOT NULL DEFAULT 0,
  `msmnu_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`msmnu_id`),
  KEY `mst_menus_msmnu_module_id_foreign` (`msmnu_module_id`),
  CONSTRAINT `mst_menus_msmnu_module_id_foreign` FOREIGN KEY (`msmnu_module_id`) REFERENCES `mst_modules` (`msm_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mst_menus` */

insert  into `mst_menus`(`msmnu_id`,`msmnu_module_id`,`msmnu_name`,`msmnu_route`,`msmnu_icon`,`msmnu_parent`,`msmnu_order`,`msmnu_status`,`created_at`,`updated_at`) values 
(1,1,'Home','home.index',NULL,NULL,1,1,'2026-03-07 04:55:31','2026-03-07 04:55:31'),
(5,2,'About Us','about.index',NULL,NULL,2,1,'2026-03-07 07:25:41',NULL),
(6,2,'Profil Perusahaan NSMC','profil.index',NULL,NULL,1,0,NULL,NULL),
(7,2,'CSR Program','csr.index',NULL,NULL,2,0,NULL,NULL),
(8,2,'Coffee Puntang History','history.index',NULL,NULL,3,0,NULL,NULL),
(9,3,'Product','product.index',NULL,NULL,3,1,NULL,NULL),
(10,4,'Activity & News','activity.index',NULL,NULL,4,1,NULL,NULL),
(11,5,'Contact Us','contact.index',NULL,NULL,5,1,NULL,NULL),
(12,3,'Variant of Coffee Product','variant.index',NULL,NULL,1,0,NULL,NULL),
(13,3,'Coffee Farm','farm.index',NULL,NULL,2,0,NULL,NULL),
(14,4,'Event & Contest','event.index',NULL,NULL,1,0,NULL,NULL),
(15,4,'Article of Coffee Puntang','article.index',NULL,NULL,2,0,NULL,NULL),
(16,6,'Dashboard','dashboard.index','feather icon-home',NULL,1,1,'2026-03-14 22:54:46',NULL);

/*Table structure for table `mst_module_routes` */

DROP TABLE IF EXISTS `mst_module_routes`;

CREATE TABLE `mst_module_routes` (
  `msr_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `msr_module_id` bigint(20) unsigned NOT NULL,
  `msr_name` varchar(255) NOT NULL,
  `msr_uri` varchar(255) NOT NULL,
  `msr_action` varchar(255) NOT NULL,
  `msr_controller` varchar(255) NOT NULL,
  `msr_type` varchar(255) DEFAULT NULL,
  `msr_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`msr_id`),
  KEY `mst_module_routes_msr_module_id_foreign` (`msr_module_id`),
  CONSTRAINT `mst_module_routes_msr_module_id_foreign` FOREIGN KEY (`msr_module_id`) REFERENCES `mst_modules` (`msm_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mst_module_routes` */

insert  into `mst_module_routes`(`msr_id`,`msr_module_id`,`msr_name`,`msr_uri`,`msr_action`,`msr_controller`,`msr_type`,`msr_status`,`created_at`,`updated_at`) values 
(3,1,'home.index','/','index','HomeController','index',1,'2026-03-07 04:55:21','2026-03-07 04:55:21'),
(4,2,'about.index','/about','index','AboutController','index',1,'2026-03-07 07:27:18',NULL),
(5,2,'profil.index','/profil','index','ProfilController','index',1,NULL,NULL),
(6,2,'csr.index','/csr','index','CsrController','index',1,NULL,NULL),
(7,2,'history.index','/history','index','HistoryController','index',1,NULL,NULL),
(8,3,'product.index','/product','index','ProductController','index',1,NULL,NULL),
(9,3,'variant.index','/variant-coffee','index','VariantController','index',1,NULL,NULL),
(10,3,'farm.index','/coffee-farm','index','FarmController','index',1,NULL,NULL),
(11,4,'activity.index','/activity-news','index','ActivityController','index',1,NULL,NULL),
(12,4,'event.index','/event','index','EventController','index',1,NULL,NULL),
(13,4,'article.index','/article','index','ArticleController','index',1,NULL,NULL),
(14,5,'contact.index','/contact','index','ContactController','index',1,NULL,NULL),
(15,6,'dashboard.index','/dashboard','index','Administrator\\DashboardController','index',1,'2026-03-14 22:54:26',NULL);

/*Table structure for table `mst_modules` */

DROP TABLE IF EXISTS `mst_modules`;

CREATE TABLE `mst_modules` (
  `msm_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `msm_name` varchar(255) NOT NULL,
  `msm_prefix` varchar(255) DEFAULT NULL,
  `msm_middleware` varchar(255) DEFAULT NULL,
  `msm_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`msm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mst_modules` */

insert  into `mst_modules`(`msm_id`,`msm_name`,`msm_prefix`,`msm_middleware`,`msm_status`,`created_at`,`updated_at`) values 
(1,'Home','','web',1,'2026-03-07 04:55:12','2026-03-07 04:55:12'),
(2,'About',NULL,'web',1,'2026-03-07 07:26:22',NULL),
(3,'Product',NULL,'web',1,'2026-03-14 05:31:26',NULL),
(4,'ActivityNews',NULL,'web',1,'2026-03-14 05:31:29',NULL),
(5,'Contact',NULL,'web',1,'2026-03-14 05:31:31',NULL),
(6,'Dashboard','administrator','admin',1,'2026-03-14 22:54:11',NULL);

/*Table structure for table `mst_permissions` */

DROP TABLE IF EXISTS `mst_permissions`;

CREATE TABLE `mst_permissions` (
  `msp_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `msp_name` varchar(255) NOT NULL,
  `msp_route` varchar(255) NOT NULL,
  `msp_module_id` bigint(20) unsigned NOT NULL,
  `msp_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`msp_id`),
  KEY `mst_permissions_msp_module_id_foreign` (`msp_module_id`),
  CONSTRAINT `mst_permissions_msp_module_id_foreign` FOREIGN KEY (`msp_module_id`) REFERENCES `mst_modules` (`msm_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mst_permissions` */

insert  into `mst_permissions`(`msp_id`,`msp_name`,`msp_route`,`msp_module_id`,`msp_status`,`created_at`,`updated_at`) values 
(1,'View Home','home.index',1,1,'2026-03-07 04:55:40','2026-03-07 04:55:40'),
(2,'View About','about.index',2,1,NULL,NULL),
(3,'View Profil','profil.index',2,1,NULL,NULL),
(4,'View CSR','csr.index',2,1,NULL,NULL),
(5,'View History','history.index',2,1,NULL,NULL),
(6,'View Product','product.index',3,1,NULL,NULL),
(7,'View Variant','variant.index',3,1,NULL,NULL),
(8,'View Coffee Farm','farm.index',3,1,NULL,NULL),
(9,'View Activity','activity.index',4,1,NULL,NULL),
(10,'View Event','event.index',4,1,NULL,NULL),
(11,'View Article','article.index',4,1,NULL,NULL),
(12,'View Contact','contact.index',5,1,NULL,NULL);

/*Table structure for table `mst_role_permissions` */

DROP TABLE IF EXISTS `mst_role_permissions`;

CREATE TABLE `mst_role_permissions` (
  `msrp_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `msrp_role_id` bigint(20) unsigned NOT NULL,
  `msrp_permission_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`msrp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mst_role_permissions` */

insert  into `mst_role_permissions`(`msrp_id`,`msrp_role_id`,`msrp_permission_id`,`created_at`,`updated_at`) values 
(1,2,1,NULL,NULL);

/*Table structure for table `mst_site_settings` */

DROP TABLE IF EXISTS `mst_site_settings`;

CREATE TABLE `mst_site_settings` (
  `mss_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mss_site_name` varchar(200) DEFAULT NULL,
  `mss_company_name` varchar(200) DEFAULT NULL,
  `mss_tagline` varchar(200) DEFAULT NULL,
  `mss_description` text DEFAULT NULL,
  `mss_logo` varchar(255) DEFAULT NULL,
  `mss_favicon` varchar(255) DEFAULT NULL,
  `mss_email` varchar(200) DEFAULT NULL,
  `mss_phone` varchar(50) DEFAULT NULL,
  `mss_whatsapp` varchar(50) DEFAULT NULL,
  `mss_address` text DEFAULT NULL,
  `mss_address_min` text DEFAULT NULL,
  `mss_instagram` varchar(200) DEFAULT NULL,
  `mss_facebook` varchar(200) DEFAULT NULL,
  `mss_youtube` varchar(200) DEFAULT NULL,
  `mss_maps` text DEFAULT NULL,
  `mss_status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mss_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `mst_site_settings` */

insert  into `mst_site_settings`(`mss_id`,`mss_site_name`,`mss_company_name`,`mss_tagline`,`mss_description`,`mss_logo`,`mss_favicon`,`mss_email`,`mss_phone`,`mss_whatsapp`,`mss_address`,`mss_address_min`,`mss_instagram`,`mss_facebook`,`mss_youtube`,`mss_maps`,`mss_status`,`created_at`,`updated_at`) values 
(1,'PUNTANG COFFEE HOMEPAGE','PT NIPPON STEEL CHEMICAL AND MATERIAL INDONESIA','CSR – ENVIRONMENTAL PILLAR',NULL,NULL,NULL,'puntang@gmail.com','0892-2222-2222','0892-2222-2222','l. Tekno Raya No.3 Blok E3 A&B, Pasirgombong, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530','jl. Tekno Raya No.3 Blok E3 A&B, Pasirgombong',NULL,NULL,NULL,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.852742485629!2d107.15796139999999!3d-6.283080900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6984d228935473%3A0x86911883356a3270!2sNippon%20Steel%20Chemical%20And%20Material%20Indonesia!5e0!3m2!1sid!2sid!4v1773457438944!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>',1,NULL,NULL);

/*Table structure for table `mst_template_colors` */

DROP TABLE IF EXISTS `mst_template_colors`;

CREATE TABLE `mst_template_colors` (
  `mstc_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mstc_template` varchar(255) NOT NULL,
  `mstc_key` varchar(255) NOT NULL,
  `mstc_value` varchar(255) NOT NULL,
  `mstc_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mstc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mst_template_colors` */

/*Table structure for table `mst_template_settings` */

DROP TABLE IF EXISTS `mst_template_settings`;

CREATE TABLE `mst_template_settings` (
  `mts_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mts_template` varchar(255) NOT NULL,
  `mts_group` varchar(255) DEFAULT NULL,
  `mts_key` varchar(255) NOT NULL,
  `mts_value` text DEFAULT NULL,
  `mts_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mts_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mst_template_settings` */

insert  into `mst_template_settings`(`mts_id`,`mts_template`,`mts_group`,`mts_key`,`mts_value`,`mts_status`,`created_at`,`updated_at`) values 
(1,'landing','color','primary-color','#FFFFFF',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(2,'landing','color','secondary-color','#121D23',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(3,'landing','color','text-color','#CECECE',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(4,'landing','color','accent-color','#C9A581',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(5,'landing','color','accent-secondary-color','#E4CCB4',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(6,'landing','color','divider-color','#FFFFFF24',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(7,'landing','color','dark-divider-color','#FFFFFF1A',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(8,'landing','color','error-color','rgb(230, 87, 87)',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(9,'landing','font','default-font','\"Jost\", serif',1,'2026-03-07 05:41:08','2026-03-07 05:41:08'),
(10,'landing','font','accent-font','\"Forum\", serif',1,'2026-03-07 05:41:08','2026-03-07 05:41:08');

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values 
('KMw3bfZljHH01qIGMwowL2QUIYTiNhS2grooN5eo',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlBQdUpzR1RMVW9ESWpQdG52U2ZFUUlGaEVKMFpBcnJYcmR3Z0ZyUSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vcHVudGFuZy1jb2ZmZWUtY29tcGFueS5sb2NhbC1rZ2RyL3Byb2dyYW0iO3M6NToicm91dGUiO3M6NzoicHJvZ3JhbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1778439135);

/*Table structure for table `theme_settings` */

DROP TABLE IF EXISTS `theme_settings`;

CREATE TABLE `theme_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `theme_settings` */

insert  into `theme_settings`(`id`,`name`,`value`) values 
(1,'border-radius','4px'),
(2,'border-radius2x','8px'),
(3,'default','#777'),
(4,'primary','#6F4E37'),
(5,'primary-100','#5d422f'),
(6,'primary-200','#533b2a'),
(7,'primary-300','#4a3425'),
(8,'primary--100','#816048'),
(9,'primary--200','#8b6a52'),
(10,'primary--300','#96745c'),
(11,'primary-rgba-10','rgba(111, 78, 55, 0.1)'),
(12,'primary-rgba-20','rgba(111, 78, 55, 0.2)'),
(13,'primary-rgba-30','rgba(111, 78, 55, 0.3)'),
(14,'primary-rgba-40','rgba(111, 78, 55, 0.4)'),
(15,'primary-rgba-50','rgba(111, 78, 55, 0.5)'),
(16,'secondary','#C68642'),
(17,'secondary-100','#b3773a'),
(18,'secondary-200','#a86f36'),
(19,'secondary-300','#9c6731'),
(20,'secondary--100','#d1975a'),
(21,'secondary--200','#d9a168'),
(22,'secondary--300','#e0ab75'),
(23,'tertiary','#F3E9DC'),
(24,'tertiary-100','#e4d8c8'),
(25,'tertiary-200','#dcd0c0'),
(26,'tertiary-300','#d4c8b8'),
(27,'tertiary--100','#f6ede2'),
(28,'tertiary--200','#f8f1e7'),
(29,'tertiary--300','#fbf5ec'),
(30,'quaternary','#3E2C23'),
(31,'quaternary-100','#34251d'),
(32,'quaternary-200','#2e2119'),
(33,'quaternary-300','#281c16'),
(34,'quaternary--100','#4a362b'),
(35,'quaternary--200','#523c30'),
(36,'quaternary--300','#5a4336'),
(37,'dark','#2B1D17'),
(38,'dark-100','#231813'),
(39,'dark-200','#1c1410'),
(40,'dark-300','#150f0c'),
(41,'light','#FFF8F0'),
(42,'light-100','#f5ede5'),
(43,'light-200','#efe6dd'),
(44,'light-300','#e8dfd6'),
(45,'primary-inverse','#FFF'),
(46,'secondary-inverse','#FFF'),
(47,'tertiary-inverse','#FFF'),
(48,'quaternary-inverse','#FFF'),
(49,'dark-inverse','#FFF'),
(50,'light-inverse','#777'),
(51,'grey','#969696'),
(52,'grey-100','#f4f4f4'),
(53,'grey-200','#eaeaea'),
(54,'grey-300','#e5e5e5'),
(55,'grey-400','#e0e0e0'),
(56,'grey-500','#dbdbdb'),
(57,'grey-600','#cecece'),
(58,'grey-700','#c1c1c1'),
(59,'grey-800','#a8a8a8'),
(60,'grey-900','#8e8e8e'),
(61,'grey-1000','#757575'),
(62,'header-bg-color','#2B1D17'),
(63,'bg-warm','#F3E4C9');

/*Table structure for table `trx_about` */

DROP TABLE IF EXISTS `trx_about`;

CREATE TABLE `trx_about` (
  `tas_id` int(11) NOT NULL AUTO_INCREMENT,
  `tas_title` varchar(255) DEFAULT NULL,
  `tas_content` mediumtext DEFAULT NULL,
  `tas_image` text DEFAULT NULL,
  PRIMARY KEY (`tas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_about` */

insert  into `trx_about`(`tas_id`,`tas_title`,`tas_content`,`tas_image`) values 
(1,'-- From Coffee Beans a Life Raises –-','What once began as a struggle for survival through illegal hunting, forest encroachment, and uncontrolled logging has transformed into a journey of sustainability and hope for the people of Mount Puntang. In 2017, after facing environmental damage, floods, disrupted wildlife ecosystems, and social challenges, the community received a 306.12-hectare social forestry partnership permit from the Indonesian Ministry of Environment and Forestry. This initiative led to the establishment of LMDH Bukit Amanah Gunung Puntang on October 26, 2017.','f1.jpeg,f2.png,f3.jpeg,f4.jpg'),
(2,NULL,'Located in Campakamulya Village, Cimaung District, Bandung Regency, West Java, the community—led by Deni Sofian Dimyati—is committed to environmental preservation through sustainable coffee cultivation using Green Farming methods. By minimizing synthetic chemicals and utilizing organic fertilizers made from coffee cherry skins and livestock waste, the community promotes ecosystem sustainability, human health, and the production of high-quality coffee with authentic character.',NULL),
(3,NULL,NULL,'f1.jpeg,f2.png,f3.jpeg,f4.jpg');

/*Table structure for table `trx_csr` */

DROP TABLE IF EXISTS `trx_csr`;

CREATE TABLE `trx_csr` (
  `trc_id` int(11) NOT NULL AUTO_INCREMENT,
  `trc_title` varchar(255) DEFAULT NULL,
  `trc_content` mediumtext DEFAULT NULL,
  `trc_image` text DEFAULT NULL,
  `trc_thems_image` int(11) DEFAULT NULL,
  `trc_created_date` datetime DEFAULT NULL,
  `trc_created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`trc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_csr` */

/*Table structure for table `trx_event` */

DROP TABLE IF EXISTS `trx_event`;

CREATE TABLE `trx_event` (
  `tre_id` int(11) NOT NULL AUTO_INCREMENT,
  `tre_code` varchar(255) DEFAULT NULL,
  `tre_title` varchar(255) DEFAULT NULL,
  `tre_content` mediumtext DEFAULT NULL,
  `tre_image` text DEFAULT NULL,
  `tre_date_event` date DEFAULT NULL,
  `tre_created_date` datetime DEFAULT NULL,
  `tre_created_by` int(11) DEFAULT NULL,
  `tre_updated_date` datetime DEFAULT NULL,
  `tre_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`tre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_event` */

insert  into `trx_event`(`tre_id`,`tre_code`,`tre_title`,`tre_content`,`tre_image`,`tre_date_event`,`tre_created_date`,`tre_created_by`,`tre_updated_date`,`tre_updated_by`) values 
(1,'E000001','Specialty Coffee Assocation of America Expo','What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.','f1.jpeg','2026-04-29','2026-04-29 08:20:30',1,NULL,NULL),
(2,'E000002','Events in global markets on the MUSIAD agenda (Müstakil Sanayi ve Adamlar Dernei)','What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.','f1.jpeg','2026-04-29','2026-05-11 00:52:18',1,NULL,NULL),
(3,'E000003','Indonesia Spice Up The World 2024','What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.','f1.jpeg','2026-04-29','2026-05-11 00:52:20',1,NULL,NULL);

/*Table structure for table `trx_home` */

DROP TABLE IF EXISTS `trx_home`;

CREATE TABLE `trx_home` (
  `trh_id` int(11) NOT NULL AUTO_INCREMENT,
  `trh_code` varchar(255) DEFAULT NULL,
  `trh_title` varchar(255) DEFAULT NULL,
  `trh_content` mediumtext DEFAULT NULL,
  `trh_type_image` int(11) DEFAULT NULL,
  `trh_image` text DEFAULT NULL,
  `trh_status` int(11) DEFAULT NULL,
  `trh_created_date` datetime DEFAULT NULL,
  `trh_created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`trh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_home` */

insert  into `trx_home`(`trh_id`,`trh_code`,`trh_title`,`trh_content`,`trh_type_image`,`trh_image`,`trh_status`,`trh_created_date`,`trh_created_by`) values 
(1,'H000001','Highlight of products knowledge','Originating from the highlands of Mount Puntang, every Puntang Wangi coffee bean is cultivated at an ideal altitude of 1,250–1,500 meters above sea level. The cool mountain climate, mineral-rich soil, and the dedicated care of local farmers who grow the coffee naturally without chemical substances create a flavor profile that is unique, complex, and authentic.',1,'gmb_f2.png,gmb_f8.jpg,gmb_f3.png',1,'2026-04-30 23:55:09',1),
(2,'H000002','International proof','Puntang coffee, particularly the Yellow Bourbon variety, achieved world champion recognition at the Specialty Coffee Association of America Expo held in Atlanta, United States, in April 2016.\r\nThe quality of Puntang Wangi coffee remains our highest commitment in creating a balanced flavor profile that we continuously strive to introduce to the international market through various exhibitions and showcases held in countries such as Algeria, Qatar, and Turkey.',2,'gmb_f8.png,gmb_f20.png',1,'2026-04-30 23:55:33',1);

/*Table structure for table `trx_home_slide` */

DROP TABLE IF EXISTS `trx_home_slide`;

CREATE TABLE `trx_home_slide` (
  `ths_id` int(11) NOT NULL AUTO_INCREMENT,
  `ths_image` varchar(255) DEFAULT NULL,
  `ths_text_1` text DEFAULT NULL,
  `ths_text_2` text DEFAULT NULL,
  `ths_text_3` text DEFAULT NULL,
  `ths_created_by` int(11) DEFAULT NULL,
  `ths_created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ths_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_home_slide` */

insert  into `trx_home_slide`(`ths_id`,`ths_image`,`ths_text_1`,`ths_text_2`,`ths_text_3`,`ths_created_by`,`ths_created_date`) values 
(1,'gmb_f1.png','<p><strong>DO YOU NEED ANEW </strong><i><strong>KGDR</strong></i></p>','<p><strong>DO YOU NEED ANEW </strong><i><strong>KGDR</strong></i></p>','<p><strong>DO YOU NEED ANEW </strong><i><strong>KGDR</strong></i></p>',1,'2026-05-01 14:19:01'),
(2,'gmb_f3.png','WE WORK HARD AND PORTO HAS','PUNTANG COFFEE','Trusted by over <strong class=\"text-color-light\">30,000</strong> satisfied users, Porto is a huge success in the one of largest world\'s MarketPlace.',1,'2026-05-01 14:20:10'),
(3,'gmb_f8.png','<p><strong>WE CREATE DESIGNS, WE ARE</strong></p>','<p>PUNTANG COFFEE</p>','<p>The best choice for your new website</p>',NULL,NULL);

/*Table structure for table `trx_package_product` */

DROP TABLE IF EXISTS `trx_package_product`;

CREATE TABLE `trx_package_product` (
  `tpp_id` int(11) NOT NULL AUTO_INCREMENT,
  `tpp_name` varchar(255) DEFAULT NULL,
  `tpp_description` mediumtext DEFAULT NULL,
  `tpp_image` varchar(255) DEFAULT NULL,
  `tpp_status` int(11) DEFAULT NULL,
  `tpp_created_by` int(11) DEFAULT NULL,
  `tpp_created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`tpp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_package_product` */

insert  into `trx_package_product`(`tpp_id`,`tpp_name`,`tpp_description`,`tpp_image`,`tpp_status`,`tpp_created_by`,`tpp_created_date`) values 
(1,NULL,NULL,'f1.png',1,1,'2026-05-02 10:27:40'),
(2,NULL,NULL,'f2.png',1,1,'2026-05-02 10:27:42'),
(3,NULL,NULL,'f3.png',1,1,NULL);

/*Table structure for table `trx_prod_proccess` */

DROP TABLE IF EXISTS `trx_prod_proccess`;

CREATE TABLE `trx_prod_proccess` (
  `tpr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tpr_content` mediumtext DEFAULT NULL,
  `tpr_image` text DEFAULT NULL,
  `tpr_list_methode` mediumtext DEFAULT NULL,
  PRIMARY KEY (`tpr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_prod_proccess` */

insert  into `trx_prod_proccess`(`tpr_id`,`tpr_content`,`tpr_image`,`tpr_list_methode`) values 
(1,'Kopi Puntang Wangi adalah produk yang dihasilkan dari dataran tinggi Gunung Puntang yang berada di 1,250 – 1,500 meter di atas permukaan laut (mpdl). Berbagai metode pengolahan buah kopi menciptakan beraneka ragam cita rasa.','gmb_f2.png,gmb_f6.png,gmb_f8.png,gmb_f17.png','[\r\n  {\r\n    \"title\": \"Honey Process\",\r\n    \"desc\": \"Buah kopi dilakukan pengupasan kulit dengan sedikit sisa daging buahnya, menghasilkan keseimbangan rasa manis buah-buahan dan keasaman yang lembut, serta aroma yang kompleks.\"\r\n  },\r\n  {\r\n    \"title\": \"Natural Process\",\r\n    \"desc\": \"Buah kopi dikeringkan secara utuh bersama kulitnya sehingga menciptakan rasa buah yang kaya dan manis, seperti cokelat hitam, buah beri, dan sedikit rasa kayu manis.\"\r\n  },\r\n  {\r\n    \"title\": \"Washed Process\",\r\n    \"desc\": \"Metode yang membutuhkan proses pencucian biji kopi dan pembersihan kulit dengan air sebelum pengeringan untuk menghasilkan cita rasa yang lebih bersih, asam lebih terang, dan sentuhan floral serta sitrus.\"\r\n  },\r\n  {\r\n    \"title\": \"Wine Process\",\r\n    \"desc\": \"Biji kopi melalui proses fermentasi seperti pembuatan anggur untuk menghasilkan cita rasa kompleks dan khas dengan nuansa buah-buahan matang, rempah, dan sedikit rasa manis.\"\r\n  }\r\n]');

/*Table structure for table `trx_product` */

DROP TABLE IF EXISTS `trx_product`;

CREATE TABLE `trx_product` (
  `trp_id` int(11) NOT NULL AUTO_INCREMENT,
  `trp_name` varchar(255) DEFAULT NULL,
  `trp_description` mediumtext DEFAULT NULL,
  `trp_image` varchar(255) DEFAULT NULL,
  `trp_status` int(11) DEFAULT NULL,
  `trp_created_by` int(11) DEFAULT NULL,
  `trp_created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`trp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_product` */

insert  into `trx_product`(`trp_id`,`trp_name`,`trp_description`,`trp_image`,`trp_status`,`trp_created_by`,`trp_created_date`) values 
(1,'PRD1','Arabica and Robusta coffee varieties, featuring diverse flavor profiles with rich, authentic notes and a well-balanced aftertaste.','f1.png',1,1,'2026-05-02 07:39:19'),
(2,'PRD2','Arabica and Robusta coffee varieties, featuring diverse flavor profiles with rich, authentic notes and a well-balanced aftertaste.','f2.png',1,1,'2026-05-02 09:15:57'),
(3,'PRD3','Arabica and Robusta coffee varieties, featuring diverse flavor profiles with rich, authentic notes and a well-balanced aftertaste.','f3.png',1,1,'2026-05-02 09:15:59'),
(4,'PRD4','Arabica and Robusta coffee varieties, featuring diverse flavor profiles with rich, authentic notes and a well-balanced aftertaste.','f4.png',1,1,'2026-05-02 09:16:00'),
(5,'PRD5','Arabica and Robusta coffee varieties, featuring diverse flavor profiles with rich, authentic notes and a well-balanced aftertaste.','f5.png',1,1,'2026-05-02 09:16:02'),
(6,'PRD6','Arabica and Robusta coffee varieties, featuring diverse flavor profiles with rich, authentic notes and a well-balanced aftertaste.','f6.png',1,1,'2026-05-02 09:16:04');

/*Table structure for table `trx_program` */

DROP TABLE IF EXISTS `trx_program`;

CREATE TABLE `trx_program` (
  `trp_id` int(11) NOT NULL AUTO_INCREMENT,
  `trp_title` varchar(255) DEFAULT NULL,
  `trp_tahun` varchar(4) DEFAULT NULL,
  `trp_description` text DEFAULT NULL,
  `trp_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`trp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

/*Data for the table `trx_program` */

insert  into `trx_program`(`trp_id`,`trp_title`,`trp_tahun`,`trp_description`,`trp_image`) values 
(1,'Kick Off','2023','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','f1.png'),
(2,'Ceremonial Of Plantation','2025','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','f2.png'),
(3,'Plantation','2024','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','f3.png'),
(4,'Green House','2023','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','f4.png'),
(5,'Compost House','2023','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','f5.png'),
(6,'Access Road Construction','2023','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','f6.png'),
(7,'Electricity Installation','2024','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','f7.png');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`phone`,`role_id`,`email`,`email_verified_at`,`image`,`status`,`username`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Test User',NULL,NULL,'test@example.com','2026-03-06 21:53:31','default.jpg',NULL,NULL,'$2y$12$gz944mJ9QOXUJ.doxxzhF.WHb59C2xLzOiExfyeQ8xJoZQdkfNwhi','DHVsTrWyEu','2026-03-06 21:53:31','2026-03-06 21:53:31'),
(2,'Super Admin','081234567890',1,'kgdr@puntangcoffee.com',NULL,'default.jpg',1,'kgdr','$2y$12$.2WOIrYolbtlsTBTYITNo./cyWj92MkRovSKSeRN/PCtYhwWnHOBS',NULL,'2026-03-14 05:47:11',NULL),
(3,'Admin','081234567891',2,'admin@puntangcoffee.com',NULL,'default.jpg',1,'admin','$2y$12$KIXQnFJzVbRTP0TOE2nGceEw9H2Yg3xX9L5YF7U3U6h2sE9YxYbKa',NULL,'2026-03-14 05:47:37',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
