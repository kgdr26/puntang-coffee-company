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
('85ZgrdPluelEq9hiKxuZAc3okL4MHd1z7Bco5T2i',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiak1GMjRyNU11c1hLeTRhbk92NnpnNG92ZWRtYnpuV3pKdmd1RGJCUCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vcHVudGFuZy1jb2ZmZWUtY29tcGFueS5sb2NhbC1rZ2RyIjtzOjU6InJvdXRlIjtzOjEwOiJob21lLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776483461),
('DUENI7mENCYQVaScVTSyBEe5ccJGHGjUq9MstElb',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicW9Ed1VzOHFuOVRCZXF2RVpqQzRIenpFYnc3RTF6N2NlYTBmYTRqeiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vcHVudGFuZy1jb2ZmZWUtY29tcGFueS5sb2NhbC1rZ2RyIjtzOjU6InJvdXRlIjtzOjEwOiJob21lLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1775748304),
('gDJM5WqjWodfLl8ZCZSRyOpJRfDqk3iAfO5KadHH',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidTZRdXVzSjdHeVZMVDMwbHRkMUMwSFB1bWFTckkycGg0cE5yR2hrNyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vcHVudGFuZy1jb2ZmZWUtY29tcGFueS5sb2NhbC1rZ2RyL2NvbnRhY3QiO3M6NToicm91dGUiO3M6MTM6ImNvbnRhY3QuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1775760834),
('HuSflKPDB8gPBtpmL8V7Kz26t7LXZkHQRekKJunt',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVM2d2FxcGF5OTVnZzJRZTB5SmZWajJaelFCVmZkV2ZwRmRtMjc2RSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vcHVudGFuZy1jb2ZmZWUtY29tcGFueS5sb2NhbC1rZ2RyL2FjdGl2aXR5LW5ld3MiO3M6NToicm91dGUiO3M6MTQ6ImFjdGl2aXR5LmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776559382),
('KU9oRUXtUSeZgV6JSBPpaWhRpHoG5ciAIFUkoyrP',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVlXcmNIRW94RFpXVzNESVJZemJhOG42b3UyazJZSUZZcnprZTdQcCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vcHVudGFuZy1jb2ZmZWUtY29tcGFueS5sb2NhbC1rZ2RyIjtzOjU6InJvdXRlIjtzOjEwOiJob21lLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776380898),
('Tg3vHRcJsXyTy4imEu2wOS8UmQiMjzT5zyYShf6p',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1RRWTFsNHllMDdsS0lMeWtSdW9Fd21KTk1ONVZHdk82dFJvQW1qTyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vcHVudGFuZy1jb2ZmZWUtY29tcGFueS5sb2NhbC1rZ2RyL3Byb2R1Y3QiO3M6NToicm91dGUiO3M6MTM6InByb2R1Y3QuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1776532061);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
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

insert  into `users`(`id`,`name`,`phone`,`role_id`,`email`,`email_verified_at`,`status`,`username`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Test User',NULL,NULL,'test@example.com','2026-03-06 21:53:31',NULL,NULL,'$2y$12$gz944mJ9QOXUJ.doxxzhF.WHb59C2xLzOiExfyeQ8xJoZQdkfNwhi','DHVsTrWyEu','2026-03-06 21:53:31','2026-03-06 21:53:31'),
(2,'Super Admin','081234567890',1,'kgdr@puntangcoffee.com',NULL,1,'kgdr','$2y$12$.2WOIrYolbtlsTBTYITNo./cyWj92MkRovSKSeRN/PCtYhwWnHOBS',NULL,'2026-03-14 05:47:11',NULL),
(3,'Admin','081234567891',2,'admin@puntangcoffee.com',NULL,1,'admin','$2y$12$KIXQnFJzVbRTP0TOE2nGceEw9H2Yg3xX9L5YF7U3U6h2sE9YxYbKa',NULL,'2026-03-14 05:47:37',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
