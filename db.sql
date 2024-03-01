-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mca
-- ------------------------------------------------------
-- Server version	8.0.35

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
  `rating` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `ip` bigint DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_post_categories`
--

LOCK TABLES `blog_post_categories` WRITE;
/*!40000 ALTER TABLE `blog_post_categories` DISABLE KEYS */;
INSERT INTO `blog_post_categories` VALUES (2,1,3,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_views`
--

LOCK TABLES `blog_views` WRITE;
/*!40000 ALTER TABLE `blog_views` DISABLE KEYS */;
INSERT INTO `blog_views` VALUES (1,NULL,1,NULL,NULL,1,'2024-03-01 09:09:05','2024-03-01 09:09:05'),(2,NULL,1,NULL,NULL,1,'2024-03-01 09:09:28','2024-03-01 09:09:28');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'The Best Sausage Pizzas Spread pizza sauce over crusts','<div class=\"row\">                                                <div class=\"col-lg-12\">                                                    <div class=\"row\">                                                        <div class=\"col-lg-6\">                                                            <div class=\"discription-para\">                                                                <img src=\"https://mca-edu.com/frontend/images/resource/discription.jpg\" alt=\"\">                                                            </div>                                                        </div>                                                        <div class=\"col-lg-6\">                                                            <div class=\"discription-para\">                                                                <h4>The Best Sausage Pizzas Spread pizza sauce over                                                                    crusts. At libero totam fugiat vero ab distinctio                                                                    ducimus.</h4>                                                                <p>Lorem ipsum dolor sit, amet, consectetur adipisicing                                                                    elit. At libero totam fugiat vero ab distinctio                                                                    ducimus, dolores deserunt inventore repellendus                                                                    tempora fugit ipsum in alias placeat asperiores esse                                                                    quaerat quibusdam omnis facilis laudantium. Placeat                                                                    voluptatem nemo ea magnam modi quos esse accusamus                                                                    possimus reiciendis, corporis rem quo, voluptatibus                                                                    vel perferendis voluptates dolore.</p>                                                            </div>                                                        </div>                                                    </div>                                                </div>                                                <div class=\"col-lg-6\">                                                    <!-- Ingredients Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Ingredients</h4>                                                            <ul class=\"ingredients-list\">                                                                <li>1 pound bulk Italian sausage</li>                                                                <li>1 batch Best Pizza Dough (correct in RMS before                                                                    running NAs)</li>                                                                <li>1 cup pizza sauce</li>                                                                <li>4 cups shredded part-skim mozzarella cheese</li>                                                                <li>1 medium red onion, sliced</li>                                                                <li>1 medium green pepper, chopped</li>                                                                <li>2 cups sliced fresh mushrooms</li>                                                            </ul>                                                        </div>                                                    </div>                                                    <!-- Nutrition Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Nutrition</h4>                                                            <ul class=\"nutrition-list\">                                                                <li>Calories <span>219</span></li>                                                                <li>Sugar <span>12.5g</span></li>                                                                <li>Protein <span>18.5g</span></li>                                                                <li>Fat <span>0.5g</span></li>                                                                <li>Fod Fat <span>0.3</span></li>                                                            </ul>                                                        </div>                                                    </div>                                                </div>                                                <div class=\"col-lg-6\">                                                    <!-- Ingredients Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Directions</h4>                                                            <ul class=\"direction-list\">                                                                <li><span>01</span><br>Divide dough in half. With                                                                    greased fingers, pat each half onto an ungreased                                                                    12-in. pizza pan. Prick dough thoroughly with a                                                                    fork. Bake at 400° until lightly browned, 10-12                                                                    minutes. Meanwhile, in a large skillet, cook the                                                                    sausage over medium heat until sausage is no longer                                                                    pink; drain.</li>                                                                <li><span>02</span><br>Spread pizza sauce over crusts.                                                                    Top with cheese, onion, green pepper, mushrooms and                                                                    sausage. Bake at 400° until golden brown and cheese                                                                    is bubbling, 12-15 minutes. If desired, top with                                                                    grated Parmesan cheese, crushed red pepper flakes                                                                    and fresh oregano leaves. Or wrap pizzas and freeze                                                                    for up to 2 months.</li>                                                                <li><span>03</span><br>To use frozen pizzas: Unwrap and                                                                    place on pizza pans; thaw in the refrigerator. Bake                                                                    at 400° for 18-22 minutes or until golden brown.                                                                </li>                                                            </ul>                                                        </div>                                                    </div>                                                </div>                                            </div>','asdasd,sadasda,',NULL,NULL,NULL,NULL,NULL,'uploads/blog/2024/03/AyCBs7V2JdD6TppxhNbEakuiC7Hey1fYJcS62Wlg.jpg',NULL,'Youtube_link','https://www.youtube.com/watch?v=El90XofXFHk','the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-2971787',1,'public','active','2024-03-01 09:07:30','2024-03-01 09:07:30');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'dddfdg',NULL,'dummy.png',NULL,'dddfdg-1153633','blog','active','2024-03-01 09:12:25','2024-03-01 09:12:25'),(4,'asdfasd',NULL,'dummy.png',NULL,'asdfasd-7394728','course','active','2024-03-01 09:12:32','2024-03-01 09:12:32');
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
  `message` text COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `course_comments`
