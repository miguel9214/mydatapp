/*
MySQL Backup
Database: mydatapp
Backup Time: 2023-10-19 16:11:44
*/

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `mydatapp`.`failed_jobs`;
DROP TABLE IF EXISTS `mydatapp`.`migrations`;
DROP TABLE IF EXISTS `mydatapp`.`password_reset_tokens`;
DROP TABLE IF EXISTS `mydatapp`.`personal_access_tokens`;
DROP TABLE IF EXISTS `mydatapp`.`products`;
DROP TABLE IF EXISTS `mydatapp`.`users`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_user_id_foreign` (`user_id`),
  CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
BEGIN;
LOCK TABLES `mydatapp`.`failed_jobs` WRITE;
DELETE FROM `mydatapp`.`failed_jobs`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `mydatapp`.`migrations` WRITE;
DELETE FROM `mydatapp`.`migrations`;
INSERT INTO `mydatapp`.`migrations` (`id`,`migration`,`batch`) VALUES (1, '2014_10_12_000000_create_users_table', 1),(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),(3, '2019_08_19_000000_create_failed_jobs_table', 1),(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),(5, '2023_10_19_190443_create_products_table', 2);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `mydatapp`.`password_reset_tokens` WRITE;
DELETE FROM `mydatapp`.`password_reset_tokens`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `mydatapp`.`personal_access_tokens` WRITE;
DELETE FROM `mydatapp`.`personal_access_tokens`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `mydatapp`.`products` WRITE;
DELETE FROM `mydatapp`.`products`;
INSERT INTO `mydatapp`.`products` (`id`,`sku`,`title`,`image`,`description`,`price`,`category`,`user_id`,`created_at`,`updated_at`) VALUES (2, '123', 'celular', 'video', 'celular nuevo', '1000', 'celular', 1, '2023-10-19 20:48:22', '2023-10-19 21:06:01'),(3, '234', 'portatil', 'foto', 'i3 de 10', '5000', 'ordenador', 1, '2023-10-19 20:48:57', '2023-10-19 20:48:57');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `mydatapp`.`users` WRITE;
DELETE FROM `mydatapp`.`users`;
INSERT INTO `mydatapp`.`users` (`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES (1, 'miguel Ramos', 'miguel921433@gmail.com', NULL, '$2y$10$Q/cxCm6vigmgb3didrCrCutR91ANfxQ5RD.XWNgl.5lxyJHCfZ7bS', NULL, '2023-10-19 19:35:12', '2023-10-19 19:35:12');
UNLOCK TABLES;
COMMIT;
