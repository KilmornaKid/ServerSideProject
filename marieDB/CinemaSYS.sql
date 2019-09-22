-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: CinemaSYS
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `custid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` char(20) NOT NULL,
  `surname` char(20) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Kieran','Stack','ks','12345',50),(3,'Tim','Stack','ts','12345',20),(7,'Steven','Stack','panda','12345',60.49),(15,'Kieran','Stack','t00184968','123',50.5),(16,'Kieran','Stack','t00184968','123',50.5),(17,'Kieran','Stack','lotto_lad','123',50.5);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies` (
  `movieid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Running_Time` time NOT NULL,
  `Description` tinytext NOT NULL,
  `Age_Rating` char(3) NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'HALLOWEEN','00:01:06','HALLOWEEN is a US horror film in which a serial killer escapes prison and hunts down the woman who evaded him forty years earlier.','18'),(2,'BOHEMIAN RHAPSODY','00:01:34','BOHEMIAN RHAPSODY is a biopic drama following the life and music career of Freddie Mercury.','12A'),(3,'OVERLORD','00:01:10','OVERLORD is a horror film, set during World War II, in which US paratroopers discover the results of secret Nazi experiments.','18'),(4,'VENOM','00:00:00','VENOM is a US sci-fi action fantasy in which alien organisms are brought back to Earth.','15'),(5,'ROBIN HOOD','00:00:00','ROBIN HOOD is an action adventure film in which a nobleman assumes a secret persona as a thief.','12A'),(6,'THE GRINCH','00:01:26','THE GRINCH is a US animated comedy in which a grumpy creature plots to steal Christmas.','U'),(7,'CREED 2','00:01:02','CREED 2 is a sports drama in which a heavyweight boxer seeks to avenge his fathers death.','12A'),(8,'Pokemon','00:01:09','Pokémon the Movie: The Power of Us is a 2018 Japanese anime adventure film','U'),(9,'WRECK IT RALPH 2 ','00:01:10','RALPH BREAKS THE INTERNET is an animated adventure in which two friends enter the internet in order to find a part to fix a game.','PG'),(10,'FANTASTIC BEASTS 2','00:01:02','FANTASTIC BEASTS: THE CRIMES OF GRINDELWALD is a fantasy adventure film in which a dark wizard hatches a plan to subjugate all non-magical beings','12A'),(11,'ONCE UPON A DEADPOOL','00:01:16','ONCE UPON A DEADPOOL is a US action adventure in which a superhero finds new purpose when he assembles a team to rescue a young mutant.','15'),(12,'THE NUTCRACKER','00:00:00','THE NUTCRACKER is a recording of a live performance of the classic Christmas ballet.','U');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `screen`
--

DROP TABLE IF EXISTS `screen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `screen` (
  `screenid` int(11) NOT NULL AUTO_INCREMENT,
  `num_of_seats` int(11) NOT NULL,
  `type` enum('Standard','IMAX','3D') NOT NULL,
  PRIMARY KEY (`screenid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `screen`
--

LOCK TABLES `screen` WRITE;
/*!40000 ALTER TABLE `screen` DISABLE KEYS */;
INSERT INTO `screen` VALUES (1,200,'Standard'),(2,200,'Standard'),(3,200,'IMAX'),(4,200,'3D');
/*!40000 ALTER TABLE `screen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `screenings`
--

DROP TABLE IF EXISTS `screenings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `screenings` (
  `screeningid` int(11) NOT NULL AUTO_INCREMENT,
  `SC_DateFrom` date NOT NULL,
  `SC_DateTo` date NOT NULL,
  `SC_Time` time NOT NULL,
  `screenid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  PRIMARY KEY (`screeningid`),
  KEY `screenid` (`screenid`),
  KEY `movieid` (`movieid`),
  CONSTRAINT `screenings_ibfk_1` FOREIGN KEY (`screenid`) REFERENCES `screen` (`screenid`),
  CONSTRAINT `screenings_ibfk_2` FOREIGN KEY (`movieid`) REFERENCES `movies` (`movieid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `screenings`
--

LOCK TABLES `screenings` WRITE;
/*!40000 ALTER TABLE `screenings` DISABLE KEYS */;
INSERT INTO `screenings` VALUES (5,'2018-12-10','2018-12-24','14:00:00',1,12),(6,'2018-12-10','2018-12-24','18:00:00',1,11),(7,'2018-12-10','2018-12-24','21:00:00',1,1),(8,'2018-12-10','2018-12-24','14:00:00',2,9),(9,'2018-12-10','2018-12-24','18:00:00',2,10),(10,'2018-12-10','2018-12-24','21:00:00',2,3),(11,'2018-12-10','2018-12-24','14:00:00',3,8),(12,'2018-12-10','2018-12-24','18:00:00',3,7),(13,'2018-12-10','2018-12-24','21:00:00',3,4),(14,'2018-12-10','2018-12-24','14:00:00',4,6),(15,'2018-12-10','2018-12-24','18:00:00',4,5),(16,'2018-12-10','2018-12-24','21:00:00',4,2);
/*!40000 ALTER TABLE `screenings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-11 22:53:44
