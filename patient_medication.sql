-- MySQL dump 10.13  Distrib 8.0.22, for macos10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: patient_medication
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Batch`
--
DROP DATABASE IF EXISTS patient_medication;
CREATE DATABASE patient_medication;
USE patient_medication;

DROP TABLE IF EXISTS `Batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Batch` (
  `Batch_id` int NOT NULL,
  `MID` int NOT NULL,
  `ExpirationDate` datetime DEFAULT NULL,
  `Medication_DIN` int DEFAULT NULL,
  PRIMARY KEY (`Batch_id`,`MID`),
  KEY `MID_idx` (`MID`),
  KEY `DIN_idx` (`Medication_DIN`),
  CONSTRAINT `MedDIN` FOREIGN KEY (`Medication_DIN`) REFERENCES `Medication` (`DIN`),
  CONSTRAINT `MID` FOREIGN KEY (`MID`) REFERENCES `Manufacturer` (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Batch`
--

LOCK TABLES `Batch` WRITE;
/*!40000 ALTER TABLE `Batch` DISABLE KEYS */;
/*!40000 ALTER TABLE `Batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Caregiver`
--

DROP TABLE IF EXISTS `Caregiver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Caregiver` (
  `Caregiver_id` int NOT NULL,
  `Healthcare_No` int NOT NULL,
  `PhoneNo` int DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Caregiver_id`,`Healthcare_No`),
  KEY `HealthcareNo_idx` (`Healthcare_No`),
  CONSTRAINT `HealthcareNo` FOREIGN KEY (`Healthcare_No`) REFERENCES `Patient` (`HealthcareNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Caregiver`
--

LOCK TABLES `Caregiver` WRITE;
/*!40000 ALTER TABLE `Caregiver` DISABLE KEYS */;
/*!40000 ALTER TABLE `Caregiver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clinic`
--

DROP TABLE IF EXISTS `Clinic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Clinic` (
  `ClinicNo` int NOT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ClinicNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clinic`
--

LOCK TABLES `Clinic` WRITE;
/*!40000 ALTER TABLE `Clinic` DISABLE KEYS */;
/*!40000 ALTER TABLE `Clinic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Doctor`
--

DROP TABLE IF EXISTS `Doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Doctor` (
  `MedID` int NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`MedID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Doctor`
--

LOCK TABLES `Doctor` WRITE;
/*!40000 ALTER TABLE `Doctor` DISABLE KEYS */;
/*!40000 ALTER TABLE `Doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Manufacturer`
--

DROP TABLE IF EXISTS `Manufacturer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Manufacturer` (
  `MID` int NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Manufacturer`
--

LOCK TABLES `Manufacturer` WRITE;
/*!40000 ALTER TABLE `Manufacturer` DISABLE KEYS */;
/*!40000 ALTER TABLE `Manufacturer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Medication`
--

DROP TABLE IF EXISTS `Medication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Medication` (
  `DIN` int NOT NULL,
  `RefillStatus` varchar(1) DEFAULT NULL,
  `ExpDate` datetime DEFAULT NULL,
  `Dosage` int DEFAULT NULL,
  `Time` int DEFAULT NULL,
  `LeftoverAmount` int DEFAULT NULL,
  PRIMARY KEY (`DIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Medication`
--

LOCK TABLES `Medication` WRITE;
/*!40000 ALTER TABLE `Medication` DISABLE KEYS */;
/*!40000 ALTER TABLE `Medication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Patient`
--

DROP TABLE IF EXISTS `Patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Patient` (
  `HealthcareNo` int NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `PhoneNo` int DEFAULT NULL,
  `MedID` int DEFAULT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`HealthcareNo`),
  KEY `MedID_idx` (`MedID`),
  CONSTRAINT `MedID` FOREIGN KEY (`MedID`) REFERENCES `Doctor` (`MedID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Patient`
--

LOCK TABLES `Patient` WRITE;
/*!40000 ALTER TABLE `Patient` DISABLE KEYS */;
/*!40000 ALTER TABLE `Patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pharmacy`
--

DROP TABLE IF EXISTS `Pharmacy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pharmacy` (
  `Name` varchar(45) NOT NULL,
  `Location` varchar(45) NOT NULL,
  `ClinicNo` int DEFAULT NULL,
  PRIMARY KEY (`Name`,`Location`),
  KEY `Clinics_idx` (`ClinicNo`),
  CONSTRAINT `Clinics` FOREIGN KEY (`ClinicNo`) REFERENCES `Clinic` (`ClinicNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pharmacy`
--

LOCK TABLES `Pharmacy` WRITE;
/*!40000 ALTER TABLE `Pharmacy` DISABLE KEYS */;
/*!40000 ALTER TABLE `Pharmacy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pick_up`
--

DROP TABLE IF EXISTS `Pick_up`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pick_up` (
  `HealthcareNo` int NOT NULL,
  `DIN` int NOT NULL,
  `Location` varchar(45) NOT NULL,
  `Name` varchar(45) NOT NULL,
  PRIMARY KEY (`HealthcareNo`,`DIN`,`Location`,`Name`),
  KEY `DinMedication_idx` (`DIN`),
  KEY `PharmacyName_idx` (`Name`),
  KEY `PharmacyLocation_idx` (`Location`),
  CONSTRAINT `DinMedication` FOREIGN KEY (`DIN`) REFERENCES `Medication` (`DIN`),
  CONSTRAINT `Healthcare` FOREIGN KEY (`HealthcareNo`) REFERENCES `Patient` (`HealthcareNo`),
  CONSTRAINT `PharmacyName` FOREIGN KEY (`Name`) REFERENCES `Pharmacy` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pick_up`
--

LOCK TABLES `Pick_up` WRITE;
/*!40000 ALTER TABLE `Pick_up` DISABLE KEYS */;
/*!40000 ALTER TABLE `Pick_up` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Prescription`
--

DROP TABLE IF EXISTS `Prescription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Prescription` (
  `Healthcare_No` int NOT NULL,
  `Medication_DIN` int NOT NULL,
  `MedID` int DEFAULT NULL,
  `Pharm_location` varchar(45) DEFAULT NULL,
  `Pharm_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Healthcare_No`),
  KEY `DoctorDIN_idx` (`MedID`),
  KEY `DIN_idx` (`Medication_DIN`),
  KEY `PhL_idx` (`Pharm_name`),
  KEY `PhN_idx` (`Pharm_location`),
  CONSTRAINT `DINMed` FOREIGN KEY (`Medication_DIN`) REFERENCES `Medication` (`DIN`),
  CONSTRAINT `DoctorMedID` FOREIGN KEY (`MedID`) REFERENCES `Doctor` (`MedID`),
  CONSTRAINT `HealthNo` FOREIGN KEY (`Healthcare_No`) REFERENCES `Patient` (`HealthcareNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Prescription`
--

LOCK TABLES `Prescription` WRITE;
/*!40000 ALTER TABLE `Prescription` DISABLE KEYS */;
/*!40000 ALTER TABLE `Prescription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Side_effects`
--

DROP TABLE IF EXISTS `Side_effects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Side_effects` (
  `DIN` int NOT NULL,
  `Side_effects` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`DIN`),
  CONSTRAINT `DIN` FOREIGN KEY (`DIN`) REFERENCES `Medication` (`DIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Side_effects`
--

LOCK TABLES `Side_effects` WRITE;
/*!40000 ALTER TABLE `Side_effects` DISABLE KEYS */;
/*!40000 ALTER TABLE `Side_effects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Supplied_to`
--

DROP TABLE IF EXISTS `Supplied_to`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Supplied_to` (
  `Batch_id` int NOT NULL,
  `MID` int NOT NULL,
  `Location` varchar(45) NOT NULL,
  `Name` varchar(45) NOT NULL,
  PRIMARY KEY (`Batch_id`,`MID`,`Location`,`Name`),
  KEY `Manufacturer_idx` (`MID`),
  KEY `Location_idx` (`Location`),
  KEY `Name_idx` (`Name`),
  KEY `Pharmacy_idx` (`Location`,`Name`),
  CONSTRAINT `Battch` FOREIGN KEY (`Batch_id`) REFERENCES `Batch` (`Batch_id`),
  CONSTRAINT `Manufacturer` FOREIGN KEY (`MID`) REFERENCES `Manufacturer` (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Supplied_to`
--

LOCK TABLES `Supplied_to` WRITE;
/*!40000 ALTER TABLE `Supplied_to` DISABLE KEYS */;
/*!40000 ALTER TABLE `Supplied_to` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Time_available`
--

DROP TABLE IF EXISTS `Time_available`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Time_available` (
  `Time_available` datetime NOT NULL,
  `MedID` int NOT NULL,
  PRIMARY KEY (`Time_available`,`MedID`),
  KEY `MedID_idx` (`MedID`),
  CONSTRAINT `DoctorsID` FOREIGN KEY (`MedID`) REFERENCES `Doctor` (`MedID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Time_available`
--

LOCK TABLES `Time_available` WRITE;
/*!40000 ALTER TABLE `Time_available` DISABLE KEYS */;
/*!40000 ALTER TABLE `Time_available` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Works_at`
--

DROP TABLE IF EXISTS `Works_at`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Works_at` (
  `MedID` int NOT NULL,
  `ClinicNo` int NOT NULL,
  PRIMARY KEY (`MedID`,`ClinicNo`),
  KEY `Clinic_idx` (`ClinicNo`),
  CONSTRAINT `Clinic` FOREIGN KEY (`ClinicNo`) REFERENCES `Clinic` (`ClinicNo`),
  CONSTRAINT `MedicalID` FOREIGN KEY (`MedID`) REFERENCES `Doctor` (`MedID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Works_at`
--

LOCK TABLES `Works_at` WRITE;
/*!40000 ALTER TABLE `Works_at` DISABLE KEYS */;
/*!40000 ALTER TABLE `Works_at` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-11 14:32:54
