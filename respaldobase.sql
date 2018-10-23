/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.34-MariaDB : Database - tic74
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tic74` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tic74`;

/*Table structure for table `carreras` */

DROP TABLE IF EXISTS `carreras`;

CREATE TABLE `carreras` (
  `idc` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `carreras` */

insert  into `carreras`(`idc`,`nombre`,`activo`,`remember_token`,`created_at`,`updated_at`) values (1,'TIC','Si',NULL,NULL,NULL),(2,'Catapultas','Si',NULL,NULL,NULL),(3,'Gasolinas','Si',NULL,NULL,NULL),(4,'Garrafones','No',NULL,NULL,NULL);

/*Table structure for table `maestros` */

DROP TABLE IF EXISTS `maestros`;

CREATE TABLE `maestros` (
  `idm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `idc` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idm`),
  KEY `maestros_idc_foreign` (`idc`),
  CONSTRAINT `maestros_idc_foreign` FOREIGN KEY (`idc`) REFERENCES `carreras` (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maestros` */

insert  into `maestros`(`idm`,`nombre`,`edad`,`correo`,`cp`,`idc`,`remember_token`,`created_at`,`updated_at`,`archivo`) values (1,'Joel',34,'joel@hotmail.com',54335,1,NULL,'2018-09-22 00:58:07','2018-09-22 00:58:07',NULL),(2,'Paty',30,'joel@hotmail.com',54335,3,NULL,'2018-09-22 01:14:59','2018-09-22 01:14:59',NULL),(3,'Rodrigo',45,'srqwer@hotmai.com',55555,2,NULL,'2018-09-22 01:28:59','2018-09-22 01:28:59',NULL),(4,'Normita',70,'norma@hotmail.com',62234,2,NULL,'2018-09-29 00:49:28','2018-09-29 00:49:28','20180929_004928_7m1qpr.jpg'),(5,'Orona',38,'alice@hotmail.com',23233,2,NULL,'2018-09-29 01:13:28','2018-09-29 01:13:28','20180929_011328_7m1qpr.jpg'),(6,'Apolinar',23,'belenyyo@hotmail.com',52334,1,NULL,'2018-09-29 01:31:02','2018-09-29 01:31:02','sinfoto.png');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2018_09_20_012427_carreras',1),('2018_09_21_235808_maestros',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
