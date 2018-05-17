-- MySQL dump 10.13  Distrib 5.5.59, for Linux (x86_64)
--
-- Host: localhost    Database: message-board
-- ------------------------------------------------------
-- Server version	5.5.59

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'re','re',NULL,'2018-05-15 07:45:38'),(2,'hg','hg',NULL,'2018-05-15 07:47:12'),(3,'gf','gf',NULL,'2018-05-15 07:47:32'),(4,'gf','gf',NULL,'2018-05-15 07:47:59'),(5,'yt','yt',NULL,'2018-05-15 07:48:03'),(6,'yt','yt',NULL,'2018-05-15 07:49:31'),(7,'sd','ds',NULL,'2018-05-15 07:49:45'),(8,'sd','ds',NULL,'2018-05-15 07:50:47'),(9,'sdd','dssd',NULL,'2018-05-15 07:50:57'),(10,'dd','asd',NULL,'2018-05-15 07:51:18'),(11,'j','hj',NULL,'2018-05-15 07:52:36'),(12,'sa','dasd',NULL,'2018-05-15 07:55:15'),(13,'asd','asd','src/','2018-05-15 07:56:15'),(14,'yr','ertte','src/','2018-05-15 07:58:36'),(15,'we','we',NULL,'2018-05-15 08:02:18'),(16,'r4w','ewr','src/','2018-05-15 08:12:28'),(17,'sf','sdf','./src/','2018-05-15 08:13:16'),(18,'sf','sdf','./src/','2018-05-15 08:13:36'),(19,'asd','asd','./src/','2018-05-15 08:13:43'),(20,'asd','asd','/src/','2018-05-15 08:22:16'),(21,'アｓ','サだｓ','/src/','2018-05-15 08:23:42'),(22,'qwce','qwce','/src/','2018-05-15 08:26:49'),(23,'sad','asd','/src/','2018-05-15 08:28:06'),(24,'dsf','sdf','src/qw.png','2018-05-15 08:31:45'),(25,'s','dg','src/qw.png20180515083820','2018-05-15 08:38:20'),(26,'teemo','1234','src/left_mv_tm.png20180515084009','2018-05-15 08:40:09'),(27,'we','qwe',NULL,'2018-05-15 08:41:17'),(28,'dsc',' FASZX','src/qw.png20180515084534','2018-05-15 08:45:34'),(29,'fsd','ddf','src/qw.png20180515085708','2018-05-15 08:57:08'),(30,'re gbegbr','gfsgs','4083fac496252106352dbdb46a1041db','2018-05-15 08:58:12'),(31,'dsf','sdf','1b37a018b659137898d15f2f25a6e48a','2018-05-15 08:59:08'),(32,'asd','asd','cXcucG5nMjAxODA1MTUwOTAxMTk=','2018-05-15 09:01:19'),(33,'asd','sd','cXcucG5nMjAxODA1MTUwOTAzMDc=','2018-05-15 09:03:07'),(34,'asd','sdf','cXcucG5nMjAxODA1MTUwOTAzMzU=','2018-05-15 09:03:35'),(35,'qwe','qwe','src/cXcucG5nMjAxODA1MTUwOTA0NTU=','2018-05-15 09:04:55');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2018-05-17  1:44:59
