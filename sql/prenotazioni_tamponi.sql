-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: prenotazioni_tamponi
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `prenotazioni`
--

DROP TABLE IF EXISTS `prenotazioni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prenotazioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codice_fiscale` varchar(16) NOT NULL,
  `giorno` date NOT NULL,
  `codice_prenotazione` varchar(200) NOT NULL,
  `eseguito` tinyint(1) NOT NULL DEFAULT 0,
  `note` text DEFAULT NULL,
  `annullato` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prenotazioni`
--

LOCK TABLES `prenotazioni` WRITE;
/*!40000 ALTER TABLE `prenotazioni` DISABLE KEYS */;
INSERT INTO `prenotazioni` VALUES (18,'oggi20','2021-03-20','1df4de15-fafa-48a4-9a31-46f944bbe980',0,NULL,0),(19,'sempreoggi20','2021-03-20','f2e3d6f5-ad50-4f4e-aed8-3d89b41038af',0,NULL,0),(20,'edewfwfewf666','2021-03-20','cb1e6687-6c93-4af2-b55f-7ddba5cdca84',0,NULL,0),(21,'HAHAHva','2021-03-20','3adbabb6-1c0e-4f21-bc3e-24c9181d1c33',0,NULL,0),(22,'HAHAHvasda','2021-03-20','e66718f7-99c5-44db-81ab-08f11da3a729',0,NULL,0),(23,'HAHAHff','2021-03-20','0f1aef1b-9c2a-4c3b-9993-6592ec46bf6b',0,NULL,0),(24,'giornodioggi','2021-03-20','baf89354-2ad4-4265-9364-5d126393612e',0,NULL,0),(30,'giornodioggi2222','2021-03-16','327142df-b0d8-4b47-ad96-11c7df14cb3b',0,NULL,0),(31,'aaaaaaaaaa','2021-03-04','abfe6d86-f36c-4883-860c-5fb09e7404de',0,NULL,0),(32,'ennesimotest','2021-03-14','ceee5403-3284-4e51-a735-e9b69a01f4ce',0,NULL,0),(33,'wwwwwww','2021-03-27','92ee2ab2-1dbf-4f32-b84e-dbae9d0c59e7',0,NULL,1),(34,'dddddd','2021-03-23','90c342b0-368e-4d1b-abc9-41b855663a1d',0,NULL,0),(35,'vvvvv','2021-03-19','6517f150-0790-464b-98f5-048850954d98',0,NULL,0),(37,'mmmmmm','2021-03-27','84228635-1d98-4797-bdcf-20d70d80d89f',1,'tampone eseguito per prova',0);
/*!40000 ALTER TABLE `prenotazioni` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-01 17:57:04
