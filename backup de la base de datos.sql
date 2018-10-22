/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.34-MariaDB : Database - gbh
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`gbh` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gbh`;

/*Table structure for table `autores` */

DROP TABLE IF EXISTS `autores`;

CREATE TABLE `autores` (
  `Id_autores` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_autores`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `autores` */

LOCK TABLES `autores` WRITE;

insert  into `autores`(`Id_autores`,`Nombre`) values (1,'Paulo Coelho'),(2,'Nicolas Maquiavelo'),(3,'nicolas de ovando'),(4,'algurismi'),(5,'Hipatias'),(6,'w3 school'),(7,'Microsoft'),(8,'Pablo neruda'),(9,'Pablo neruda'),(10,'leonardo dicaprio');

UNLOCK TABLES;

/*Table structure for table `libro` */

DROP TABLE IF EXISTS `libro`;

CREATE TABLE `libro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `id_autores` int(25) DEFAULT NULL,
  `cant_pag` int(30) DEFAULT NULL,
  `url` text,
  `Nombre_del_archivo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `libro` */

LOCK TABLES `libro` WRITE;

insert  into `libro`(`id`,`titulo`,`id_autores`,`cant_pag`,`url`,`Nombre_del_archivo`) values (1,'El principito',7,34,'./Repositorio//20102018_27549_Scrum-Master.pdf',NULL),(2,'Pablo escobar el patron del mal',6,258,'./Repositorio//21102018_181086_Que-es-un-canal-de-distribuciÃ³n.pdf',NULL),(3,'Mvc',7,258,'./Repositorio//21102018_293177_2017-Scrum-Guide-Spanish-SouthAmerican.pdf','21102018_293177_2017-Scrum-Guide-Spanish-Sout');

UNLOCK TABLES;

/*Table structure for table `libros` */

DROP TABLE IF EXISTS `libros`;

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(45) NOT NULL,
  `Id_autores` varchar(15) NOT NULL,
  `Cant_pag` varchar(10) NOT NULL,
  `url` varchar(45) NOT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `libros` */

LOCK TABLES `libros` WRITE;

insert  into `libros`(`id_libro`,`Titulo`,`Id_autores`,`Cant_pag`,`url`) values (1,'jesus','2','4','./Repositorio/18082018_927188_Sprint-Backlog.'),(2,'jesus','2','4','./Repositorio/18082018_927188_Sprint-Backlog.'),(3,'jesus','2','4','./Repositorio/18082018_927188_Sprint-Backlog.');

UNLOCK TABLES;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Rol` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

LOCK TABLES `usuarios` WRITE;

insert  into `usuarios`(`Id`,`nombre`,`usuario`,`password`,`Rol`) values (1,'jesus luciano','jluciano','admin123','1'),(2,'Jorge de jesus bello','jbello','123','2'),(4,'anthony nova perez','anova','123','2'),(8,'Elian soto (el sotico)','lagger','admin12345','1'),(10,'David luciano','dluciano','123','2'),(11,'samuel','speralta','123','3'),(12,'carolina','cguerrero','12345','2'),(13,'niel ','nvasquez','123','3'),(14,'pablo','ppaulino','123','3'),(15,'Guillermo cano','gcano','123','3');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
