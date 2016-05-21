-- MySQL dump 10.13  Distrib 5.5.8, for Win32 (x86)
--
-- Host: localhost    Database: MentorDB
-- ------------------------------------------------------
-- Server version	5.5.8-log

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
-- Table structure for table `fb_friend_status`
--

DROP TABLE IF EXISTS `fb_friend_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fb_friend_status` (
  `pk_int_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_int_member_id` int(11) DEFAULT NULL,
  `fk_int_friend_id` int(11) DEFAULT NULL,
  `vchr_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pk_int_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fb_friend_status`
--

LOCK TABLES `fb_friend_status` WRITE;
/*!40000 ALTER TABLE `fb_friend_status` DISABLE KEYS */;
INSERT INTO `fb_friend_status` VALUES (1,1,2,'Pending');
/*!40000 ALTER TABLE `fb_friend_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fb_members`
--

DROP TABLE IF EXISTS `fb_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fb_members` (
  `pk_int_member_id` int(11) NOT NULL AUTO_INCREMENT,
  `vchr_first_name` varchar(100) DEFAULT NULL,
  `vchr_last_name` varchar(100) DEFAULT NULL,
  `vchr_password` varchar(100) DEFAULT NULL,
  `vchr_email` varchar(190) DEFAULT NULL,
  `int_day` int(11) DEFAULT NULL,
  `vchr_month` varchar(10) DEFAULT NULL,
  `int_year` int(11) DEFAULT NULL,
  `vchr_gender` varchar(10) DEFAULT NULL,
  `vchr_prof_pic` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`pk_int_member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fb_members`
--

LOCK TABLES `fb_members` WRITE;
/*!40000 ALTER TABLE `fb_members` DISABLE KEYS */;
INSERT INTO `fb_members` VALUES (1,'Christopher','Zackariya','chriSz123','chrisZ@chriZmail.in',21,'Feb',1998,'m','http://13.76.212.119/MentorGallery/christopher.jpg'),(2,'Jennifer','DSouza','jenni123','jennifer@hotmail.in',18,'Mar',1994,'f','http://13.76.212.119/MentorGallery/jennifer.jpg');
/*!40000 ALTER TABLE `fb_members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-21 12:21:55
