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
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `an` int(11) DEFAULT NULL,
  `faculty` varchar(45) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `msg` varchar(4500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (1,1,'Automation','cristy','cristi'),(2,1,'Automation','cristy','tu ?'),(3,1,'Automation','cristy','bine'),(4,1,'Automation','test','salut'),(5,1,'Automation','cristy','ciao'),(6,1,'Automation','test','ce faci ?'),(7,1,'Automation','cristy','fb'),(8,1,'Automation','Ion','Salut'),(9,1,'Automation','Ion','ce ?'),(10,1,'Automation','Ion',''),(11,1,'Automation','cristy','ce?'),(12,1,'Automation','Ion','ce faci ?'),(13,1,'Automation','cristy','bine tu ?'),(14,1,'Automation','test','ce ?'),(15,1,'Automation','cristy','*2'),(16,1,'Automation','cristy',''),(17,1,'Automation','cristy',''),(18,1,'Computer Science','Carmen','as'),(19,1,'Automation','cristy','da'),(20,1,'Automation','cristy','bu'),(21,1,'Computer Science','Carmen',''),(22,1,'Computer Science','Carmen','sa'),(23,1,'Automation','Carmen','da'),(24,1,'Automation','cristy','k'),(25,1,'Automation','tina','SALUT'),(26,1,'Automation','cristy','ccc'),(27,1,'Automation','cristy','da'),(28,1,'Automation','cristy','da'),(29,1,'Automation','cristy','ds'),(30,1,'Automation','cristy','s'),(31,1,'Automation','cristy','Ce faci ?'),(32,1,'Automation','cristina','Bine tu ?'),(33,1,'Automation','cristy','Si io');
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-21 22:43:58