--

DROP TABLE IF EXISTS `course_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint DEFAULT NULL,
  `user_id` bigint DEFAULT NULL,
  `reply_id` bigint DEFAULT NULL,
  `like` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `ip` bigint DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_comments`
--

LOCK TABLES `course_comments` WRITE;
/*!40000 ALTER TABLE `course_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_views`
--

DROP TABLE IF EXISTS `course_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_views` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` bigint DEFAULT NULL,
  `course_id` bigint DEFAULT NULL,
  `user_id` bigint DEFAULT NULL,
  `like` bigint DEFAULT NULL,
  `view` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_views`
--

LOCK TABLES `course_views` WRITE;
/*!40000 ALTER TABLE `course_views` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_views` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,4,'The Best Sausage','<div class=\"row\">                                                <div class=\"col-lg-12\">                                                    <div class=\"row\">                                                        <div class=\"col-lg-6\">                                                            <div class=\"discription-para\">                                                                <img src=\"https://mca-edu.com/frontend/images/resource/discription.jpg\" alt=\"\">                                                            </div>                                                        </div>                                                        <div class=\"col-lg-6\">                                                            <div class=\"discription-para\">                                                                <h4>The Best Sausage Pizzas Spread pizza sauce over                                                                    crusts. At libero totam fugiat vero ab distinctio                                                                    ducimus.</h4>                                                                <p>Lorem ipsum dolor sit, amet, consectetur adipisicing                                                                    elit. At libero totam fugiat vero ab distinctio                                                                    ducimus, dolores deserunt inventore repellendus                                                                    tempora fugit ipsum in alias placeat asperiores esse                                                                    quaerat quibusdam omnis facilis laudantium. Placeat                                                                    voluptatem nemo ea magnam modi quos esse accusamus                                                                    possimus reiciendis, corporis rem quo, voluptatibus                                                                    vel perferendis voluptates dolore.</p>                                                            </div>                                                        </div>                                                    </div>                                                </div>                                                <div class=\"col-lg-6\">                                                    <!-- Ingredients Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Ingredients</h4>                                                            <ul class=\"ingredients-list\">                                                                <li>1 pound bulk Italian sausage</li>                                                                <li>1 batch Best Pizza Dough (correct in RMS before                                                                    running NAs)</li>                                                                <li>1 cup pizza sauce</li>                                                                <li>4 cups shredded part-skim mozzarella cheese</li>                                                                <li>1 medium red onion, sliced</li>                                                                <li>1 medium green pepper, chopped</li>                                                                <li>2 cups sliced fresh mushrooms</li>                                                            </ul>                                                        </div>                                                    </div>                                                    <!-- Nutrition Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Nutrition</h4>                                                            <ul class=\"nutrition-list\">                                                                <li>Calories <span>219</span></li>                                                                <li>Sugar <span>12.5g</span></li>                                                                <li>Protein <span>18.5g</span></li>                                                                <li>Fat <span>0.5g</span></li>                                                                <li>Fod Fat <span>0.3</span></li>                                                            </ul>                                                        </div>                                                    </div>                                                </div>                                                <div class=\"col-lg-6\">                                                    <!-- Ingredients Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Directions</h4>                                                            <ul class=\"direction-list\">                                                                <li><span>01</span><br>Divide dough in half. With                                                                    greased fingers, pat each half onto an ungreased                                                                    12-in. pizza pan. Prick dough thoroughly with a                                                                    fork. Bake at 400° until lightly browned, 10-12                                                                    minutes. Meanwhile, in a large skillet, cook the                                                                    sausage over medium heat until sausage is no longer                                                                    pink; drain.</li>                                                                <li><span>02</span><br>Spread pizza sauce over crusts.                                                                    Top with cheese, onion, green pepper, mushrooms and                                                                    sausage. Bake at 400° until golden brown and cheese                                                                    is bubbling, 12-15 minutes. If desired, top with                                                                    grated Parmesan cheese, crushed red pepper flakes                                                                    and fresh oregano leaves. Or wrap pizzas and freeze                                                                    for up to 2 months.</li>                                                                <li><span>03</span><br>To use frozen pizzas: Unwrap and                                                                    place on pizza pans; thaw in the refrigerator. Bake                                                                    at 400° for 18-22 minutes or until golden brown.                                                                </li>                                                            </ul>                                                        </div>                                                    </div>                                                </div>                                            </div>',NULL,'uploads/course/2024/03/t060APXe8tpM0baADMWXxmbJe8vwZ94sQrXRACW1.jpg',NULL,NULL,NULL,NULL,NULL,'the-best-sausage-6981656',NULL,'active','2024-03-01 09:08:12','2024-03-01 09:12:59'),(2,4,'Th e Best Sausage Pizzas Spread pizza sauce over crusts e Best Sausage Pizzas Spread pizza sauce over crusts','<div class=\"row\">                                                <div class=\"col-lg-12\">                                                    <div class=\"row\">                                                        <div class=\"col-lg-6\">                                                            <div class=\"discription-para\">                                                                <img src=\"https://mca-edu.com/frontend/images/resource/discription.jpg\" alt=\"\">                                                            </div>                                                        </div>                                                        <div class=\"col-lg-6\">                                                            <div class=\"discription-para\">                                                                <h4>The Best Sausage Pizzas Spread pizza sauce over                                                                    crusts. At libero totam fugiat vero ab distinctio                                                                    ducimus.</h4>                                                                <p>Lorem ipsum dolor sit, amet, consectetur adipisicing                                                                    elit. At libero totam fugiat vero ab distinctio                                                                    ducimus, dolores deserunt inventore repellendus                                                                    tempora fugit ipsum in alias placeat asperiores esse                                                                    quaerat quibusdam omnis facilis laudantium. Placeat                                                                    voluptatem nemo ea magnam modi quos esse accusamus                                                                    possimus reiciendis, corporis rem quo, voluptatibus                                                                    vel perferendis voluptates dolore.</p>                                                            </div>                                                        </div>                                                    </div>                                                </div>                                                <div class=\"col-lg-6\">                                                    <!-- Ingredients Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Ingredients</h4>                                                            <ul class=\"ingredients-list\">                                                                <li>1 pound bulk Italian sausage</li>                                                                <li>1 batch Best Pizza Dough (correct in RMS before                                                                    running NAs)</li>                                                                <li>1 cup pizza sauce</li>                                                                <li>4 cups shredded part-skim mozzarella cheese</li>                                                                <li>1 medium red onion, sliced</li>                                                                <li>1 medium green pepper, chopped</li>                                                                <li>2 cups sliced fresh mushrooms</li>                                                            </ul>                                                        </div>                                                    </div>                                                    <!-- Nutrition Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Nutrition</h4>                                                            <ul class=\"nutrition-list\">                                                                <li>Calories <span>219</span></li>                                                                <li>Sugar <span>12.5g</span></li>                                                                <li>Protein <span>18.5g</span></li>                                                                <li>Fat <span>0.5g</span></li>                                                                <li>Fod Fat <span>0.3</span></li>                                                            </ul>                                                        </div>                                                    </div>                                                </div>                                                <div class=\"col-lg-6\">                                                    <!-- Ingredients Block -->                                                    <div class=\"ingredients-block\">                                                        <div class=\"block-inner\">                                                            <h4>Directions</h4>                                                            <ul class=\"direction-list\">                                                                <li><span>01</span><br>Divide dough in half. With                                                                    greased fingers, pat each half onto an ungreased                                                                    12-in. pizza pan. Prick dough thoroughly with a                                                                    fork. Bake at 400° until lightly browned, 10-12                                                                    minutes. Meanwhile, in a large skillet, cook the                                                                    sausage over medium heat until sausage is no longer                                                                    pink; drain.</li>                                                                <li><span>02</span><br>Spread pizza sauce over crusts.                                                                    Top with cheese, onion, green pepper, mushrooms and                                                                    sausage. Bake at 400° until golden brown and cheese                                                                    is bubbling, 12-15 minutes. If desired, top with                                                                    grated Parmesan cheese, crushed red pepper flakes                                                                    and fresh oregano leaves. Or wrap pizzas and freeze                                                                    for up to 2 months.</li>                                                                <li><span>03</span><br>To use frozen pizzas: Unwrap and                                                                    place on pizza pans; thaw in the refrigerator. Bake                                                                    at 400° for 18-22 minutes or until golden brown.                                                                </li>                                                            </ul>                                                        </div>                                                    </div>                                                </div>                                            </div>',NULL,'uploads/course/2024/03/qQp2iwLedBxx22F8G195fTPPohb6i8ZgJ65mJXeM.jpg',NULL,NULL,NULL,NULL,NULL,'the-best-sausage-pizzas-spread-pizza-sauce-over-crusts-5312531',NULL,'active','2024-03-01 09:08:31','2024-03-01 09:12:48');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2016_06_01_000001_create_oauth_auth_codes_table',1),(5,'2016_06_01_000002_create_oauth_access_tokens_table',1),(6,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(7,'2016_06_01_000004_create_oauth_clients_table',1),(8,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(9,'2019_08_19_000000_create_failed_jobs_table',1),(10,'2019_12_14_000001_create_personal_access_tokens_table',1),(11,'create_blogs_table',2),(12,'create_courses_table',2),(13,'create_categories_table',3),(14,'create_contact_us_table',3),(15,'create_sliders_table',3),(16,'create_users_table',3),(17,'create_website_settings_table',3);
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
INSERT INTO `oauth_access_tokens` VALUES ('9bc925d1372ced0d20c22192afb9c6348b71093938428bcb4f394da197fad7df575e69f5058f3217',1,1,'accessToken','[]',1,'2024-03-01 09:06:09','2024-03-01 09:06:09','2025-03-01 15:06:09'),('fafee61d2fff82d184b906f35f6b9488a799a4b862b196b1fbf38b05f8a49160bfa65db8467fd2fc',1,1,'accessToken','[]',0,'2024-03-01 10:02:29','2024-03-01 10:02:29','2025-03-01 16:02:29');
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
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','LKzRSm2TWBEFFBfnw4MPuogqY92ON1gcgFFe6Qxv',NULL,'http://localhost',1,0,0,'2024-03-01 08:44:41','2024-03-01 08:44:41'),(2,NULL,'Laravel Password Grant Client','ivTzXZtPKO8MxyX1ggd8Qydy0TqOxL5btiO9Zh2l','users','http://localhost',0,1,0,'2024-03-01 08:44:41','2024-03-01 08:44:41');
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
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2024-03-01 08:44:41','2024-03-01 08:44:41');
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
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'Culinary Chronicles: A Gastronomic Adventure','Embark on a flavorful journey with Culinary Chronicles, where we share delectable recipes, culinary tips, and gastronomic adventures from around the globe. From mouthwatering mains to','uploads/slider/2024-03-01-144446.jpeg',NULL,'culinary-chronicles-a-gastronomic-adventure-8261855','active','2024-03-01 08:44:46','2024-03-01 08:44:46'),(2,'Tasty Delights: A Journey Through Flavor','asty Delights invites you on a culinary voyage through tantalizing recipes, savory secrets, and the art of indulgence. Dive into a world of taste where each dish tells a unique story. From comforting','uploads/slider/2024-03-01-144540.jpeg',NULL,'tasty-delights-a-journey-through-flavor-4962741','active','2024-03-01 08:45:40','2024-03-01 08:45:40');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$12$uC9O0oI0T.XQ3dIW91LAWuKrB7G.Au7WIK7j3pGmcX0fQQQsMKmvS',NULL,NULL,'3771846','active','2024-03-01 08:44:41','2024-03-01 10:02:04'),(2,NULL,NULL,NULL,'$2y$12$tphTyzswkLY5JlYU0l2gxumI403/50ZSl1SdfqmdlJq432drpR1Re',NULL,NULL,'3432760','active','2024-03-01 09:50:59','2024-03-01 09:50:59');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `website_settings`
--

LOCK TABLES `website_settings` WRITE;
/*!40000 ALTER TABLE `website_settings` DISABLE KEYS */;
INSERT INTO `website_settings` VALUES (1,'site title','Modern Cooking Academy',0,0,NULL,'8021726','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(2,'site logo','frontend/images/logo.png',0,1,NULL,'5272130','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(3,'contact number','01333322657,01333322658',0,0,NULL,'1693437','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(4,'address','House #05, Avenue#01, Section-10, Mirpur, Dhaka-1216',0,0,NULL,'8464785','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(5,'facebook','https://www.facebook.com/moderncookingacademy\n                ',0,0,NULL,'6435531','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(6,'youtube','https://www.youtube.com/@moderncookingacademy\n                ',0,0,NULL,'9426232','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(7,'instagram','https://www.instagram.com/moderncookingacademy',0,0,NULL,'1737359','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(8,'twitter','https://twitter.com/modern_cooking_',0,0,NULL,'7228221','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(9,'gmail','moderncookingacademy@gmail.com',0,0,NULL,'5859633','active','2024-03-01 08:44:41','2024-03-01 08:44:41'),(10,'copyright','© All Right Reserved 2024',0,0,NULL,'42910726','active','2024-03-01 08:44:41','2024-03-01 08:44:41');
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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `website_visitor_count`
--

LOCK TABLES `website_visitor_count` WRITE;
/*!40000 ALTER TABLE `website_visitor_count` DISABLE KEYS */;
INSERT INTO `website_visitor_count` VALUES (1,'127.0.0.1','2024-03-01 08:45:04','2024-03-01 08:45:04'),(2,'127.0.0.1','2024-03-01 08:45:04','2024-03-01 08:45:04'),(3,'127.0.0.1','2024-03-01 08:46:08','2024-03-01 08:46:08'),(4,'127.0.0.1','2024-03-01 08:46:08','2024-03-01 08:46:08'),(5,'127.0.0.1','2024-03-01 08:46:29','2024-03-01 08:46:29'),(6,'127.0.0.1','2024-03-01 08:48:48','2024-03-01 08:48:48'),(7,'127.0.0.1','2024-03-01 08:48:48','2024-03-01 08:48:48'),(8,'127.0.0.1','2024-03-01 08:51:33','2024-03-01 08:51:33'),(9,'127.0.0.1','2024-03-01 08:51:33','2024-03-01 08:51:33'),(10,'127.0.0.1','2024-03-01 08:51:59','2024-03-01 08:51:59'),(11,'127.0.0.1','2024-03-01 08:52:00','2024-03-01 08:52:00'),(12,'127.0.0.1','2024-03-01 08:52:08','2024-03-01 08:52:08'),(13,'127.0.0.1','2024-03-01 08:52:08','2024-03-01 08:52:08'),(14,'127.0.0.1','2024-03-01 08:53:02','2024-03-01 08:53:02'),(15,'127.0.0.1','2024-03-01 08:53:04','2024-03-01 08:53:04'),(16,'127.0.0.1','2024-03-01 08:53:04','2024-03-01 08:53:04'),(17,'127.0.0.1','2024-03-01 08:54:10','2024-03-01 08:54:10'),(18,'127.0.0.1','2024-03-01 08:54:10','2024-03-01 08:54:10'),(19,'127.0.0.1','2024-03-01 08:54:33','2024-03-01 08:54:33'),(20,'127.0.0.1','2024-03-01 08:54:33','2024-03-01 08:54:33'),(21,'127.0.0.1','2024-03-01 08:54:35','2024-03-01 08:54:35'),(22,'127.0.0.1','2024-03-01 08:54:40','2024-03-01 08:54:40'),(23,'127.0.0.1','2024-03-01 08:54:40','2024-03-01 08:54:40'),(24,'127.0.0.1','2024-03-01 08:55:43','2024-03-01 08:55:43'),(25,'127.0.0.1','2024-03-01 08:55:43','2024-03-01 08:55:43'),(26,'127.0.0.1','2024-03-01 08:57:54','2024-03-01 08:57:54'),(27,'127.0.0.1','2024-03-01 08:57:54','2024-03-01 08:57:54'),(28,'127.0.0.1','2024-03-01 08:58:25','2024-03-01 08:58:25'),(29,'127.0.0.1','2024-03-01 08:58:25','2024-03-01 08:58:25'),(30,'127.0.0.1','2024-03-01 09:01:10','2024-03-01 09:01:10'),(31,'127.0.0.1','2024-03-01 09:01:10','2024-03-01 09:01:10'),(32,'127.0.0.1','2024-03-01 09:01:35','2024-03-01 09:01:35'),(33,'127.0.0.1','2024-03-01 09:01:35','2024-03-01 09:01:35'),(34,'127.0.0.1','2024-03-01 09:05:29','2024-03-01 09:05:29'),(35,'127.0.0.1','2024-03-01 09:05:29','2024-03-01 09:05:29'),(36,'127.0.0.1','2024-03-01 09:06:02','2024-03-01 09:06:02'),(37,'127.0.0.1','2024-03-01 09:06:02','2024-03-01 09:06:02'),(38,'127.0.0.1','2024-03-01 09:08:36','2024-03-01 09:08:36'),(39,'127.0.0.1','2024-03-01 09:08:36','2024-03-01 09:08:36'),(40,'127.0.0.1','2024-03-01 09:08:48','2024-03-01 09:08:48'),(41,'127.0.0.1','2024-03-01 09:09:02','2024-03-01 09:09:02'),(42,'127.0.0.1','2024-03-01 09:09:02','2024-03-01 09:09:02'),(43,'127.0.0.1','2024-03-01 09:09:05','2024-03-01 09:09:05'),(44,'127.0.0.1','2024-03-01 09:09:28','2024-03-01 09:09:28'),(45,'127.0.0.1','2024-03-01 09:09:32','2024-03-01 09:09:32'),(46,'127.0.0.1','2024-03-01 09:09:40','2024-03-01 09:09:40'),(47,'127.0.0.1','2024-03-01 09:09:51','2024-03-01 09:09:51'),(48,'127.0.0.1','2024-03-01 09:10:10','2024-03-01 09:10:10'),(49,'127.0.0.1','2024-03-01 09:10:13','2024-03-01 09:10:13'),(50,'127.0.0.1','2024-03-01 09:10:16','2024-03-01 09:10:16'),(51,'127.0.0.1','2024-03-01 09:10:20','2024-03-01 09:10:20'),(52,'127.0.0.1','2024-03-01 09:10:20','2024-03-01 09:10:20'),(53,'127.0.0.1','2024-03-01 09:10:31','2024-03-01 09:10:31'),(54,'127.0.0.1','2024-03-01 09:10:54','2024-03-01 09:10:54'),(55,'127.0.0.1','2024-03-01 09:10:56','2024-03-01 09:10:56'),(56,'127.0.0.1','2024-03-01 09:11:05','2024-03-01 09:11:05'),(57,'127.0.0.1','2024-03-01 09:11:05','2024-03-01 09:11:05'),(58,'127.0.0.1','2024-03-01 09:11:12','2024-03-01 09:11:12'),(59,'127.0.0.1','2024-03-01 09:11:13','2024-03-01 09:11:13'),(60,'127.0.0.1','2024-03-01 09:11:13','2024-03-01 09:11:13'),(61,'127.0.0.1','2024-03-01 09:11:13','2024-03-01 09:11:13'),(62,'127.0.0.1','2024-03-01 09:11:14','2024-03-01 09:11:14'),(63,'127.0.0.1','2024-03-01 09:11:14','2024-03-01 09:11:14'),(64,'127.0.0.1','2024-03-01 09:11:58','2024-03-01 09:11:58'),(65,'127.0.0.1','2024-03-01 09:11:58','2024-03-01 09:11:58'),(66,'127.0.0.1','2024-03-01 09:12:52','2024-03-01 09:12:52'),(67,'127.0.0.1','2024-03-01 09:12:52','2024-03-01 09:12:52'),(68,'127.0.0.1','2024-03-01 09:13:01','2024-03-01 09:13:01'),(69,'127.0.0.1','2024-03-01 09:13:01','2024-03-01 09:13:01'),(70,'127.0.0.1','2024-03-01 10:02:13','2024-03-01 10:02:13'),(71,'127.0.0.1','2024-03-01 10:02:13','2024-03-01 10:02:13'),(72,'127.0.0.1','2024-03-01 10:03:49','2024-03-01 10:03:49'),(73,'127.0.0.1','2024-03-01 10:03:58','2024-03-01 10:03:58'),(74,'127.0.0.1','2024-03-01 10:03:58','2024-03-01 10:03:58');
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

-- Dump completed on 2024-03-01 22:07:05
