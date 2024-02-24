-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mca
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `apply_courses`
--

DROP TABLE IF EXISTS `apply_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `apply_courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint DEFAULT NULL,
  `user_id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apply_courses`
--

LOCK TABLES `apply_courses` WRITE;
/*!40000 ALTER TABLE `apply_courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `apply_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint DEFAULT NULL,
  `user_id` bigint DEFAULT NULL,
  `reply_id` bigint DEFAULT NULL,
  `like` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `ip` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_post_categories`
--

DROP TABLE IF EXISTS `blog_post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_post_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint DEFAULT NULL,
  `blog_category_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_post_categories`
--

LOCK TABLES `blog_post_categories` WRITE;
/*!40000 ALTER TABLE `blog_post_categories` DISABLE KEYS */;
INSERT INTO `blog_post_categories` VALUES (1,1,1,NULL,NULL),(2,2,1,NULL,NULL),(3,3,1,NULL,NULL),(4,4,1,NULL,NULL),(5,5,1,NULL,NULL);
/*!40000 ALTER TABLE `blog_post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_views`
--

DROP TABLE IF EXISTS `blog_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_views` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` bigint DEFAULT NULL,
  `blog_id` bigint DEFAULT NULL,
  `user_id` bigint DEFAULT NULL,
  `like` bigint DEFAULT NULL,
  `view` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_views`
--

LOCK TABLES `blog_views` WRITE;
/*!40000 ALTER TABLE `blog_views` DISABLE KEYS */;
INSERT INTO `blog_views` VALUES (1,NULL,1,NULL,NULL,1,NULL,NULL),(2,NULL,1,NULL,NULL,1,'2024-02-24 12:56:24','2024-02-24 12:56:24'),(3,NULL,1,NULL,NULL,1,'2024-02-24 12:59:51','2024-02-24 12:59:51'),(4,NULL,1,NULL,NULL,1,'2024-02-24 13:00:16','2024-02-24 13:00:16'),(5,NULL,1,NULL,NULL,1,'2024-02-24 13:00:38','2024-02-24 13:00:38'),(6,NULL,1,NULL,NULL,1,'2024-02-24 13:01:04','2024-02-24 13:01:04'),(7,NULL,1,NULL,NULL,1,'2024-02-24 13:01:17','2024-02-24 13:01:17'),(8,NULL,1,NULL,NULL,1,'2024-02-24 13:01:34','2024-02-24 13:01:34'),(9,NULL,1,NULL,NULL,1,'2024-02-24 13:02:10','2024-02-24 13:02:10'),(10,NULL,1,NULL,NULL,1,'2024-02-24 13:02:20','2024-02-24 13:02:20'),(11,NULL,1,NULL,NULL,1,'2024-02-24 13:02:44','2024-02-24 13:02:44'),(12,NULL,1,NULL,NULL,1,'2024-02-24 13:02:56','2024-02-24 13:02:56'),(13,NULL,1,NULL,NULL,1,'2024-02-24 13:03:04','2024-02-24 13:03:04'),(14,NULL,1,NULL,NULL,1,'2024-02-24 13:03:11','2024-02-24 13:03:11'),(15,NULL,1,NULL,NULL,1,'2024-02-24 13:04:30','2024-02-24 13:04:30'),(16,NULL,1,NULL,NULL,1,'2024-02-24 13:05:16','2024-02-24 13:05:16'),(17,NULL,1,NULL,NULL,1,'2024-02-24 14:25:44','2024-02-24 14:25:44'),(18,NULL,1,NULL,NULL,1,'2024-02-24 14:26:02','2024-02-24 14:26:02'),(19,NULL,1,NULL,NULL,1,'2024-02-24 14:26:39','2024-02-24 14:26:39'),(20,NULL,1,NULL,NULL,1,'2024-02-24 14:27:17','2024-02-24 14:27:17'),(21,NULL,1,NULL,NULL,1,'2024-02-24 14:30:18','2024-02-24 14:30:18'),(22,NULL,4,NULL,NULL,1,'2024-02-24 15:49:08','2024-02-24 15:49:08');
/*!40000 ALTER TABLE `blog_views` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `publish_date` date DEFAULT NULL,
  `writer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` json DEFAULT NULL,
  `blog_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` bigint unsigned DEFAULT NULL,
  `privecy_status` enum('public','private') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'one The Best Sausage Pizzas Spread pizza sauce over crusts','<p><span style=\"color: rgb(22, 22, 22); font-family: &quot;Work Sans&quot;, sans-serif; font-size: 20px; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Good Food sounds like the name of an amazingly delicious food delivery service, but don\'t be fooled. The blog is actually a compilation of recipes, cooking videos, and nutrition tips</span><br></p>','cooking,receipy,',NULL,NULL,NULL,NULL,NULL,'uploads/blog/2024/02/k3rZJeqoGZ10wphLZ8zCws3Ku8U6vYKYySDMbjrc.jpg',NULL,'Youtube_link','https://www.youtube.com/watch?v=El90XofXFHk','the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-5831383',1,'public','active','2024-02-24 11:34:37','2024-02-24 11:45:25'),(2,'two The Best Sausage Pizzas Spread pizza sauce over crusts','<p><span style=\"color: rgb(22, 22, 22); font-family: &quot;Work Sans&quot;, sans-serif; font-size: 20px; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Good Food sounds like the name of an amazingly delicious food delivery service, but don\'t be fooled. The blog is actually a compilation of recipes, cooking videos, and nutrition tips</span><br></p>','aasdfsd,',NULL,NULL,NULL,NULL,NULL,'uploads/blog/2024/02/k3rZJeqoGZ10wphLZ8zCws3Ku8U6vYKYySDMbjrc.jpg',NULL,'Youtube_link','https://www.youtube.com/watch?v=El90XofXFHk','the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-5831384',1,'public','active','2024-02-24 11:34:37','2024-02-24 11:45:33'),(3,'3 The Best Sausage Pizzas Spread pizza sauce over crusts','<p><span style=\"color: rgb(22, 22, 22); font-family: &quot;Work Sans&quot;, sans-serif; font-size: 20px; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Good Food sounds like the name of an amazingly delicious food delivery service, but don\'t be fooled. The blog is actually a compilation of recipes, cooking videos, and nutrition tips</span><br></p>','cooking,receipy,',NULL,NULL,NULL,NULL,NULL,'uploads/blog/2024/02/k3rZJeqoGZ10wphLZ8zCws3Ku8U6vYKYySDMbjrc.jpg',NULL,'Youtube_link','https://www.youtube.com/watch?v=El90XofXFHk','the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-5831385',1,'public','active','2024-02-24 11:34:37','2024-02-24 11:45:38'),(4,'4 The Best Sausage Pizzas Spread pizza sauce over crusts','<p><span style=\"color: rgb(22, 22, 22); font-family: &quot;Work Sans&quot;, sans-serif; font-size: 20px; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Good Food sounds like the name of an amazingly delicious food delivery service, but don\'t be fooled. The blog is actually a compilation of recipes, cooking videos, and nutrition tips</span><br></p>','cooking,receipy,',NULL,NULL,NULL,NULL,NULL,'uploads/blog/2024/02/k3rZJeqoGZ10wphLZ8zCws3Ku8U6vYKYySDMbjrc.jpg',NULL,'Youtube_link','https://www.youtube.com/watch?v=El90XofXFHk','the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-5831387',1,'public','active','2024-02-24 11:34:37','2024-02-24 11:45:46'),(5,'5 The Best Sausage Pizzas Spread pizza sauce over crusts','<p><span style=\"color: rgb(22, 22, 22); font-family: &quot;Work Sans&quot;, sans-serif; font-size: 20px; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Good Food sounds like the name of an amazingly delicious food delivery service, but don\'t be fooled. The blog is actually a compilation of recipes, cooking videos, and nutrition tips</span><br></p>','cooking,receipy,',NULL,NULL,NULL,NULL,NULL,'uploads/blog/2024/02/k3rZJeqoGZ10wphLZ8zCws3Ku8U6vYKYySDMbjrc.jpg',NULL,'Youtube_link','https://www.youtube.com/watch?v=El90XofXFHk','the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-5831388',1,'public','active','2024-02-24 11:34:37','2024-02-24 11:45:56');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` bigint unsigned DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `for` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Food',NULL,NULL,NULL,'food-5991906','blog','active','2024-02-24 09:04:22','2024-02-24 09:04:22'),(2,'Chef Course',NULL,'uploads/category/2024-02-24-174704.jpeg',NULL,'diploma-5342338','course','active','2024-02-24 09:04:22','2024-02-24 11:47:04');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_us` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` bigint unsigned DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,2,'The Best Sausage Pizzas Spread pizza sauce over crusts','<p><span style=\"color: rgb(22, 22, 22); font-family: &quot;Work Sans&quot;, sans-serif; font-size: 20px; letter-spacing: normal; background-color: rgb(247, 247, 247);\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Title Image Lorem ipsum dolor sit amet</span><br></p>',NULL,'uploads/course/2024/02/HLrrFzuTu2thDAW1iTbIaZwa9fkXb9D8l1ud0yjU.jpg',NULL,NULL,NULL,NULL,NULL,'the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-7901506',NULL,'active','2024-02-24 11:47:36','2024-02-24 11:47:36'),(2,2,'The Best Sausage Pizzas Spread pizza sauce over crusts','<p><span style=\"color: rgb(22, 22, 22); font-family: &quot;Work Sans&quot;, sans-serif; font-size: 20px; letter-spacing: normal; background-color: rgb(247, 247, 247);\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Title Image Lorem ipsum dolor sit amet</span><br></p>',NULL,'uploads/course/2024/02/gntfRhlVtlkuydVN3FCzMyT4JloJevBO4fRcq2hh.jpg',NULL,NULL,NULL,NULL,NULL,'the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-7901506',NULL,'active','2024-02-24 11:47:36','2024-02-24 11:48:58'),(3,2,'The Best Sausage Pizzas Spread pizza sauce over crusts','<p><span style=\"color: rgb(22, 22, 22); font-family: &quot;Work Sans&quot;, sans-serif; font-size: 20px; letter-spacing: normal; background-color: rgb(247, 247, 247);\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Title Image Lorem ipsum dolor sit amet</span><br></p>',NULL,'uploads/course/2024/02/awc1QWFglPufauXDu4pQF7Ir3mBnvZgcVByNQ8iu.jpg',NULL,NULL,NULL,NULL,NULL,'the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-7901506',NULL,'active','2024-02-24 11:47:36','2024-02-24 11:49:11');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2016_06_01_000001_create_oauth_auth_codes_table',1),(5,'2016_06_01_000002_create_oauth_access_tokens_table',1),(6,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(7,'2016_06_01_000004_create_oauth_clients_table',1),(8,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(9,'2019_08_19_000000_create_failed_jobs_table',1),(10,'2019_12_14_000001_create_personal_access_tokens_table',1),(11,'create_blogs_table',2),(12,'create_courses_table',2),(13,'create_categories_table',3),(14,'create_sliders_table',3),(15,'create_users_table',3),(16,'create_website_settings_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('3a7868031c9e59f3aa6a5a440868c4b47d4c3b57af6295878195c9986626f8907fbb0f22c0fa3fd2',1,1,'accessToken','[]',1,'2024-02-24 09:05:03','2024-02-24 09:05:03','2025-02-24 15:05:03'),('52548f17e7f2ed9deaaae7b3da4b8c388e3f58034a6470c18e8d940e4cb561e1ed4c201e179a7b34',1,1,'accessToken','[]',0,'2024-02-24 15:25:31','2024-02-24 15:25:31','2025-02-24 21:25:31');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','ye7HdkFGp9Pn8M4hk9Fc1Jnu4Nq7kCuf5WpNHrU8',NULL,'http://localhost',1,0,0,'2024-02-24 09:04:23','2024-02-24 09:04:23'),(2,NULL,'Laravel Password Grant Client','ICgN6Ui40qS8KqPFtZlqtWoTAoSqMcNY1NJMA3S9','users','http://localhost',0,1,0,'2024-02-24 09:04:23','2024-02-24 09:04:23');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2024-02-24 09:04:23','2024-02-24 09:04:23');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
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
  KEY `password_resets_email_index` (`email`)
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
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` bigint unsigned DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'1 Roasted Pumpkin and Beet Salad','1 Lorem ipsum dolor sit amet, consectetuer ,Lorem ipsum dolor sit amet, consectetuer','uploads/slider/2024-02-24-175026.jpeg',NULL,'roasted-pumpkin-and-beet-salad-2401838','active','2024-02-24 11:50:26','2024-02-24 12:15:42'),(2,'2 Roasted Pumpkin and Beet Salad','2 Lorem ipsum dolor sit amet, consectetuer ,Lorem ipsum dolor sit amet, consectetuer','uploads/slider/2024-02-24-175122.jpeg',NULL,'roasted-pumpkin-and-beet-salad-2401838','active','2024-02-24 11:50:26','2024-02-24 12:15:49'),(3,'3 Roasted Pumpkin and Beet Salad','3 Lorem ipsum dolor sit amet, consectetuer ,Lorem ipsum dolor sit amet, consectetuer','uploads/slider/2024-02-24-175128.jpeg',NULL,'roasted-pumpkin-and-beet-salad-2401838','active','2024-02-24 11:50:26','2024-02-24 12:15:57'),(4,'4 Roasted Pumpkin and Beet Salad','4 Lorem ipsum dolor sit amet, consectetuer ,Lorem ipsum dolor sit amet, consectetuer','uploads/slider/2024-02-24-175133.jpeg',NULL,'roasted-pumpkin-and-beet-salad-2401838','active','2024-02-24 11:50:26','2024-02-24 12:16:06');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` bigint unsigned DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$12$ZPASgEIU3Nn3rKDHpjxucelGEKKDVdQQmXl3mUAe5ef0h0juuyhVm',NULL,NULL,'5461724','active','2024-02-24 09:04:22','2024-02-24 09:04:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `website_settings`
--

DROP TABLE IF EXISTS `website_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `website_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `field_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_value` text COLLATE utf8mb4_unicode_ci,
  `is_deleteable` tinyint NOT NULL DEFAULT '0',
  `is_image` tinyint NOT NULL DEFAULT '0',
  `creator` bigint unsigned DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `website_settings`
--

LOCK TABLES `website_settings` WRITE;
/*!40000 ALTER TABLE `website_settings` DISABLE KEYS */;
INSERT INTO `website_settings` VALUES (1,'site title','Modern Cooking Academy',0,0,NULL,'9771775','active','2024-02-24 09:04:23','2024-02-24 10:07:09'),(2,'site logo','uploads/website/2024-02-24-160137.jpeg',0,1,NULL,'5912225','active','2024-02-24 09:04:23','2024-02-24 10:01:37'),(3,'contact number','01333322657,01333322658',0,0,NULL,'4053459','active','2024-02-24 09:04:23','2024-02-24 10:02:20'),(4,'address','House #05, Avenue#01, Section-10, Mirpur, Dhaka-1216',0,0,NULL,'6274744','active','2024-02-24 09:04:23','2024-02-24 15:26:00'),(5,'youtube','https://www.youtube.com/@moderncookingacademy\n                ',0,0,NULL,'5095367','active','2024-02-24 09:04:23','2024-02-24 09:04:23'),(6,'instagram','https://www.instagram.com/moderncookingacademy',0,0,NULL,'7406610','active','2024-02-24 09:04:23','2024-02-24 09:04:23'),(7,'twitter','https://twitter.com/modern_cooking_',0,0,NULL,'5027937','active','2024-02-24 09:04:23','2024-02-24 09:04:23'),(8,'gmail','<span style=\"color: rgb(204, 204, 204); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 18px; white-space: pre;\">mcaedu2024</span>@gmail.com',0,0,NULL,'1708186','active','2024-02-24 09:04:23','2024-02-24 15:27:12');
/*!40000 ALTER TABLE `website_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `website_visitor_count`
--

DROP TABLE IF EXISTS `website_visitor_count`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `website_visitor_count` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `website_visitor_count`
--

LOCK TABLES `website_visitor_count` WRITE;
/*!40000 ALTER TABLE `website_visitor_count` DISABLE KEYS */;
INSERT INTO `website_visitor_count` VALUES (1,'127.0.0.1','2024-02-24 09:04:47','2024-02-24 09:04:47'),(2,'127.0.0.1','2024-02-24 09:04:47','2024-02-24 09:04:47'),(3,'127.0.0.1','2024-02-24 09:04:52','2024-02-24 09:04:52'),(4,'127.0.0.1','2024-02-24 10:42:17','2024-02-24 10:42:17'),(5,'127.0.0.1','2024-02-24 10:42:17','2024-02-24 10:42:17'),(6,'127.0.0.1','2024-02-24 10:50:22','2024-02-24 10:50:22'),(7,'127.0.0.1','2024-02-24 10:50:23','2024-02-24 10:50:23'),(8,'127.0.0.1','2024-02-24 10:50:41','2024-02-24 10:50:41'),(9,'127.0.0.1','2024-02-24 10:50:41','2024-02-24 10:50:41'),(10,'127.0.0.1','2024-02-24 10:51:10','2024-02-24 10:51:10'),(11,'127.0.0.1','2024-02-24 10:51:10','2024-02-24 10:51:10'),(12,'127.0.0.1','2024-02-24 10:51:54','2024-02-24 10:51:54'),(13,'127.0.0.1','2024-02-24 10:51:54','2024-02-24 10:51:54'),(14,'127.0.0.1','2024-02-24 11:17:51','2024-02-24 11:17:51'),(15,'127.0.0.1','2024-02-24 11:17:51','2024-02-24 11:17:51'),(16,'127.0.0.1','2024-02-24 11:20:12','2024-02-24 11:20:12'),(17,'127.0.0.1','2024-02-24 11:22:45','2024-02-24 11:22:45'),(18,'127.0.0.1','2024-02-24 11:23:10','2024-02-24 11:23:10'),(19,'127.0.0.1','2024-02-24 11:24:13','2024-02-24 11:24:13'),(20,'127.0.0.1','2024-02-24 11:24:13','2024-02-24 11:24:13'),(21,'127.0.0.1','2024-02-24 11:25:14','2024-02-24 11:25:14'),(22,'127.0.0.1','2024-02-24 11:25:14','2024-02-24 11:25:14'),(23,'127.0.0.1','2024-02-24 11:25:22','2024-02-24 11:25:22'),(24,'127.0.0.1','2024-02-24 11:25:22','2024-02-24 11:25:22'),(25,'127.0.0.1','2024-02-24 11:25:24','2024-02-24 11:25:24'),(26,'127.0.0.1','2024-02-24 11:25:24','2024-02-24 11:25:24'),(27,'127.0.0.1','2024-02-24 11:26:01','2024-02-24 11:26:01'),(28,'127.0.0.1','2024-02-24 11:26:02','2024-02-24 11:26:02'),(29,'127.0.0.1','2024-02-24 11:26:03','2024-02-24 11:26:03'),(30,'127.0.0.1','2024-02-24 11:26:14','2024-02-24 11:26:14'),(31,'127.0.0.1','2024-02-24 11:26:14','2024-02-24 11:26:14'),(32,'127.0.0.1','2024-02-24 11:31:34','2024-02-24 11:31:34'),(33,'127.0.0.1','2024-02-24 11:31:48','2024-02-24 11:31:48'),(34,'127.0.0.1','2024-02-24 11:31:48','2024-02-24 11:31:48'),(35,'127.0.0.1','2024-02-24 11:32:04','2024-02-24 11:32:04'),(36,'127.0.0.1','2024-02-24 11:32:07','2024-02-24 11:32:07'),(37,'127.0.0.1','2024-02-24 11:49:47','2024-02-24 11:49:47'),(38,'127.0.0.1','2024-02-24 11:49:47','2024-02-24 11:49:47'),(39,'127.0.0.1','2024-02-24 11:52:06','2024-02-24 11:52:06'),(40,'127.0.0.1','2024-02-24 11:52:06','2024-02-24 11:52:06'),(41,'127.0.0.1','2024-02-24 12:00:20','2024-02-24 12:00:20'),(42,'127.0.0.1','2024-02-24 12:00:20','2024-02-24 12:00:20'),(43,'127.0.0.1','2024-02-24 12:01:54','2024-02-24 12:01:54'),(44,'127.0.0.1','2024-02-24 12:01:54','2024-02-24 12:01:54'),(45,'127.0.0.1','2024-02-24 12:02:15','2024-02-24 12:02:15'),(46,'127.0.0.1','2024-02-24 12:02:15','2024-02-24 12:02:15'),(47,'127.0.0.1','2024-02-24 12:02:43','2024-02-24 12:02:43'),(48,'127.0.0.1','2024-02-24 12:02:43','2024-02-24 12:02:43'),(49,'127.0.0.1','2024-02-24 12:02:56','2024-02-24 12:02:56'),(50,'127.0.0.1','2024-02-24 12:02:56','2024-02-24 12:02:56'),(51,'127.0.0.1','2024-02-24 12:03:41','2024-02-24 12:03:41'),(52,'127.0.0.1','2024-02-24 12:03:41','2024-02-24 12:03:41'),(53,'127.0.0.1','2024-02-24 12:04:00','2024-02-24 12:04:00'),(54,'127.0.0.1','2024-02-24 12:04:00','2024-02-24 12:04:00'),(55,'127.0.0.1','2024-02-24 12:04:11','2024-02-24 12:04:11'),(56,'127.0.0.1','2024-02-24 12:04:11','2024-02-24 12:04:11'),(57,'127.0.0.1','2024-02-24 12:04:35','2024-02-24 12:04:35'),(58,'127.0.0.1','2024-02-24 12:04:35','2024-02-24 12:04:35'),(59,'127.0.0.1','2024-02-24 12:04:48','2024-02-24 12:04:48'),(60,'127.0.0.1','2024-02-24 12:04:48','2024-02-24 12:04:48'),(61,'127.0.0.1','2024-02-24 12:16:09','2024-02-24 12:16:09'),(62,'127.0.0.1','2024-02-24 12:16:09','2024-02-24 12:16:09'),(63,'127.0.0.1','2024-02-24 12:16:40','2024-02-24 12:16:40'),(64,'127.0.0.1','2024-02-24 12:16:40','2024-02-24 12:16:40'),(65,'127.0.0.1','2024-02-24 12:16:50','2024-02-24 12:16:50'),(66,'127.0.0.1','2024-02-24 12:16:50','2024-02-24 12:16:50'),(67,'127.0.0.1','2024-02-24 12:17:03','2024-02-24 12:17:03'),(68,'127.0.0.1','2024-02-24 12:17:19','2024-02-24 12:17:19'),(69,'127.0.0.1','2024-02-24 12:17:19','2024-02-24 12:17:19'),(70,'127.0.0.1','2024-02-24 12:38:58','2024-02-24 12:38:58'),(71,'127.0.0.1','2024-02-24 12:38:58','2024-02-24 12:38:58'),(72,'127.0.0.1','2024-02-24 12:39:17','2024-02-24 12:39:17'),(73,'127.0.0.1','2024-02-24 12:39:17','2024-02-24 12:39:17'),(74,'127.0.0.1','2024-02-24 12:40:20','2024-02-24 12:40:20'),(75,'127.0.0.1','2024-02-24 12:40:20','2024-02-24 12:40:20'),(76,'127.0.0.1','2024-02-24 12:40:46','2024-02-24 12:40:46'),(77,'127.0.0.1','2024-02-24 12:40:46','2024-02-24 12:40:46'),(78,'127.0.0.1','2024-02-24 12:40:50','2024-02-24 12:40:50'),(79,'127.0.0.1','2024-02-24 12:40:55','2024-02-24 12:40:55'),(80,'127.0.0.1','2024-02-24 12:40:55','2024-02-24 12:40:55'),(81,'127.0.0.1','2024-02-24 12:41:07','2024-02-24 12:41:07'),(82,'127.0.0.1','2024-02-24 12:41:07','2024-02-24 12:41:07'),(83,'127.0.0.1','2024-02-24 12:41:35','2024-02-24 12:41:35'),(84,'127.0.0.1','2024-02-24 12:41:35','2024-02-24 12:41:35'),(85,'127.0.0.1','2024-02-24 12:41:45','2024-02-24 12:41:45'),(86,'127.0.0.1','2024-02-24 12:41:45','2024-02-24 12:41:45'),(87,'127.0.0.1','2024-02-24 12:42:10','2024-02-24 12:42:10'),(88,'127.0.0.1','2024-02-24 12:42:10','2024-02-24 12:42:10'),(89,'127.0.0.1','2024-02-24 12:42:50','2024-02-24 12:42:50'),(90,'127.0.0.1','2024-02-24 12:42:50','2024-02-24 12:42:50'),(91,'127.0.0.1','2024-02-24 12:42:58','2024-02-24 12:42:58'),(92,'127.0.0.1','2024-02-24 12:42:58','2024-02-24 12:42:58'),(93,'127.0.0.1','2024-02-24 12:43:28','2024-02-24 12:43:28'),(94,'127.0.0.1','2024-02-24 12:43:28','2024-02-24 12:43:28'),(95,'127.0.0.1','2024-02-24 12:43:47','2024-02-24 12:43:47'),(96,'127.0.0.1','2024-02-24 12:43:47','2024-02-24 12:43:47'),(97,'127.0.0.1','2024-02-24 12:43:59','2024-02-24 12:43:59'),(98,'127.0.0.1','2024-02-24 12:43:59','2024-02-24 12:43:59'),(99,'127.0.0.1','2024-02-24 12:44:09','2024-02-24 12:44:09'),(100,'127.0.0.1','2024-02-24 12:44:09','2024-02-24 12:44:09'),(101,'127.0.0.1','2024-02-24 12:44:18','2024-02-24 12:44:18'),(102,'127.0.0.1','2024-02-24 12:44:18','2024-02-24 12:44:18'),(103,'127.0.0.1','2024-02-24 12:52:48','2024-02-24 12:52:48'),(104,'127.0.0.1','2024-02-24 12:52:48','2024-02-24 12:52:48'),(105,'127.0.0.1','2024-02-24 12:54:54','2024-02-24 12:54:54'),(106,'127.0.0.1','2024-02-24 12:54:54','2024-02-24 12:54:54'),(107,'127.0.0.1','2024-02-24 12:55:18','2024-02-24 12:55:18'),(108,'127.0.0.1','2024-02-24 12:55:30','2024-02-24 12:55:30'),(109,'127.0.0.1','2024-02-24 12:56:24','2024-02-24 12:56:24'),(110,'127.0.0.1','2024-02-24 12:59:51','2024-02-24 12:59:51'),(111,'127.0.0.1','2024-02-24 13:00:16','2024-02-24 13:00:16'),(112,'127.0.0.1','2024-02-24 13:00:38','2024-02-24 13:00:38'),(113,'127.0.0.1','2024-02-24 13:01:04','2024-02-24 13:01:04'),(114,'127.0.0.1','2024-02-24 13:01:17','2024-02-24 13:01:17'),(115,'127.0.0.1','2024-02-24 13:01:34','2024-02-24 13:01:34'),(116,'127.0.0.1','2024-02-24 13:02:10','2024-02-24 13:02:10'),(117,'127.0.0.1','2024-02-24 13:02:20','2024-02-24 13:02:20'),(118,'127.0.0.1','2024-02-24 13:02:44','2024-02-24 13:02:44'),(119,'127.0.0.1','2024-02-24 13:02:56','2024-02-24 13:02:56'),(120,'127.0.0.1','2024-02-24 13:03:04','2024-02-24 13:03:04'),(121,'127.0.0.1','2024-02-24 13:03:11','2024-02-24 13:03:11'),(122,'127.0.0.1','2024-02-24 13:04:30','2024-02-24 13:04:30'),(123,'127.0.0.1','2024-02-24 13:05:07','2024-02-24 13:05:07'),(124,'127.0.0.1','2024-02-24 13:05:07','2024-02-24 13:05:07'),(125,'127.0.0.1','2024-02-24 13:05:16','2024-02-24 13:05:16'),(126,'127.0.0.1','2024-02-24 14:25:38','2024-02-24 14:25:38'),(127,'127.0.0.1','2024-02-24 14:25:38','2024-02-24 14:25:38'),(128,'127.0.0.1','2024-02-24 14:25:44','2024-02-24 14:25:44'),(129,'127.0.0.1','2024-02-24 14:26:02','2024-02-24 14:26:02'),(130,'127.0.0.1','2024-02-24 14:26:36','2024-02-24 14:26:36'),(131,'127.0.0.1','2024-02-24 14:26:36','2024-02-24 14:26:36'),(132,'127.0.0.1','2024-02-24 14:26:39','2024-02-24 14:26:39'),(133,'127.0.0.1','2024-02-24 14:27:10','2024-02-24 14:27:10'),(134,'127.0.0.1','2024-02-24 14:27:10','2024-02-24 14:27:10'),(135,'127.0.0.1','2024-02-24 14:27:17','2024-02-24 14:27:17'),(136,'127.0.0.1','2024-02-24 14:27:42','2024-02-24 14:27:42'),(137,'127.0.0.1','2024-02-24 14:27:42','2024-02-24 14:27:42'),(138,'127.0.0.1','2024-02-24 14:29:37','2024-02-24 14:29:37'),(139,'127.0.0.1','2024-02-24 14:29:42','2024-02-24 14:29:42'),(140,'127.0.0.1','2024-02-24 14:29:42','2024-02-24 14:29:42'),(141,'127.0.0.1','2024-02-24 14:30:14','2024-02-24 14:30:14'),(142,'127.0.0.1','2024-02-24 14:30:15','2024-02-24 14:30:15'),(143,'127.0.0.1','2024-02-24 14:30:15','2024-02-24 14:30:15'),(144,'127.0.0.1','2024-02-24 14:30:18','2024-02-24 14:30:18'),(145,'127.0.0.1','2024-02-24 14:30:34','2024-02-24 14:30:34'),(146,'127.0.0.1','2024-02-24 14:30:34','2024-02-24 14:30:34'),(147,'127.0.0.1','2024-02-24 14:31:39','2024-02-24 14:31:39'),(148,'127.0.0.1','2024-02-24 14:31:39','2024-02-24 14:31:39'),(149,'127.0.0.1','2024-02-24 14:33:42','2024-02-24 14:33:42'),(150,'127.0.0.1','2024-02-24 14:33:43','2024-02-24 14:33:43'),(151,'127.0.0.1','2024-02-24 14:34:09','2024-02-24 14:34:09'),(152,'127.0.0.1','2024-02-24 14:34:09','2024-02-24 14:34:09'),(153,'127.0.0.1','2024-02-24 14:35:11','2024-02-24 14:35:11'),(154,'127.0.0.1','2024-02-24 14:35:11','2024-02-24 14:35:11'),(155,'127.0.0.1','2024-02-24 14:36:16','2024-02-24 14:36:16'),(156,'127.0.0.1','2024-02-24 14:36:16','2024-02-24 14:36:16'),(157,'127.0.0.1','2024-02-24 14:36:27','2024-02-24 14:36:27'),(158,'127.0.0.1','2024-02-24 14:36:27','2024-02-24 14:36:27'),(159,'127.0.0.1','2024-02-24 14:38:51','2024-02-24 14:38:51'),(160,'127.0.0.1','2024-02-24 14:38:51','2024-02-24 14:38:51'),(161,'127.0.0.1','2024-02-24 14:39:00','2024-02-24 14:39:00'),(162,'127.0.0.1','2024-02-24 14:39:00','2024-02-24 14:39:00'),(163,'127.0.0.1','2024-02-24 14:42:17','2024-02-24 14:42:17'),(164,'127.0.0.1','2024-02-24 14:42:17','2024-02-24 14:42:17'),(165,'127.0.0.1','2024-02-24 14:43:01','2024-02-24 14:43:01'),(166,'127.0.0.1','2024-02-24 14:43:01','2024-02-24 14:43:01'),(167,'127.0.0.1','2024-02-24 14:44:40','2024-02-24 14:44:40'),(168,'127.0.0.1','2024-02-24 14:44:40','2024-02-24 14:44:40'),(169,'127.0.0.1','2024-02-24 14:45:56','2024-02-24 14:45:56'),(170,'127.0.0.1','2024-02-24 14:45:56','2024-02-24 14:45:56'),(171,'127.0.0.1','2024-02-24 14:46:56','2024-02-24 14:46:56'),(172,'127.0.0.1','2024-02-24 14:46:56','2024-02-24 14:46:56'),(173,'127.0.0.1','2024-02-24 15:09:34','2024-02-24 15:09:34'),(174,'127.0.0.1','2024-02-24 15:09:34','2024-02-24 15:09:34'),(175,'127.0.0.1','2024-02-24 15:10:27','2024-02-24 15:10:27'),(176,'127.0.0.1','2024-02-24 15:10:27','2024-02-24 15:10:27'),(177,'127.0.0.1','2024-02-24 15:13:00','2024-02-24 15:13:00'),(178,'127.0.0.1','2024-02-24 15:13:00','2024-02-24 15:13:00'),(179,'127.0.0.1','2024-02-24 15:13:37','2024-02-24 15:13:37'),(180,'127.0.0.1','2024-02-24 15:13:37','2024-02-24 15:13:37'),(181,'127.0.0.1','2024-02-24 15:14:20','2024-02-24 15:14:20'),(182,'127.0.0.1','2024-02-24 15:14:20','2024-02-24 15:14:20'),(183,'127.0.0.1','2024-02-24 15:15:05','2024-02-24 15:15:05'),(184,'127.0.0.1','2024-02-24 15:15:05','2024-02-24 15:15:05'),(185,'127.0.0.1','2024-02-24 15:15:49','2024-02-24 15:15:49'),(186,'127.0.0.1','2024-02-24 15:15:49','2024-02-24 15:15:49'),(187,'127.0.0.1','2024-02-24 15:17:32','2024-02-24 15:17:32'),(188,'127.0.0.1','2024-02-24 15:17:32','2024-02-24 15:17:32'),(189,'127.0.0.1','2024-02-24 15:18:38','2024-02-24 15:18:38'),(190,'127.0.0.1','2024-02-24 15:18:38','2024-02-24 15:18:38'),(191,'127.0.0.1','2024-02-24 15:18:46','2024-02-24 15:18:46'),(192,'127.0.0.1','2024-02-24 15:18:46','2024-02-24 15:18:46'),(193,'127.0.0.1','2024-02-24 15:18:56','2024-02-24 15:18:56'),(194,'127.0.0.1','2024-02-24 15:18:56','2024-02-24 15:18:56'),(195,'127.0.0.1','2024-02-24 15:19:14','2024-02-24 15:19:14'),(196,'127.0.0.1','2024-02-24 15:19:14','2024-02-24 15:19:14'),(197,'127.0.0.1','2024-02-24 15:19:26','2024-02-24 15:19:26'),(198,'127.0.0.1','2024-02-24 15:19:26','2024-02-24 15:19:26'),(199,'127.0.0.1','2024-02-24 15:19:45','2024-02-24 15:19:45'),(200,'127.0.0.1','2024-02-24 15:19:45','2024-02-24 15:19:45'),(201,'127.0.0.1','2024-02-24 15:20:13','2024-02-24 15:20:13'),(202,'127.0.0.1','2024-02-24 15:20:13','2024-02-24 15:20:13'),(203,'127.0.0.1','2024-02-24 15:20:21','2024-02-24 15:20:21'),(204,'127.0.0.1','2024-02-24 15:20:21','2024-02-24 15:20:21'),(205,'127.0.0.1','2024-02-24 15:20:33','2024-02-24 15:20:33'),(206,'127.0.0.1','2024-02-24 15:20:33','2024-02-24 15:20:33'),(207,'127.0.0.1','2024-02-24 15:20:44','2024-02-24 15:20:44'),(208,'127.0.0.1','2024-02-24 15:20:44','2024-02-24 15:20:44'),(209,'127.0.0.1','2024-02-24 15:22:48','2024-02-24 15:22:48'),(210,'127.0.0.1','2024-02-24 15:23:44','2024-02-24 15:23:44'),(211,'127.0.0.1','2024-02-24 15:23:44','2024-02-24 15:23:44'),(212,'127.0.0.1','2024-02-24 15:24:54','2024-02-24 15:24:54'),(213,'127.0.0.1','2024-02-24 15:24:54','2024-02-24 15:24:54'),(214,'127.0.0.1','2024-02-24 15:25:04','2024-02-24 15:25:04'),(215,'127.0.0.1','2024-02-24 15:25:04','2024-02-24 15:25:04'),(216,'127.0.0.1','2024-02-24 15:25:12','2024-02-24 15:25:12'),(217,'127.0.0.1','2024-02-24 15:25:12','2024-02-24 15:25:12'),(218,'127.0.0.1','2024-02-24 15:27:25','2024-02-24 15:27:25'),(219,'127.0.0.1','2024-02-24 15:27:25','2024-02-24 15:27:25'),(220,'127.0.0.1','2024-02-24 15:27:46','2024-02-24 15:27:46'),(221,'127.0.0.1','2024-02-24 15:27:46','2024-02-24 15:27:46'),(222,'127.0.0.1','2024-02-24 15:28:32','2024-02-24 15:28:32'),(223,'127.0.0.1','2024-02-24 15:28:54','2024-02-24 15:28:54'),(224,'127.0.0.1','2024-02-24 15:29:01','2024-02-24 15:29:01'),(225,'127.0.0.1','2024-02-24 15:29:11','2024-02-24 15:29:11'),(226,'127.0.0.1','2024-02-24 15:29:11','2024-02-24 15:29:11'),(227,'127.0.0.1','2024-02-24 15:29:39','2024-02-24 15:29:39'),(228,'127.0.0.1','2024-02-24 15:29:54','2024-02-24 15:29:54'),(229,'127.0.0.1','2024-02-24 15:30:04','2024-02-24 15:30:04'),(230,'127.0.0.1','2024-02-24 15:30:15','2024-02-24 15:30:15'),(231,'127.0.0.1','2024-02-24 15:30:36','2024-02-24 15:30:36'),(232,'127.0.0.1','2024-02-24 15:30:36','2024-02-24 15:30:36'),(233,'127.0.0.1','2024-02-24 15:32:49','2024-02-24 15:32:49'),(234,'127.0.0.1','2024-02-24 15:32:49','2024-02-24 15:32:49'),(235,'127.0.0.1','2024-02-24 15:34:06','2024-02-24 15:34:06'),(236,'127.0.0.1','2024-02-24 15:34:06','2024-02-24 15:34:06'),(237,'127.0.0.1','2024-02-24 15:36:33','2024-02-24 15:36:33'),(238,'127.0.0.1','2024-02-24 15:36:33','2024-02-24 15:36:33'),(239,'127.0.0.1','2024-02-24 15:37:41','2024-02-24 15:37:41'),(240,'127.0.0.1','2024-02-24 15:37:41','2024-02-24 15:37:41'),(241,'127.0.0.1','2024-02-24 15:38:15','2024-02-24 15:38:15'),(242,'127.0.0.1','2024-02-24 15:38:15','2024-02-24 15:38:15'),(243,'127.0.0.1','2024-02-24 15:38:39','2024-02-24 15:38:39'),(244,'127.0.0.1','2024-02-24 15:38:39','2024-02-24 15:38:39'),(245,'127.0.0.1','2024-02-24 15:39:07','2024-02-24 15:39:07'),(246,'127.0.0.1','2024-02-24 15:39:07','2024-02-24 15:39:07'),(247,'127.0.0.1','2024-02-24 15:39:20','2024-02-24 15:39:20'),(248,'127.0.0.1','2024-02-24 15:39:20','2024-02-24 15:39:20'),(249,'127.0.0.1','2024-02-24 15:39:29','2024-02-24 15:39:29'),(250,'127.0.0.1','2024-02-24 15:39:29','2024-02-24 15:39:29'),(251,'127.0.0.1','2024-02-24 15:39:48','2024-02-24 15:39:48'),(252,'127.0.0.1','2024-02-24 15:39:48','2024-02-24 15:39:48'),(253,'127.0.0.1','2024-02-24 15:39:58','2024-02-24 15:39:58'),(254,'127.0.0.1','2024-02-24 15:39:58','2024-02-24 15:39:58'),(255,'127.0.0.1','2024-02-24 15:40:38','2024-02-24 15:40:38'),(256,'127.0.0.1','2024-02-24 15:40:38','2024-02-24 15:40:38'),(257,'127.0.0.1','2024-02-24 15:41:12','2024-02-24 15:41:12'),(258,'127.0.0.1','2024-02-24 15:41:12','2024-02-24 15:41:12'),(259,'127.0.0.1','2024-02-24 15:41:33','2024-02-24 15:41:33'),(260,'127.0.0.1','2024-02-24 15:41:33','2024-02-24 15:41:33'),(261,'127.0.0.1','2024-02-24 15:42:20','2024-02-24 15:42:20'),(262,'127.0.0.1','2024-02-24 15:44:00','2024-02-24 15:44:00'),(263,'127.0.0.1','2024-02-24 15:44:20','2024-02-24 15:44:20'),(264,'127.0.0.1','2024-02-24 15:44:20','2024-02-24 15:44:20'),(265,'127.0.0.1','2024-02-24 15:44:24','2024-02-24 15:44:24'),(266,'127.0.0.1','2024-02-24 15:46:04','2024-02-24 15:46:04'),(267,'127.0.0.1','2024-02-24 15:46:04','2024-02-24 15:46:04'),(268,'127.0.0.1','2024-02-24 15:46:25','2024-02-24 15:46:25'),(269,'127.0.0.1','2024-02-24 15:47:01','2024-02-24 15:47:01'),(270,'127.0.0.1','2024-02-24 15:47:01','2024-02-24 15:47:01'),(271,'127.0.0.1','2024-02-24 15:47:26','2024-02-24 15:47:26'),(272,'127.0.0.1','2024-02-24 15:47:26','2024-02-24 15:47:26'),(273,'127.0.0.1','2024-02-24 15:47:28','2024-02-24 15:47:28'),(274,'127.0.0.1','2024-02-24 15:47:31','2024-02-24 15:47:31'),(275,'127.0.0.1','2024-02-24 15:47:31','2024-02-24 15:47:31'),(276,'127.0.0.1','2024-02-24 15:47:41','2024-02-24 15:47:41'),(277,'127.0.0.1','2024-02-24 15:47:44','2024-02-24 15:47:44'),(278,'127.0.0.1','2024-02-24 15:47:50','2024-02-24 15:47:50'),(279,'127.0.0.1','2024-02-24 15:47:50','2024-02-24 15:47:50'),(280,'127.0.0.1','2024-02-24 15:49:05','2024-02-24 15:49:05'),(281,'127.0.0.1','2024-02-24 15:49:05','2024-02-24 15:49:05'),(282,'127.0.0.1','2024-02-24 15:49:08','2024-02-24 15:49:08'),(283,'127.0.0.1','2024-02-24 15:49:20','2024-02-24 15:49:20'),(284,'127.0.0.1','2024-02-24 15:49:21','2024-02-24 15:49:21');
/*!40000 ALTER TABLE `website_visitor_count` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-25  3:50:20
