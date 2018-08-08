/*
SQLyog Enterprise - MySQL GUI v6.15
MySQL - 5.5.20 : Database - students
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `students`;

USE `students`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `stu` */

DROP TABLE IF EXISTS `stu`;

CREATE TABLE `stu` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `name_s` varchar(200) DEFAULT NULL,
  `sex_s` char(4) DEFAULT NULL,
  `age_s` int(11) DEFAULT NULL,
  `tel_s` char(20) DEFAULT NULL,
  `address_s` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `stu` */

insert  into `stu`(`id_s`,`name_s`,`sex_s`,`age_s`,`tel_s`,`address_s`) values (2,'lily','女',28,'354354354','河北省石家庄市'),(4,'李磊','男',19,'232323232','河北省秦皇岛市'),(5,'张三','女',25,'52843845435','发货的司法hi是发挥第三方'),(6,'张晓涵','女',28,'13596767889','河北省其哪壶感到市XX县');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
