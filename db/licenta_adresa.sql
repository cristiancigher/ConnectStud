-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: licenta
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.32-MariaDB

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
-- Table structure for table `adresa`
--

DROP TABLE IF EXISTS `adresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adresa` (
  `id_adresa` int(11) NOT NULL,
  `strada` varchar(45) NOT NULL,
  `numar` int(11) NOT NULL,
  `coord_latitudine` varchar(45) DEFAULT NULL,
  `coord_longitudine` varchar(45) DEFAULT NULL,
  `maps` varchar(4500) DEFAULT NULL,
  PRIMARY KEY (`id_adresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adresa`
--

LOCK TABLES `adresa` WRITE;
/*!40000 ALTER TABLE `adresa` DISABLE KEYS */;
INSERT INTO `adresa` VALUES (0,'G. Baritiu',26,'46.769310','23.585568','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.621241180029!2d23.583018815822548!3d46.77236175322377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490e9b85ff8931%3A0x9a21cdd271a51c8b!2sFacultatea+de+Automatic%C4%83+%C8%99i+Calculatoare!5e0!3m2!1sro!2sro!4v1528957435713\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),(1,'Observatorului',72,'46.755468','23.587488','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87471.1854328587!2d23.51745883872058!3d46.755541946403326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490dd39ac549d1%3A0x5710aa73f105a965!2sUniversitatea+Tehnic%C4%83+din+Cluj-Napoca+-+Facultatea+de+Construc%C8%9Bii!5e0!3m2!1sro!2sro!4v1528957829689\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),(2,'Cal. Dorobantilor',71,'46.774076','23.607792','<a href=\"\">Click here</a>'),(3,'Bulevardul Muncii',16,'46.796144','23.626175',NULL);
/*!40000 ALTER TABLE `adresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-21 22:43:59
