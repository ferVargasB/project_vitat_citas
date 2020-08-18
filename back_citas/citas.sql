CREATE DATABASE  IF NOT EXISTS `citas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `citas`;
-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: citas
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_solicitante` varchar(200) NOT NULL DEFAULT 'sin nombre',
  `apellidos_solicitante` varchar(200) NOT NULL DEFAULT 'sin apellidos',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_cita` date DEFAULT NULL,
  `hora_cita` time DEFAULT NULL,
  `clave_hora` varchar(10) NOT NULL DEFAULT '0',
  `id_tramite_solicitado` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id_cita`),
  KEY `fk_citas_tramites_idx` (`id_tramite_solicitado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
INSERT INTO `citas` VALUES (1,'fernando','vargas','2020-08-17 02:47:17','2020-08-17','09:00:00','900',2,0),(2,'Pedro ','Antonio Salas','2020-08-17 02:58:35','2020-08-17','09:30:00','930',2,0),(3,'Pedro ','Antonio Salas','2020-08-17 03:42:02','2020-08-17','10:00:00','1000',3,0),(4,'Isaac','Silva','2020-08-17 03:54:03','2020-08-17','10:00:00','1000',2,0);
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direcciones`
--

DROP TABLE IF EXISTS `direcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_direccion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcciones`
--

LOCK TABLES `direcciones` WRITE;
/*!40000 ALTER TABLE `direcciones` DISABLE KEYS */;
INSERT INTO `direcciones` VALUES (1,'Dirección de Imagen Urbana y Gestión de Centro Histórico'),(2,'Dirección de Administración Urbana');
/*!40000 ALTER TABLE `direcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direcciones_tramites`
--

DROP TABLE IF EXISTS `direcciones_tramites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `direcciones_tramites` (
  `id_direccion` int(11) NOT NULL,
  `id_tramite` int(11) NOT NULL,
  PRIMARY KEY (`id_direccion`,`id_tramite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcciones_tramites`
--

LOCK TABLES `direcciones_tramites` WRITE;
/*!40000 ALTER TABLE `direcciones_tramites` DISABLE KEYS */;
INSERT INTO `direcciones_tramites` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(2,12),(2,13),(2,14),(2,15),(2,16);
/*!40000 ALTER TABLE `direcciones_tramites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tramites`
--

DROP TABLE IF EXISTS `tramites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tramites` (
  `id_tramite` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_tramite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramites`
--

LOCK TABLES `tramites` WRITE;
/*!40000 ALTER TABLE `tramites` DISABLE KEYS */;
INSERT INTO `tramites` VALUES (1,'Aviso de Obra Menor'),(2,'Permiso de Construcción Menor de 40 M2'),(3,'Permiso de Construcción Mayor de 40 M2'),(4,'Permiso de Construcción Especial'),(5,'Aviso de Suspención Temporal de Obra'),(6,'Certificacion de Terminación De Obra'),(7,'Permiso Para Colocación de Anuncio'),(8,'Permiso Para Colocación de Toldo'),(9,'Permiso Para Colocación o Intalación de Anuncios y/o Espectaculares'),(10,'Permiso Para Colocación de Publicidad Móvil'),(11,'Nuevo ingreso o Refrendo como DRO'),(12,'Uso de Suelo'),(13,'Alineamiento'),(14,'Clasificación'),(15,'División de Predios'),(16,'Enajenación de Bienes');
/*!40000 ALTER TABLE `tramites` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-16 23:01:41
