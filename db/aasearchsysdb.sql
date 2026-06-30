-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for aasearchsysdb
CREATE DATABASE IF NOT EXISTS `aasearchsysdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `aasearchsysdb`;

-- Dumping structure for table aasearchsysdb.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table aasearchsysdb.ci_sessions: ~0 rows (approximately)

-- Dumping structure for table aasearchsysdb.search
CREATE TABLE IF NOT EXISTS `search` (
  `id` int NOT NULL AUTO_INCREMENT,
  `RefNo` varchar(15) NOT NULL,
  `RefCode` varchar(9) NOT NULL,
  `IssuedIn` varchar(255) NOT NULL DEFAULT 'THE REPUBLIC OF KOREA',
  `GoodsConsignedFrom` varchar(255) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `GoodsConsignedTo` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL DEFAULT '22 PEARL , STREET TANDANG SORA QUEZON CITY PHILIPPINES',
  `Address3` varchar(255) NOT NULL DEFAULT '22 PEARL , STREET TANDANG SORA QUEZON CITY PHILIPPINES',
  `DepartureDate` date NOT NULL,
  `VesselName` varchar(255) NOT NULL DEFAULT 'SEA',
  `PortOfLoading` varchar(255) NOT NULL DEFAULT 'INCHEON PORT , KOREA',
  `PortOfDischarge` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'SOUTH MANILA PORT , PHILIPPINES',
  `ItemNumber` int NOT NULL,
  `NumberPackage` varchar(255) NOT NULL DEFAULT '///////////////////////',
  `Des1` varchar(255) NOT NULL,
  `Des2` varchar(255) NOT NULL,
  `Des3` varchar(255) NOT NULL,
  `Des4` varchar(255) NOT NULL,
  `Des5` varchar(255) NOT NULL,
  `OriginCriterion` varchar(255) NOT NULL,
  `GrossWeight1` varchar(255) NOT NULL,
  `GrossWeight2` varchar(255) NOT NULL,
  `GrossWeight3` varchar(255) NOT NULL,
  `InvoiceNumDate` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL DEFAULT 'THE REPUBLIC OF KOREA',
  `ImportingCountry` varchar(255) NOT NULL DEFAULT 'THE REPUBLIC OF THE PHILIPPINES',
  `Place` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Sign` varchar(255) DEFAULT NULL,
  `CertDateStamp` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `RefNo` (`RefNo`),
  UNIQUE KEY `RefCode` (`RefCode`),
  UNIQUE KEY `ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table aasearchsysdb.search: ~1 rows (approximately)
REPLACE INTO `search` (`id`, `RefNo`, `RefCode`, `IssuedIn`, `GoodsConsignedFrom`, `Address1`, `GoodsConsignedTo`, `Address2`, `Address3`, `DepartureDate`, `VesselName`, `PortOfLoading`, `PortOfDischarge`, `ItemNumber`, `NumberPackage`, `Des1`, `Des2`, `Des3`, `Des4`, `Des5`, `OriginCriterion`, `GrossWeight1`, `GrossWeight2`, `GrossWeight3`, `InvoiceNumDate`, `Country`, `ImportingCountry`, `Place`, `Date`, `Sign`, `CertDateStamp`) VALUES
	(8, '123', '123', 'THE REPUBLIC OF KOREA', 'Korea', 'Seoul', 'Philippines', 'North', 'Quezon City', '2026-06-30', 'BMW', 'INCHEON PORT, KOREA', 'SOUTH MANILA PORT , PHILIPPINES', 1, '///////////////////////', '[HS CODE : 8702.90]HYUNDAI GRAND STAREX', '1 PC 1 UN 3,010 KG 3,010 KG', 'HYUNDAI GRAND STAREX NO: KMJWA37KBHU877399', 'SPECIAL PURPOSE VEHICLE FOR THE DISABLED', 'NO: KMJWA37KBHU877399', 'RVC 45%', '3,010 KG16,421 USD', '3,010 KG16,421 USD', '3,010 KG16,421 USD', 'HA20180124-02\r\n2018-01-24', 'THE REPUBLIC OF KOREA', 'THE REPUBLIC OF THE PHILIPPINES', 'SEOUL KOREA', '2026-06-30', 'my sign', '2026-06-30');

-- Dumping structure for table aasearchsysdb.tbl_last_login
CREATE TABLE IF NOT EXISTS `tbl_last_login` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userId` bigint NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table aasearchsysdb.tbl_last_login: ~1 rows (approximately)
REPLACE INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
	(104, 1, '{"role":"1","roleText":"System Administrator","name":"Administrator"}', '::1', 'Chrome 149.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'Windows 10', '2026-06-30 23:11:05');

-- Dumping structure for table aasearchsysdb.tbl_reset_password
CREATE TABLE IF NOT EXISTS `tbl_reset_password` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` bigint NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table aasearchsysdb.tbl_reset_password: ~0 rows (approximately)

-- Dumping structure for table aasearchsysdb.tbl_roles
CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `roleId` tinyint NOT NULL AUTO_INCREMENT COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table aasearchsysdb.tbl_roles: 3 rows
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
REPLACE INTO `tbl_roles` (`roleId`, `role`) VALUES
	(1, 'System Administrator'),
	(2, 'Manager'),
	(3, 'Employee');
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;

-- Dumping structure for table aasearchsysdb.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` int DEFAULT NULL,
  `roleId` tinyint NOT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table aasearchsysdb.tbl_users: 1 rows
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
REPLACE INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
	(1, 'sa@mail.com', '$2y$10$ikP0JSln5ZucsHq8npbfm.J07P15cDotpehoCOcb4H9KAmnNyF8Aq', 'Administrator', 2147483647, 1, 0, 0, '2015-07-01 18:56:49', 1, '2019-01-03 08:09:41');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
