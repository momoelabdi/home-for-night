-- MySQL dump 10.13  Distrib 8.0.31, for macos10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: home_for_night
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `listings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoster` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `listings_user_id_foreign` (`user_id`),
  CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listings`
--

LOCK TABLES `listings` WRITE;
/*!40000 ALTER TABLE `listings` DISABLE KEYS */;
INSERT INTO `listings` VALUES (14,13,'Hideaway in the countryside','logos/p4lRxS7TgE0kBnCOx24Q0oR678NHFRvzfngxW9li.jpg','Dinner and Breakfast','Panding...','Michiko & Robert','Meckesheim, Germany','momo.elabdi@bluewin.ch','This place is a paradise surrounded by greenery and ideal for relaxing, working or for creative activities. The wellness car lives up to its name. 29 square meters of feel-good space with a cosy outdoor area are waiting for you','2023-01-21 19:41:13','2023-01-25 10:17:53'),(15,13,'Sea & Quiet + Bicycles','logos/oyV1TuWbSLBP5WZ2YDrK5GmE3PwglJOtyI2B5rNs.jpg','Dinner and Breakfast','Panding...','Lucrezia','Borgio, Liguria, Italy','elabdiafric@gmail.com','\"CheZeno\" is located in Borgio Verezzi, Liguria, a small hamlet of Finale Ligure, a famous seaside resort accredited with the Blue Flag. \r\nBorgio boasts a crystal clear sea and wild and uncontaminated nature, and enjoys an always mild climate.','2023-01-25 10:01:09','2023-01-25 10:01:09'),(16,13,'the green, barrier-free','logos/j1fBC4GPozQ2OTNOJpAQ2NBTgYArU7oKgcOaObyC.jpg','Dinner and Breakfast','Panding...','Thomas','Baden-Württemberg, Germany','elabdiafric@gmail.com','Sustainable, ecological, healthy living, barrier-free! Our new Finnish wooden house offers an unparalleled living experience.\r\nWhether hiking, biking, Europapark, Alsace, Black Forest, or simply everything or nothing at all, you can reach your destination in a few minutes from the Hasenbau!','2023-01-25 10:13:56','2023-01-25 10:14:43'),(17,13,'Swiss atmosphere','logos/xo5MnBsbsSi53UklYg4Y3IwhMJqiQve2ho80H2Jj.jpg','Dinner and Breakfast','Panding...','Monique','Brienz, Bern, Switzerland','elabdiafric@gmail.com','Swiss atmosphere at Lake Brienz with a phenomenal VIEW of the mountains and the lake! ONLY 1-3 minutes walk from the train station, hiking and shopping facilities,tourist information, restaurants, boat rental, bus and boat station! Distance by car in minutes','2023-01-25 10:25:20','2023-01-25 10:25:20'),(18,13,'Arial Penthouse','logos/9qDhRSQS3ftR9IJklN8aeGuXcbyVtZgIAyFwXS6o.jpg','Dinner and Breakfast','Panding...','Asher','Zermatt, Valais, Switzerland','elabdiafric@gmail.com','There is a spacious lounge with stunning Matterhorn views and an open fire. The property is offered on a self-catered basis in summer and catered or self-catered in the winter months.','2023-01-25 10:32:16','2023-01-25 10:32:16'),(19,13,'the heart of Chefchaouen','logos/FvpEC566IFLHykbazgm1hSXQVlmbcCRMi4mi2UKE.jpg','Dinner and Breakfast','Panding...','Nizar','Chefchaouen, Tanger, Morocco','elabdiafric@gmail.com','beautiful location, just above the city wall. Breathtaking views from the windows and terrace. Above a delicious cafe that\'s excellent for breakfast. Located in the old town and a short walk to the waterfall and Spanish Mosque (perfect for sunset)','2023-01-25 10:39:39','2023-01-25 10:39:39'),(20,13,'Lake Como Beach','logos/2NqLY4hQjmaz3LMrZiNLC5dFtcAQsd9c60ioXoFc.jpg','Dinner and Breakfast','Panding...','Fabio','Domaso, Lombardia, Italy','elabdiafric@gmail.com','Right front the lake with a beatiful beach, entirely renewed building and new owners!\r\nImagine to have breakfast in the beach terrace and let the magic of the lake bring in another atmosphere.','2023-01-25 10:43:06','2023-01-25 10:43:06'),(21,13,'Ninon and Leon Eguisheim\'s','logos/6MD65vvW7UVaZ6Jnl5o7JRqJNydCHjV6DRt8G21J.jpg','Breakfast','Panding...','Céline','Eguisheim, Grand Est, France','elabdiafric@gmail.com','Equipped with a key box, we offer a contactless, self-contained 💯% entry. We invite you to the cocoon on the ground floor of our house. A room (with kitchenette, dining area, sofa bed, tv), a bedroom with bathroom, a separate toilet. Outside a private terrace of 35m2 with a view of the three breathtaking castles!','2023-01-25 10:49:02','2023-01-25 10:49:02'),(22,13,'Guesthouse Wörner','logos/gBanG9ziz0Z2oINwipZSeiNJPgP7QvhpymXFJ5gw.jpg','Dinner and Breakfast','Panding...','Christiane','Durbach, Germany','elabdiafric@gmail.com','Adjacent to our fruit and wine farm, the guesthouse is quiet, away from traffic, in the idyllic Vollmersbachtal. It is the ideal starting point for long walks and nature walks as well as for cycling and mountain biking tours. You can reach the town centre by foot in about 15 minutes via the \"Vollmersbacher Kirchweg\"','2023-01-25 11:05:18','2023-01-25 11:07:09'),(23,13,'Classy and Cool hosting','logos/GbFZQ1NJoTntfqCSClIO5NJfEiqcT5VLg9YfWuop.jpg','Dinner and Breakfast','Panding...','Connie','Les Houches, Alpes, France','elabdiafric@gmail.com','Modern wooden chalet with fantastic view over the whole valley and into the stunning austrian Alps. 3 floors with supercomfy charme, located above Schwarzenberg and a 5 minute drive to the Bödele ski resort.','2023-01-25 11:12:40','2023-01-25 11:12:40'),(24,13,'Sunflower House','logos/hglDyij0KBIxmaeT1XPcTKezjZ902lY0Gvh34Jk1.jpg','Dinner and Breakfast','Panding...','Geoff','El Port de la Selva, Spain','elabdiafric@gmail.com','Beautiful 4 bedroom architecturally designed villa, with infinity pool and floor to ceiling views in almost every room of the sea and Cap de Creus national park, in beautiful working fishing village in Northern Spain.','2023-01-25 11:16:56','2023-01-25 11:16:56'),(25,13,'Westport Island Stilt House','logos/aBJ68MDT5HFHb3pxOo9l7edn9pr9ZxhacOsJ9J6a.jpg','Dinner and Breakfast','Panding...','Alexandra','Westport Island, Maine, US','elabdiafric@gmail.com','The building is nestled at the water\'s edge, half on land and half on stilts over the tidal waters of the Sheepscot River. The property has its own private deck, island, rocky beach, trails and hammock.\r\nThis is an old structure - over 200 years old! A great piece of history and an absolute oasis.','2023-01-25 11:28:43','2023-01-25 11:28:43');
/*!40000 ALTER TABLE `listings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (106,'2014_10_12_000000_create_users_table',1),(107,'2014_10_12_100000_create_password_resets_table',1),(108,'2019_08_19_000000_create_failed_jobs_table',1),(109,'2019_12_14_000001_create_personal_access_tokens_table',1),(110,'2022_12_03_190827_create_listings_table',1),(111,'2022_12_27_155409_create_reservations_table',2),(112,'2022_12_27_163240_add_message_to_reservations_table',3),(113,'2023_01_08_134627_add_status_to_listings_table',3),(114,'2023_01_11_091800_alter_table_listings_change_description',3),(115,'2023_01_21_141003_add_status_to_listings_table',3),(116,'2023_01_21_184351_add_google_id_to_users_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservations_user_id_foreign` (`user_id`),
  KEY `reservations_listing_id_foreign` (`listing_id`),
  CONSTRAINT `reservations_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (2,'2023-01-27 00:00:00','2023-02-03 00:00:00',12,'me@gmail.com','Momo','wEVAWVCAERVQ',14,'2023-01-24 09:20:50','2023-01-24 09:20:50'),(10,'2023-01-27 00:00:00','2023-01-28 00:00:00',13,'momo.elabdi@bluewin.ch','Momo','hello',21,'2023-01-25 10:54:14','2023-01-25 10:54:14');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (12,'Momo','dadsa@gmail.com',NULL,'$2y$10$uduqnYEwIxiv6g8E619RyuwTzmTDcqxmHOVcjduFcnh.9NZBqpfTq',NULL,'2023-01-21 13:03:56','2023-01-21 13:03:56',NULL),(13,'Momo Elabdi','elabdiafric@gmail.com',NULL,'$2y$10$yy.aBjlBUbr8N1iv2eHaCu2Aoo3SKJxjXvXdZFRisJWG0iOWsM0Q.',NULL,'2023-01-21 17:46:18','2023-01-21 17:46:18','103955309462241383682');
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

-- Dump completed on 2023-01-25 17:44:56
