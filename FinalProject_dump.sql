-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: FinalProject
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `Appointment`
--

DROP TABLE IF EXISTS `Appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Appointment` (
  `AppointmentID` bigint(10) NOT NULL AUTO_INCREMENT,
  `PatientUsrName` varchar(16) NOT NULL,
  `StaffUsrName` varchar(16) NOT NULL,
  `Date` date DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `Description` longtext NOT NULL,
  PRIMARY KEY (`AppointmentID`),
  KEY `PatientUsrName` (`PatientUsrName`),
  KEY `StaffUsrName` (`StaffUsrName`),
  CONSTRAINT `Appointment_ibfk_1` FOREIGN KEY (`PatientUsrName`) REFERENCES `Patient` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Appointment_ibfk_2` FOREIGN KEY (`StaffUsrName`) REFERENCES `Doctor` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Appointment`
--

LOCK TABLES `Appointment` WRITE;
/*!40000 ALTER TABLE `Appointment` DISABLE KEYS */;
INSERT INTO `Appointment` VALUES (1,'ddd','sss','2016-05-16',0,''),(17,'ddd','sss','2016-05-06',0,''),(18,'aaa','sss','2016-05-06',0,''),(19,'aaa','sss','2016-05-06',0,''),(20,'aaa','sss','2016-11-18',0,''),(21,'aaa','sss','2016-11-18',0,''),(22,'aaa','sss','2016-11-18',0,''),(23,'ddd','sss','2015-06-19',0,''),(24,'ddd','sss','1998-05-06',0,''),(25,'ddd','sss','1998-05-06',0,''),(26,'ddd','sss','2016-05-19',0,''),(27,'aaa','sss','2015-06-19',0,''),(28,'aaa','sss','2014-06-15',0,''),(29,'aaa','sss','2016-11-09',0,''),(30,'ddd','sss','2014-06-15',0,''),(31,'ddd','sss','1998-05-06',0,''),(32,'ddd','sss','2016-11-19',0,''),(33,'ddd','sss','2016-11-10',0,''),(34,'ddd','sss','2016-05-19',0,''),(45,'ddd','sss','2016-11-20',0,'cadd'),(46,'ddd','sss','2016-11-20',0,'cadd'),(47,'ddd','qqq','2016-11-20',0,'cdhjb'),(48,'ddd','qqq','2016-11-20',0,'cdhjb'),(49,'ddd','sss','2016-11-20',0,'cadd'),(51,'ddd','sss','2016-11-20',0,'cadd'),(52,'ddd','sss','2016-11-20',0,'cadd'),(53,'ddd','qqq','2016-11-20',0,'cadd'),(54,'ddd','qqq','2016-12-21',0,'cdsnck'),(55,'ddd','qqq','2016-12-21',0,'cdsnck'),(56,'ddd','qqq','2016-12-21',0,'cdsnck'),(57,'ddd','qqq','2016-12-21',0,'cdsnck'),(58,'ddd','sss','2016-12-21',0,'cdsnck'),(59,'ddd','sss','2016-12-21',0,'cdsnck'),(60,'ddd','sss','2016-12-21',0,'cdsnck'),(61,'ddd','qqq','2016-12-21',0,'cdsnck'),(62,'ddd','qqq','2016-12-22',0,'cdsnck'),(63,'ddd','sss','2016-12-22',0,'cdsnck'),(64,'ddd','sss','2016-12-22',0,'cdsnck'),(65,'ddd','sss','2016-12-22',0,'cdsnck'),(66,'ddd','sss','0000-00-00',0,'dhcbcjhsbdc'),(67,'ddd','qqq','2016-11-30',0,'dhcbcjhsbdc'),(68,'ddd','qqq','2016-11-29',0,'dhcbcjhsbdc'),(69,'ddd','qqq','2016-11-29',0,'dhcbcjhsbdc'),(70,'ddd','qqq','2016-11-29',0,'dhcbcjhsbdc'),(71,'ddd','qqq','2016-11-28',0,'dhcbcjhsbdc'),(72,'ddd','sss','2016-11-25',0,'dhcbcjhsbdc'),(73,'ddd','sss','2016-11-25',0,'dhcbcjhsbdc'),(74,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(75,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(76,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(77,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(78,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(79,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(80,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(81,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(82,'ddd','sss','2016-11-24',0,'dhcbcjhsbdc'),(83,'ddd','qqq','2016-11-21',0,'dhcbcjhsbdc'),(84,'ddd','qqq','2016-11-23',0,'scb jsb');
/*!40000 ALTER TABLE `Appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Doctor`
--

DROP TABLE IF EXISTS `Doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Doctor` (
  `DocName` varchar(255) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `DoB` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Doctor`
--

LOCK TABLES `Doctor` WRITE;
/*!40000 ALTER TABLE `Doctor` DISABLE KEYS */;
INSERT INTO `Doctor` VALUES ('qqq','qqq','qqq','1998-02-19','0000-00-00','abhishek_a_s@students.iitmandi.ac.in'),('sss','sss','sss','985','2015-08-26','abhishek_a_s@students.iitmandi.ac.in');
/*!40000 ALTER TABLE `Doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Medicine`
--

DROP TABLE IF EXISTS `Medicine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Medicine` (
  `MedicineID` varchar(6) NOT NULL,
  `MedicineName` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`MedicineID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Medicine`
--

LOCK TABLES `Medicine` WRITE;
/*!40000 ALTER TABLE `Medicine` DISABLE KEYS */;
INSERT INTO `Medicine` VALUES ('1','1313516351',11,12),('2','112',12,20),('3','dnksd',5,22),('4','fsbmsfv',6,4),('5','Medicine',5,14),('6','Paracetamol',60,20),('7','Citro',10,15);
/*!40000 ALTER TABLE `Medicine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Patient`
--

DROP TABLE IF EXISTS `Patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Patient` (
  `PatientName` varchar(6) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Contact` int(10) NOT NULL,
  `DoB` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Patient`
--

LOCK TABLES `Patient` WRITE;
/*!40000 ALTER TABLE `Patient` DISABLE KEYS */;
INSERT INTO `Patient` VALUES ('aaa','aaa','aaa',1998,'0000-00-00',''),('b15103','b15103','b15103',2147483647,'1998-04-06',''),('b15123','b15123','b15123',862,'1997-06-10',''),('ddd','ddd','ddd',11,'0000-00-00','dhruv_patel@students.iitmandi.ac.in'),('kkk','kkk','kkk',81641681,'0000-00-00','');
/*!40000 ALTER TABLE `Patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pharm`
--

DROP TABLE IF EXISTS `Pharm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pharm` (
  `StaffName` varchar(255) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Contact` int(10) NOT NULL,
  `DoB` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pharm`
--

LOCK TABLES `Pharm` WRITE;
/*!40000 ALTER TABLE `Pharm` DISABLE KEYS */;
INSERT INTO `Pharm` VALUES ('ddd','ddd','ddd',19,'0000-00-00','abhishek_a_s@students.iitmandi.ac.in'),('sss','sss','sss',985,'1998-02-15','abhishek_a_s@students.iitmandi.ac.in');
/*!40000 ALTER TABLE `Pharm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Prescription`
--

DROP TABLE IF EXISTS `Prescription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Prescription` (
  `PrescriptionID` bigint(10) NOT NULL AUTO_INCREMENT,
  `AppointmentID` bigint(10) NOT NULL,
  `MedicineID` varchar(6) NOT NULL,
  `Qty` varchar(255) DEFAULT NULL,
  `Dosage` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`PrescriptionID`),
  KEY `AppointmentID` (`AppointmentID`),
  KEY `MedicineID` (`MedicineID`),
  CONSTRAINT `Prescription_ibfk_1` FOREIGN KEY (`AppointmentID`) REFERENCES `Appointment` (`AppointmentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Prescription_ibfk_2` FOREIGN KEY (`MedicineID`) REFERENCES `Medicine` (`MedicineID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Prescription`
--

LOCK TABLES `Prescription` WRITE;
/*!40000 ALTER TABLE `Prescription` DISABLE KEYS */;
INSERT INTO `Prescription` VALUES (1,1,'1','1','1','2016-05-11'),(2,1,'1','1','1','2016-11-08'),(3,1,'1','1','1','2016-09-09'),(4,32,'1','1','1','2016-11-19'),(5,33,'1','1','1','2016-11-10'),(6,33,'2','2','2','2016-11-10'),(7,26,'1','1','1','2016-05-19'),(8,26,'2','2','2','2016-05-19'),(9,26,'3','3','3','2016-05-19'),(10,22,'3','1','1','2016-11-07');
/*!40000 ALTER TABLE `Prescription` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-21 13:53:55
