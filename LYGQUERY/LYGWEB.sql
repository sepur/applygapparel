CREATE DATABASE  IF NOT EXISTS `LYGWEB` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `LYGWEB`;
-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: LYGWEB
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lygDestination`
--

DROP TABLE IF EXISTS `lygDestination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lygDestination` (
  `DestinationCode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DestinationName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`DestinationCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lygDestination`
--

LOCK TABLES `lygDestination` WRITE;
/*!40000 ALTER TABLE `lygDestination` DISABLE KEYS */;
INSERT INTO `lygDestination` VALUES ('HK','Hongkong',NULL,NULL),('SG','Singapore',NULL,NULL);
/*!40000 ALTER TABLE `lygDestination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lygSewingOutput`
--

DROP TABLE IF EXISTS `lygSewingOutput`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lygSewingOutput` (
  `TrnDate` date NOT NULL,
  `OperatorName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StyleCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SizeName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DestinationCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QtyOutput` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`TrnDate`,`OperatorName`,`StyleCode`,`SizeName`,`DestinationCode`,`QtyOutput`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lygSewingOutput`
--

LOCK TABLES `lygSewingOutput` WRITE;
/*!40000 ALTER TABLE `lygSewingOutput` DISABLE KEYS */;
INSERT INTO `lygSewingOutput` VALUES ('2024-01-02','Afizza Shabira','BOSSE FANCY OH HOOD S.9','L','HK',9,NULL,NULL),('2024-01-02','Afizza Shabira','BOSSE FANCY OH HOOD S.9','L','SG',1,NULL,NULL),('2024-01-02','Afizza Shabira','BOSSE FANCY OH HOOD S.9','S','HK',12,NULL,NULL),('2024-01-02','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XL','HK',25,NULL,NULL),('2024-01-02','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XL','SG',3,NULL,NULL),('2024-01-02','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XS','HK',12,NULL,NULL),('2024-01-02','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XS','SG',2,NULL,NULL),('2024-01-02','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XXL','HK',7,NULL,NULL),('2024-01-02','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','152','HK',6,NULL,NULL),('2024-01-02','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','92','HK',13,NULL,NULL),('2024-01-02','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','98','HK',12,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','L','HK',30,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','S','HK',25,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','S','SG',5,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','XL','HK',17,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','XL','SG',12,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','XS','HK',15,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','XS','SG',3,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','XXL','HK',11,NULL,NULL),('2024-01-02','M. Zaidan','BOSSE FANCY OH HOOD S.9','XXL','SG',1,NULL,NULL),('2024-01-02','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','152','HK',10,NULL,NULL),('2024-01-02','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','152','SG',9,NULL,NULL),('2024-01-02','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','92','HK',21,NULL,NULL),('2024-01-02','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','92','SG',19,NULL,NULL),('2024-01-02','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','98','HK',20,NULL,NULL),('2024-01-02','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','98','SG',18,NULL,NULL),('2024-01-03','Afizza Shabira','BOSSE FANCY OH HOOD S.9','L','HK',31,NULL,NULL),('2024-01-03','Afizza Shabira','BOSSE FANCY OH HOOD S.9','L','SG',6,NULL,NULL),('2024-01-03','Afizza Shabira','BOSSE FANCY OH HOOD S.9','S','HK',36,NULL,NULL),('2024-01-03','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XL','HK',26,NULL,NULL),('2024-01-03','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XL','SG',11,NULL,NULL),('2024-01-03','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XXL','HK',7,NULL,NULL),('2024-01-03','Afizza Shabira','BOSSE FANCY OH HOOD S.9','XXL','SG',0,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','104','SG',19,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','110','SG',7,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','116','SG',6,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','122','SG',5,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','134','SG',12,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','140','SG',18,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','146','SG',19,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','152','SG',21,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','92','SG',21,NULL,NULL),('2024-01-03','Afizza Shabira','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','98','SG',11,NULL,NULL),('2024-01-03','M. Zaidan','BOSSE FANCY OH HOOD S.9','L','HK',39,NULL,NULL),('2024-01-03','M. Zaidan','BOSSE FANCY OH HOOD S.9','S','HK',32,NULL,NULL),('2024-01-03','M. Zaidan','BOSSE FANCY OH HOOD S.9','S','SG',9,NULL,NULL),('2024-01-03','M. Zaidan','BOSSE FANCY OH HOOD S.9','XL','HK',33,NULL,NULL),('2024-01-03','M. Zaidan','BOSSE FANCY OH HOOD S.9','XL','SG',30,NULL,NULL),('2024-01-03','M. Zaidan','BOSSE FANCY OH HOOD S.9','XXL','HK',11,NULL,NULL),('2024-01-03','M. Zaidan','BOSSE FANCY OH HOOD S.9','XXL','SG',12,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','104','HK',21,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','110','HK',14,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','116','HK',17,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','122','HK',23,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','128','HK',25,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','134','HK',27,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','140','HK',29,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','146','HK',14,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','152','HK',12,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','92','HK',11,NULL,NULL),('2024-01-03','M. Zaidan','FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9','98','HK',12,NULL,NULL);
/*!40000 ALTER TABLE `lygSewingOutput` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lygStyleSize`
--

DROP TABLE IF EXISTS `lygStyleSize`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lygStyleSize` (
  `StyleCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SizeSort` int NOT NULL,
  `SizeName` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`StyleCode`,`SizeSort`,`SizeName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lygStyleSize`
--

LOCK TABLES `lygStyleSize` WRITE;
/*!40000 ALTER TABLE `lygStyleSize` DISABLE KEYS */;
INSERT INTO `lygStyleSize` VALUES ('BOSSE FANCY OH HOOD S.9',1,'XS',NULL,NULL),('BOSSE FANCY OH HOOD S.9',2,'S',NULL,NULL),('BOSSE FANCY OH HOOD S.9',3,'M',NULL,NULL),('BOSSE FANCY OH HOOD S.9',4,'L',NULL,NULL),('BOSSE FANCY OH HOOD S.9',5,'XL',NULL,NULL),('BOSSE FANCY OH HOOD S.9',6,'XXL',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',1,'92',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',2,'98',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',3,'104',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',4,'110',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',5,'116',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',6,'122',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',7,'128',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',8,'134',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',9,'140',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',10,'146',NULL,NULL),('FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',11,'152',NULL,NULL);
/*!40000 ALTER TABLE `lygStyleSize` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(20,'2024_08_08_010330_create_lygDestination_table',2),(21,'2024_08_08_021445_create_lygStyleSize_table',2),(22,'2024_08_08_025157_create_lygSewingOutput_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'firman','firman.kemal.p@gmail.com',NULL,'$2y$10$iRt8DcCr5H74qltsh1TriOueZvixbjPPxkyZgIr8hHfo6bDI3HYl.',NULL,'2024-08-07 18:33:40','2024-08-07 18:33:40');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-08 14:52:26
