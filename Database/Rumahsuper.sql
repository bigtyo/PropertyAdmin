-- MySQL dump 10.13  Distrib 5.5.32, for Win32 (x86)
--
-- Host: localhost    Database: rumahsuper
-- ------------------------------------------------------
-- Server version	5.5.32

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `ADMINID` int(11) NOT NULL,
  `OFFICEID` int(11) NOT NULL,
  `DISABLED` int(11) NOT NULL,
  PRIMARY KEY (`ADMINID`),
  KEY `FK_Relationship_5` (`OFFICEID`),
  CONSTRAINT `FK_Relationship_5` FOREIGN KEY (`OFFICEID`) REFERENCES `office` (`OFFICEID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,1,0),(2,1,0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `AREAID` bigint(20) NOT NULL,
  `KOTAID` bigint(20) NOT NULL,
  `NAMA_AREA` varchar(254) NOT NULL,
  PRIMARY KEY (`AREAID`),
  KEY `FK_Relationship_15` (`KOTAID`),
  CONSTRAINT `FK_Relationship_15` FOREIGN KEY (`KOTAID`) REFERENCES `kota` (`KOTAID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES (1,1,'Surabaya Pusat');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `call_in`
--

DROP TABLE IF EXISTS `call_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call_in` (
  `CALL_IN_ID` bigint(20) NOT NULL,
  `MARKETINGID` bigint(20) NOT NULL,
  `REFERENSI_ID` int(11) NOT NULL,
  `CUSTOMERID` bigint(20) NOT NULL,
  `LISTINGID` bigint(20) NOT NULL,
  `KETERANGAN` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`CALL_IN_ID`),
  KEY `FK_Relationship_30` (`LISTINGID`),
  KEY `FK_Relationship_31` (`MARKETINGID`),
  KEY `FK_Relationship_32` (`CUSTOMERID`),
  KEY `FK_Relationship_33` (`REFERENSI_ID`),
  CONSTRAINT `FK_Relationship_30` FOREIGN KEY (`LISTINGID`) REFERENCES `listing` (`LISTINGID`),
  CONSTRAINT `FK_Relationship_31` FOREIGN KEY (`MARKETINGID`) REFERENCES `marketing` (`MARKETINGID`),
  CONSTRAINT `FK_Relationship_32` FOREIGN KEY (`CUSTOMERID`) REFERENCES `customer` (`CUSTOMERID`),
  CONSTRAINT `FK_Relationship_33` FOREIGN KEY (`REFERENSI_ID`) REFERENCES `referensi` (`REFERENSI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call_in`
--

LOCK TABLES `call_in` WRITE;
/*!40000 ALTER TABLE `call_in` DISABLE KEYS */;
/*!40000 ALTER TABLE `call_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `CUSTOMERID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(254) DEFAULT NULL,
  `EMAIL` varchar(254) DEFAULT NULL,
  `TELEPON` varchar(254) DEFAULT NULL,
  `ALAMAT` varchar(254) DEFAULT NULL,
  `VENDOR` int(11) DEFAULT NULL,
  `BUYER` int(11) DEFAULT NULL,
  `INVESTOR` int(11) DEFAULT NULL,
  `TANGGAL_LAHIR` datetime DEFAULT NULL,
  `TANGGAL_PERNIKAHAN` datetime DEFAULT NULL,
  PRIMARY KEY (`CUSTOMERID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Bobby Jones','tyo.bagus.pratama@gmail.com','085646162619','JL. Sutorejo Selatan 2/14',0,1,0,'1985-06-17 00:00:00','2010-05-08 00:00:00'),(2,'Brad Pitt','mochammad.raditya@gmail.com','085646162619','JL. Sutorejo Utara 2/14',1,1,1,'1985-06-17 00:00:00','2010-05-08 00:00:00'),(4,'Amaya BRavo','amaya.bravo@gmail.com','085624203342','JL TEST',1,1,1,'1987-07-07 00:00:00','0000-00-00 00:00:00'),(5,'Amanda Cherio','Amanda.Cherio@gmail.com','083123154325','Jl TEST',0,1,0,'0075-01-28 00:00:00','0000-00-00 00:00:00'),(6,'Testing Customer','test@gmail.com','324234234234','TEST',0,1,0,'1987-08-21 00:00:00','0000-00-00 00:00:00'),(8,'MAMAD HERO','mamad.hero@gmail.com','08562312455342',NULL,1,NULL,NULL,NULL,NULL),(9,'Mamad Hero','mamad,hero@gmail.com','08562342122',NULL,1,NULL,NULL,NULL,NULL),(10,'Raditya bagus','raditya.bagus@gmail.com','085646162618','Jl Sutorejo selatan 2/14',0,0,1,NULL,NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftarcustomermarketing`
--

DROP TABLE IF EXISTS `daftarcustomermarketing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftarcustomermarketing` (
  `MARKETINGID` bigint(20) NOT NULL,
  `CUSTOMERID` bigint(20) NOT NULL,
  PRIMARY KEY (`MARKETINGID`,`CUSTOMERID`),
  KEY `FK_Relationship_4` (`CUSTOMERID`),
  CONSTRAINT `FK_Relationship_3` FOREIGN KEY (`MARKETINGID`) REFERENCES `marketing` (`MARKETINGID`),
  CONSTRAINT `FK_Relationship_4` FOREIGN KEY (`CUSTOMERID`) REFERENCES `customer` (`CUSTOMERID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftarcustomermarketing`
--

LOCK TABLES `daftarcustomermarketing` WRITE;
/*!40000 ALTER TABLE `daftarcustomermarketing` DISABLE KEYS */;
INSERT INTO `daftarcustomermarketing` VALUES (1,1),(2,1),(3,1),(5,1),(1,2),(2,2),(1,4),(1,5),(1,6),(1,8),(1,9),(5,10);
/*!40000 ALTER TABLE `daftarcustomermarketing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftarlistingmarketing`
--

DROP TABLE IF EXISTS `daftarlistingmarketing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftarlistingmarketing` (
  `MARKETINGID` bigint(20) NOT NULL,
  `LISTINGID` bigint(20) NOT NULL,
  PRIMARY KEY (`MARKETINGID`,`LISTINGID`),
  KEY `FK_Relationship_2` (`LISTINGID`),
  CONSTRAINT `FK_Relationship_1` FOREIGN KEY (`MARKETINGID`) REFERENCES `marketing` (`MARKETINGID`),
  CONSTRAINT `FK_Relationship_2` FOREIGN KEY (`LISTINGID`) REFERENCES `listing` (`LISTINGID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftarlistingmarketing`
--

LOCK TABLES `daftarlistingmarketing` WRITE;
/*!40000 ALTER TABLE `daftarlistingmarketing` DISABLE KEYS */;
INSERT INTO `daftarlistingmarketing` VALUES (1,1),(2,1),(3,1),(5,1),(1,2),(2,2),(3,2);
/*!40000 ALTER TABLE `daftarlistingmarketing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokumen`
--

DROP TABLE IF EXISTS `dokumen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokumen` (
  `DOKUMENID` bigint(20) NOT NULL,
  `ADMINID` int(11) NOT NULL,
  `NAMA` varchar(254) DEFAULT NULL,
  `PATH` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`DOKUMENID`),
  KEY `FK_Relationship_24` (`ADMINID`),
  CONSTRAINT `FK_Relationship_24` FOREIGN KEY (`ADMINID`) REFERENCES `admin` (`ADMINID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumen`
--

LOCK TABLES `dokumen` WRITE;
/*!40000 ALTER TABLE `dokumen` DISABLE KEYS */;
/*!40000 ALTER TABLE `dokumen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_template`
--

DROP TABLE IF EXISTS `email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_template` (
  `TEMPLATEID` bigint(20) NOT NULL AUTO_INCREMENT,
  `ADMINID` int(11) NOT NULL,
  `NAMA` varchar(254) NOT NULL,
  `PATH` varchar(254) NOT NULL,
  PRIMARY KEY (`TEMPLATEID`),
  KEY `FK_Relationship_28` (`ADMINID`),
  CONSTRAINT `FK_Relationship_28` FOREIGN KEY (`ADMINID`) REFERENCES `admin` (`ADMINID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_template`
--

LOCK TABLES `email_template` WRITE;
/*!40000 ALTER TABLE `email_template` DISABLE KEYS */;
INSERT INTO `email_template` VALUES (1,1,'Template Email listing','template2'),(2,1,'Template Email Otomatis','template/otomatis1/');
/*!40000 ALTER TABLE `email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_pencarian`
--

DROP TABLE IF EXISTS `history_pencarian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_pencarian` (
  `HISTORYID` bigint(20) NOT NULL AUTO_INCREMENT,
  `CUSTOMERID` bigint(20) NOT NULL,
  `LUAS_BANGUNAN` decimal(8,0) DEFAULT NULL,
  `LUAS_TANAH` decimal(8,0) DEFAULT NULL,
  `FURNISHED` int(11) DEFAULT NULL,
  `KAMAR_TIDUR` decimal(8,0) DEFAULT NULL,
  `LANTAI` int(11) DEFAULT NULL,
  `DAYA_LISTRIK` decimal(8,0) DEFAULT NULL,
  `SERTIFIKAT` varchar(254) DEFAULT NULL,
  `KONDISI` varchar(254) DEFAULT NULL,
  `KAMAR_MANDI` decimal(8,0) DEFAULT NULL,
  `GARASI` int(11) DEFAULT NULL,
  `JALUR_TELEPON` decimal(8,0) DEFAULT NULL,
  `HARGA_AWAL` decimal(15,0) DEFAULT NULL,
  `HARGA_AKHIR` decimal(15,0) DEFAULT NULL,
  `TANGGAL` datetime NOT NULL,
  `AREAID` int(11) DEFAULT NULL,
  `LOKASIID` int(11) DEFAULT NULL,
  `PROPINSIID` int(11) DEFAULT NULL,
  `KOTAID` int(11) DEFAULT NULL,
  `TIPEPROPID` int(11) DEFAULT NULL,
  `MARKETINGID` int(11) NOT NULL,
  PRIMARY KEY (`HISTORYID`),
  KEY `FK_Relationship_13` (`CUSTOMERID`),
  CONSTRAINT `FK_Relationship_13` FOREIGN KEY (`CUSTOMERID`) REFERENCES `customer` (`CUSTOMERID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_pencarian`
--

LOCK TABLES `history_pencarian` WRITE;
/*!40000 ALTER TABLE `history_pencarian` DISABLE KEYS */;
INSERT INTO `history_pencarian` VALUES (1,1,200,300,1,2,2,2200,'SHM','1',2,1,1,200000000,2000000000,'2013-11-01 00:00:00',1,1,1,1,1,1),(2,1,300,300,1,3,2,2200,NULL,'0',3,1,2,200000000,3000000000,'2013-11-01 00:00:00',0,0,0,0,0,1),(3,1,300,300,1,3,2,2200,NULL,'0',3,1,2,200000000,500000000,'2013-11-01 00:00:00',0,0,0,0,0,1),(4,5,0,0,1,0,0,0,'0','0',0,0,0,200000000,500000000,'2013-11-01 00:00:00',1,1,1,1,0,1),(5,1,300,200,0,2,NULL,NULL,NULL,NULL,2,NULL,NULL,500000000,2000000000,'0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,0),(6,1,300,200,0,2,NULL,NULL,NULL,NULL,2,NULL,NULL,500000000,2000000000,'0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,0),(7,1,300,200,0,2,NULL,NULL,NULL,NULL,2,NULL,NULL,500000000,2000000000,'0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,0),(8,1,300,200,0,2,NULL,NULL,NULL,NULL,2,NULL,NULL,500000000,2000000000,'0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,0),(9,10,300,200,0,2,NULL,NULL,NULL,NULL,2,NULL,NULL,500000000,1000000000,'0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `history_pencarian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hot_pick`
--

DROP TABLE IF EXISTS `hot_pick`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hot_pick` (
  `HOTPICKID` bigint(20) NOT NULL,
  `HOT_PICK_LIST_ID` bigint(20) NOT NULL,
  `LISTINGID` bigint(20) NOT NULL,
  `ADMINID` int(11) NOT NULL,
  PRIMARY KEY (`HOTPICKID`),
  KEY `FK_Relationship_25` (`HOT_PICK_LIST_ID`),
  KEY `FK_Relationship_26` (`ADMINID`),
  KEY `FK_Relationship_27` (`LISTINGID`),
  CONSTRAINT `FK_Relationship_25` FOREIGN KEY (`HOT_PICK_LIST_ID`) REFERENCES `hot_pick_list` (`HOT_PICK_LIST_ID`),
  CONSTRAINT `FK_Relationship_26` FOREIGN KEY (`ADMINID`) REFERENCES `admin` (`ADMINID`),
  CONSTRAINT `FK_Relationship_27` FOREIGN KEY (`LISTINGID`) REFERENCES `listing` (`LISTINGID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hot_pick`
--

LOCK TABLES `hot_pick` WRITE;
/*!40000 ALTER TABLE `hot_pick` DISABLE KEYS */;
/*!40000 ALTER TABLE `hot_pick` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hot_pick_list`
--

DROP TABLE IF EXISTS `hot_pick_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hot_pick_list` (
  `HOT_PICK_LIST_ID` bigint(20) NOT NULL,
  `TANGGAL` datetime NOT NULL,
  PRIMARY KEY (`HOT_PICK_LIST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hot_pick_list`
--

LOCK TABLES `hot_pick_list` WRITE;
/*!40000 ALTER TABLE `hot_pick_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `hot_pick_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kota`
--

DROP TABLE IF EXISTS `kota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kota` (
  `KOTAID` bigint(20) NOT NULL,
  `PROPINSIID` int(11) NOT NULL,
  `NAMA_KOTA` varchar(254) NOT NULL,
  PRIMARY KEY (`KOTAID`),
  KEY `FK_Relationship_14` (`PROPINSIID`),
  CONSTRAINT `FK_Relationship_14` FOREIGN KEY (`PROPINSIID`) REFERENCES `propinsi` (`PROPINSIID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kota`
--

LOCK TABLES `kota` WRITE;
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;
INSERT INTO `kota` VALUES (1,1,'Surabaya');
/*!40000 ALTER TABLE `kota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing`
--

DROP TABLE IF EXISTS `listing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing` (
  `LISTINGID` bigint(20) NOT NULL AUTO_INCREMENT,
  `STATUSJUALID` int(11) NOT NULL,
  `STATUSDATAID` int(11) NOT NULL,
  `AREAID` bigint(20) NOT NULL,
  `CUSTOMERID` bigint(20) NOT NULL,
  `KOTAID` bigint(20) NOT NULL,
  `PROPINSIID` int(11) NOT NULL,
  `TIPEPROPID` int(11) NOT NULL,
  `TIPELISTINGID` int(11) NOT NULL,
  `LOKASIID` bigint(20) NOT NULL,
  `ALAMAT_SINGKAT` varchar(254) NOT NULL,
  `ALAMAT_LENGKAP` varchar(254) NOT NULL,
  `LUAS_BANGUNAN` decimal(8,0) NOT NULL,
  `LUAS_TANAH` decimal(8,0) NOT NULL,
  `FURNISHED` int(11) DEFAULT NULL,
  `KAMAR_TIDUR` decimal(8,0) DEFAULT NULL,
  `LANTAI` int(11) DEFAULT NULL,
  `DAYA_LISTRIK` decimal(8,0) DEFAULT NULL,
  `SERTIFIKAT` varchar(254) DEFAULT NULL,
  `HARGA` decimal(18,0) NOT NULL,
  `KONDISI` varchar(254) DEFAULT NULL,
  `KAMAR_MANDI` decimal(8,0) DEFAULT NULL,
  `GARASI` int(11) DEFAULT NULL,
  `JALUR_TELEPON` decimal(8,0) DEFAULT NULL,
  `LONGITUDE` decimal(8,3) DEFAULT NULL,
  `LATITUDE` decimal(8,3) DEFAULT NULL,
  `JUDUL` varchar(2000) NOT NULL,
  `EXPIRED` datetime NOT NULL,
  PRIMARY KEY (`LISTINGID`),
  KEY `FK_Relationship_12` (`CUSTOMERID`),
  KEY `FK_Relationship_17` (`PROPINSIID`),
  KEY `FK_Relationship_18` (`KOTAID`),
  KEY `FK_Relationship_19` (`AREAID`),
  KEY `FK_Relationship_20` (`LOKASIID`),
  KEY `FK_Relationship_21` (`TIPEPROPID`),
  KEY `FK_Relationship_22` (`STATUSJUALID`),
  KEY `FK_Relationship_23` (`STATUSDATAID`),
  KEY `FK_Relationship_29` (`TIPELISTINGID`),
  CONSTRAINT `FK_Relationship_12` FOREIGN KEY (`CUSTOMERID`) REFERENCES `customer` (`CUSTOMERID`),
  CONSTRAINT `FK_Relationship_17` FOREIGN KEY (`PROPINSIID`) REFERENCES `propinsi` (`PROPINSIID`),
  CONSTRAINT `FK_Relationship_18` FOREIGN KEY (`KOTAID`) REFERENCES `kota` (`KOTAID`),
  CONSTRAINT `FK_Relationship_19` FOREIGN KEY (`AREAID`) REFERENCES `area` (`AREAID`),
  CONSTRAINT `FK_Relationship_20` FOREIGN KEY (`LOKASIID`) REFERENCES `lokasi` (`LOKASIID`),
  CONSTRAINT `FK_Relationship_21` FOREIGN KEY (`TIPEPROPID`) REFERENCES `tipe_property` (`TIPEPROPID`),
  CONSTRAINT `FK_Relationship_22` FOREIGN KEY (`STATUSJUALID`) REFERENCES `status_jual` (`STATUSJUALID`),
  CONSTRAINT `FK_Relationship_23` FOREIGN KEY (`STATUSDATAID`) REFERENCES `status_data` (`STATUSDATAID`),
  CONSTRAINT `FK_Relationship_29` FOREIGN KEY (`TIPELISTINGID`) REFERENCES `tipe_listing` (`TIPELISTINGID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing`
--

LOCK TABLES `listing` WRITE;
/*!40000 ALTER TABLE `listing` DISABLE KEYS */;
INSERT INTO `listing` VALUES (1,2,2,1,1,1,1,1,2,1,'JL. Diponegoro','Jl. Diponegoro 2/14',300,400,1,3,2,2200,'SHM',700000000,NULL,3,1,1,2301.000,2000.000,'Rumah Lokasi Strategis Harga Murah','2014-01-15 00:00:00'),(2,2,2,1,1,1,1,1,2,1,'JlL. Sutorejo','Jl. Sutorejo Selatan 2/14',300,400,1,4,2,3300,'SHM',2200000000,NULL,2,1,1,3201.000,3000.000,'Rumah Lokasi Strategis Fasilitas Lengkap dan BEsar','2014-01-15 00:00:00'),(3,2,1,1,9,1,1,1,1,1,'',' Jl Bayeman 2/14',200,300,1,2,2,2200,'SHM',2000000000,'1',2,1,1,NULL,NULL,'','2014-01-15 00:00:00');
/*!40000 ALTER TABLE `listing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lokasi`
--

DROP TABLE IF EXISTS `lokasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lokasi` (
  `LOKASIID` bigint(20) NOT NULL,
  `AREAID` bigint(20) NOT NULL,
  `NAMA_LOKASI` varchar(254) NOT NULL,
  PRIMARY KEY (`LOKASIID`),
  KEY `FK_Relationship_16` (`AREAID`),
  CONSTRAINT `FK_Relationship_16` FOREIGN KEY (`AREAID`) REFERENCES `area` (`AREAID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lokasi`
--

LOCK TABLES `lokasi` WRITE;
/*!40000 ALTER TABLE `lokasi` DISABLE KEYS */;
INSERT INTO `lokasi` VALUES (1,1,'Diponegoro');
/*!40000 ALTER TABLE `lokasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marketing`
--

DROP TABLE IF EXISTS `marketing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marketing` (
  `MARKETINGID` bigint(20) NOT NULL,
  `OFFICEID` int(11) NOT NULL,
  `DISALBLED` int(11) NOT NULL,
  PRIMARY KEY (`MARKETINGID`),
  KEY `FK_Relationship_8` (`OFFICEID`),
  CONSTRAINT `FK_Relationship_8` FOREIGN KEY (`OFFICEID`) REFERENCES `office` (`OFFICEID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marketing`
--

LOCK TABLES `marketing` WRITE;
/*!40000 ALTER TABLE `marketing` DISABLE KEYS */;
INSERT INTO `marketing` VALUES (1,1,0),(2,2,0),(3,3,0),(4,1,0),(5,1,0);
/*!40000 ALTER TABLE `marketing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Test','wtf','Ok'),(2,'Test lagi','Yay','Berita Ke 2'),(3,'Test Lagi 3','Yay 3','Test Berita ke 3');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifikasi`
--

DROP TABLE IF EXISTS `notifikasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifikasi` (
  `NOTIFIKASI_ID` bigint(20) NOT NULL,
  `USERID` varchar(254) NOT NULL,
  `DESKRIPSI` varchar(254) NOT NULL,
  `_READ` int(11) NOT NULL,
  PRIMARY KEY (`NOTIFIKASI_ID`),
  KEY `FK_Relationship_34` (`USERID`),
  CONSTRAINT `FK_Relationship_34` FOREIGN KEY (`USERID`) REFERENCES `user` (`USERID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifikasi`
--

LOCK TABLES `notifikasi` WRITE;
/*!40000 ALTER TABLE `notifikasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifikasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `office`
--

DROP TABLE IF EXISTS `office`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `office` (
  `OFFICEID` int(11) NOT NULL,
  `NAMA` varchar(254) NOT NULL,
  `ALAMAT` varchar(254) DEFAULT NULL,
  `TELEPON` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`OFFICEID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `office`
--

LOCK TABLES `office` WRITE;
/*!40000 ALTER TABLE `office` DISABLE KEYS */;
INSERT INTO `office` VALUES (1,'Ray White Diponegoro','Jl Diponegoro 3','0315642222'),(2,'Ray White Pakuwon City','San Diego A-13','0315641111'),(3,'Ray White Darmo','Jl Raya Darmo 10','0315644444');
/*!40000 ALTER TABLE `office` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger TIB_OFFICE before insert
on OFFICE for each row
begin
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `principal`
--

DROP TABLE IF EXISTS `principal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `principal` (
  `PRINCIPALID` int(11) NOT NULL,
  `OFFICEID` int(11) NOT NULL,
  `DISABLED` int(11) NOT NULL,
  `TOP` int(11) NOT NULL,
  PRIMARY KEY (`PRINCIPALID`),
  KEY `FK_Relationship_6` (`OFFICEID`),
  CONSTRAINT `FK_Relationship_6` FOREIGN KEY (`OFFICEID`) REFERENCES `office` (`OFFICEID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `principal`
--

LOCK TABLES `principal` WRITE;
/*!40000 ALTER TABLE `principal` DISABLE KEYS */;
INSERT INTO `principal` VALUES (1,1,0,1),(2,1,0,1);
/*!40000 ALTER TABLE `principal` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger TIB_PRINCIPAL before insert
on PRINCIPAL for each row
begin
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `propinsi`
--

DROP TABLE IF EXISTS `propinsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propinsi` (
  `PROPINSIID` int(11) NOT NULL,
  `NAMA_PROPINSI` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`PROPINSIID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propinsi`
--

LOCK TABLES `propinsi` WRITE;
/*!40000 ALTER TABLE `propinsi` DISABLE KEYS */;
INSERT INTO `propinsi` VALUES (1,'Jawa Timur');
/*!40000 ALTER TABLE `propinsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referensi`
--

DROP TABLE IF EXISTS `referensi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referensi` (
  `REFERENSI_ID` int(11) NOT NULL,
  `NAMA` varchar(254) NOT NULL,
  PRIMARY KEY (`REFERENSI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referensi`
--

LOCK TABLES `referensi` WRITE;
/*!40000 ALTER TABLE `referensi` DISABLE KEYS */;
/*!40000 ALTER TABLE `referensi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_data`
--

DROP TABLE IF EXISTS `status_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_data` (
  `STATUSDATAID` int(11) NOT NULL,
  `NAMA_STATUS` varchar(254) NOT NULL,
  PRIMARY KEY (`STATUSDATAID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_data`
--

LOCK TABLES `status_data` WRITE;
/*!40000 ALTER TABLE `status_data` DISABLE KEYS */;
INSERT INTO `status_data` VALUES (1,'Unverified'),(2,'Verified'),(3,'Expired');
/*!40000 ALTER TABLE `status_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_jual`
--

DROP TABLE IF EXISTS `status_jual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_jual` (
  `STATUSJUALID` int(11) NOT NULL,
  `NAMA_STATUS` varchar(254) NOT NULL,
  PRIMARY KEY (`STATUSJUALID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_jual`
--

LOCK TABLES `status_jual` WRITE;
/*!40000 ALTER TABLE `status_jual` DISABLE KEYS */;
INSERT INTO `status_jual` VALUES (1,'Sold'),(2,'Available');
/*!40000 ALTER TABLE `status_jual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipe_listing`
--

DROP TABLE IF EXISTS `tipe_listing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipe_listing` (
  `TIPELISTINGID` int(11) NOT NULL,
  `NAMA` varchar(254) NOT NULL,
  PRIMARY KEY (`TIPELISTINGID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipe_listing`
--

LOCK TABLES `tipe_listing` WRITE;
/*!40000 ALTER TABLE `tipe_listing` DISABLE KEYS */;
INSERT INTO `tipe_listing` VALUES (1,'Stock'),(2,'Open'),(3,'Exclusive');
/*!40000 ALTER TABLE `tipe_listing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipe_property`
--

DROP TABLE IF EXISTS `tipe_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipe_property` (
  `TIPEPROPID` int(11) NOT NULL,
  `NAMA_TIPE` varchar(254) NOT NULL,
  PRIMARY KEY (`TIPEPROPID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipe_property`
--

LOCK TABLES `tipe_property` WRITE;
/*!40000 ALTER TABLE `tipe_property` DISABLE KEYS */;
INSERT INTO `tipe_property` VALUES (1,'Rumah'),(2,'Ruko');
/*!40000 ALTER TABLE `tipe_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `USERID` varchar(254) NOT NULL,
  `PRINCIPALID` int(11) DEFAULT NULL,
  `ADMINID` int(11) DEFAULT NULL,
  `MARKETINGID` bigint(20) DEFAULT NULL,
  `PASSWORD` varchar(254) DEFAULT NULL,
  `NAMA` varchar(254) DEFAULT NULL,
  `ALAMAT` varchar(254) DEFAULT NULL,
  `EMAIL` varchar(254) DEFAULT NULL,
  `TELEPON` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`USERID`),
  KEY `FK_Relationship_10` (`MARKETINGID`),
  KEY `FK_Relationship_11` (`ADMINID`),
  KEY `FK_Relationship_9` (`PRINCIPALID`),
  CONSTRAINT `FK_Relationship_10` FOREIGN KEY (`MARKETINGID`) REFERENCES `marketing` (`MARKETINGID`),
  CONSTRAINT `FK_Relationship_11` FOREIGN KEY (`ADMINID`) REFERENCES `admin` (`ADMINID`),
  CONSTRAINT `FK_Relationship_9` FOREIGN KEY (`PRINCIPALID`) REFERENCES `principal` (`PRINCIPALID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('Ananda',NULL,NULL,2,'161ebd7d45089b3446ee4e0d86dbcf92','Ananda Bagus','Jl. Mastrip 3/10','Ananda.bagus@gmail.com','085646162619'),('AndySuanda',1,NULL,NULL,'161ebd7d45089b3446ee4e0d86dbcf92','Andi Suanda','Jl. Dipoegoro 4','andy.suanda@gmail.com','081235106108'),('Erni',NULL,NULL,3,'161ebd7d45089b3446ee4e0d86dbcf92','Erny Wati','Jl Pramuka 3/14','Erny.Wati@gmail.com','081234567122'),('Tyo',2,2,5,'161ebd7d45089b3446ee4e0d86dbcf92','Raditya BAgus','Js Sutorejo Selatan 2/14','mochammad.raditya@gmail.com','085646162619'),('Yudhi',NULL,NULL,1,'161ebd7d45089b3446ee4e0d86dbcf92','Yudhi','Vila bukit Mas 4/12','Yudhi.Dipo@gmail.com','08721223311');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_customer_marketing`
--

DROP TABLE IF EXISTS `view_customer_marketing`;
/*!50001 DROP VIEW IF EXISTS `view_customer_marketing`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_customer_marketing` (
  `CUSTOMERID` tinyint NOT NULL,
  `NAMA` tinyint NOT NULL,
  `EMAIL` tinyint NOT NULL,
  `TELEPON` tinyint NOT NULL,
  `ALAMAT` tinyint NOT NULL,
  `VENDOR` tinyint NOT NULL,
  `BUYER` tinyint NOT NULL,
  `INVESTOR` tinyint NOT NULL,
  `TANGGAL_LAHIR` tinyint NOT NULL,
  `TANGGAL_PERNIKAHAN` tinyint NOT NULL,
  `userid` tinyint NOT NULL,
  `email_marketing` tinyint NOT NULL,
  `telepon_marketing` tinyint NOT NULL,
  `nama_kantor` tinyint NOT NULL,
  `alamat_kantor` tinyint NOT NULL,
  `nama_marketing` tinyint NOT NULL,
  `telepon_kantor` tinyint NOT NULL,
  `MARKETINGID` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_listing_marketing`
--

DROP TABLE IF EXISTS `view_listing_marketing`;
/*!50001 DROP VIEW IF EXISTS `view_listing_marketing`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_listing_marketing` (
  `listingid` tinyint NOT NULL,
  `statusjual` tinyint NOT NULL,
  `statusdata` tinyint NOT NULL,
  `nama_area` tinyint NOT NULL,
  `customerid` tinyint NOT NULL,
  `nama_kota` tinyint NOT NULL,
  `nama_propinsi` tinyint NOT NULL,
  `nama_tipe` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `nama_lokasi` tinyint NOT NULL,
  `alamat_singkat` tinyint NOT NULL,
  `alamat_lengkap` tinyint NOT NULL,
  `luas_bangunan` tinyint NOT NULL,
  `luas_tanah` tinyint NOT NULL,
  `furnished` tinyint NOT NULL,
  `kamar_tidur` tinyint NOT NULL,
  `lantai` tinyint NOT NULL,
  `daya_listrik` tinyint NOT NULL,
  `sertifikat` tinyint NOT NULL,
  `harga` tinyint NOT NULL,
  `kondisi` tinyint NOT NULL,
  `kamar_mandi` tinyint NOT NULL,
  `garasi` tinyint NOT NULL,
  `jalur_telepon` tinyint NOT NULL,
  `longitude` tinyint NOT NULL,
  `latitude` tinyint NOT NULL,
  `userid` tinyint NOT NULL,
  `nama_marketing` tinyint NOT NULL,
  `telepon_marketing` tinyint NOT NULL,
  `marketingid` tinyint NOT NULL,
  `nama_kantor` tinyint NOT NULL,
  `telepon_kantor` tinyint NOT NULL,
  `office_id` tinyint NOT NULL,
  `JUDUL` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `view_customer_marketing`
--

/*!50001 DROP TABLE IF EXISTS `view_customer_marketing`*/;
/*!50001 DROP VIEW IF EXISTS `view_customer_marketing`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_customer_marketing` AS select `a`.`CUSTOMERID` AS `CUSTOMERID`,`a`.`NAMA` AS `NAMA`,`a`.`EMAIL` AS `EMAIL`,`a`.`TELEPON` AS `TELEPON`,`a`.`ALAMAT` AS `ALAMAT`,`a`.`VENDOR` AS `VENDOR`,`a`.`BUYER` AS `BUYER`,`a`.`INVESTOR` AS `INVESTOR`,`a`.`TANGGAL_LAHIR` AS `TANGGAL_LAHIR`,`a`.`TANGGAL_PERNIKAHAN` AS `TANGGAL_PERNIKAHAN`,`d`.`USERID` AS `userid`,`d`.`EMAIL` AS `email_marketing`,`d`.`TELEPON` AS `telepon_marketing`,`e`.`NAMA` AS `nama_kantor`,`e`.`ALAMAT` AS `alamat_kantor`,`d`.`NAMA` AS `nama_marketing`,`e`.`TELEPON` AS `telepon_kantor`,`c`.`MARKETINGID` AS `MARKETINGID` from ((((`customer` `a` join `daftarcustomermarketing` `b` on((`a`.`CUSTOMERID` = `b`.`CUSTOMERID`))) join `marketing` `c` on((`b`.`MARKETINGID` = `c`.`MARKETINGID`))) join `user` `d` on((`d`.`MARKETINGID` = `c`.`MARKETINGID`))) join `office` `e` on((`e`.`OFFICEID` = `c`.`OFFICEID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_listing_marketing`
--

/*!50001 DROP TABLE IF EXISTS `view_listing_marketing`*/;
/*!50001 DROP VIEW IF EXISTS `view_listing_marketing`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_listing_marketing` AS select `l`.`LISTINGID` AS `listingid`,`sj`.`NAMA_STATUS` AS `statusjual`,`sd`.`NAMA_STATUS` AS `statusdata`,`ar`.`NAMA_AREA` AS `nama_area`,`l`.`CUSTOMERID` AS `customerid`,`k`.`NAMA_KOTA` AS `nama_kota`,`p`.`NAMA_PROPINSI` AS `nama_propinsi`,`tp`.`NAMA_TIPE` AS `nama_tipe`,`tl`.`NAMA` AS `nama`,`lok`.`NAMA_LOKASI` AS `nama_lokasi`,`l`.`ALAMAT_SINGKAT` AS `alamat_singkat`,`l`.`ALAMAT_LENGKAP` AS `alamat_lengkap`,`l`.`LUAS_BANGUNAN` AS `luas_bangunan`,`l`.`LUAS_TANAH` AS `luas_tanah`,`l`.`FURNISHED` AS `furnished`,`l`.`KAMAR_TIDUR` AS `kamar_tidur`,`l`.`LANTAI` AS `lantai`,`l`.`DAYA_LISTRIK` AS `daya_listrik`,`l`.`SERTIFIKAT` AS `sertifikat`,`l`.`HARGA` AS `harga`,`l`.`KONDISI` AS `kondisi`,`l`.`KAMAR_MANDI` AS `kamar_mandi`,`l`.`GARASI` AS `garasi`,`l`.`JALUR_TELEPON` AS `jalur_telepon`,`l`.`LONGITUDE` AS `longitude`,`l`.`LATITUDE` AS `latitude`,`usr`.`USERID` AS `userid`,`usr`.`NAMA` AS `nama_marketing`,`usr`.`TELEPON` AS `telepon_marketing`,`usr`.`MARKETINGID` AS `marketingid`,`off`.`NAMA` AS `nama_kantor`,`off`.`TELEPON` AS `telepon_kantor`,`off`.`OFFICEID` AS `office_id`,`l`.`JUDUL` AS `JUDUL` from ((((((((((((`listing` `l` join `status_jual` `sj` on((`l`.`STATUSJUALID` = `sj`.`STATUSJUALID`))) join `status_data` `sd` on((`l`.`STATUSDATAID` = `sd`.`STATUSDATAID`))) join `area` `ar` on((`l`.`AREAID` = `ar`.`AREAID`))) join `kota` `k` on((`l`.`KOTAID` = `k`.`KOTAID`))) join `propinsi` `p` on((`p`.`PROPINSIID` = `l`.`PROPINSIID`))) join `lokasi` `lok` on((`l`.`LOKASIID` = `lok`.`LOKASIID`))) join `tipe_property` `tp` on((`l`.`TIPEPROPID` = `tp`.`TIPEPROPID`))) join `tipe_listing` `tl` on((`l`.`TIPELISTINGID` = `tl`.`TIPELISTINGID`))) join `daftarlistingmarketing` `dlm` on((`dlm`.`LISTINGID` = `l`.`LISTINGID`))) join `marketing` `mrk` on((`mrk`.`MARKETINGID` = `dlm`.`MARKETINGID`))) join `office` `off` on((`off`.`OFFICEID` = `mrk`.`OFFICEID`))) join `user` `usr` on((`usr`.`MARKETINGID` = `mrk`.`MARKETINGID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-15 17:45:51
