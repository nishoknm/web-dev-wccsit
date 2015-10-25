CREATE DATABASE  IF NOT EXISTS `NishokNarasimhaMohanasamy`;
USE `NishokNarasimhaMohanasamy`;


DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `email` varchar(150) NOT NULL,
  `password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `number` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `fname` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `number` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `attendee` varchar(150) NOT NULL,
  `company` varchar(150) NOT NULL,
  `sex` varchar(150) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `paper`;
CREATE TABLE `paper` (
  `title` varchar(150) NOT NULL,
  `file` varchar(10000) NOT NULL,
  `type` varchar(150) NOT NULL,
  `size` int(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `paperid` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`paperid`),
  UNIQUE KEY `title` (`title`),
  KEY `email` (`email`),
  CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `reviewer`;
CREATE TABLE `reviewer` (
  `email` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `number` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `sex` varchar(150) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `reviewpapers`;
CREATE TABLE `reviewpapers` (
  `email` varchar(150) DEFAULT NULL,
  `paperid` int(255) DEFAULT NULL,
  KEY `paperid` (`paperid`),
  KEY `reviewemail` (`email`),
  CONSTRAINT `paperid` FOREIGN KEY (`paperid`) REFERENCES `paper` (`paperid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reviewemail` FOREIGN KEY (`email`) REFERENCES `reviewer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



LOCK TABLES `admin` WRITE;
INSERT INTO `admin` VALUES ('admin','admin');
UNLOCK TABLES;

LOCK TABLES `comments` WRITE;
UNLOCK TABLES;

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES ('Nishok','mnishok','M','nishok.n.m@gmail.com','+919789576794','2a/11, West Mada Street','Author','Montclair','Male');
UNLOCK TABLES;

LOCK TABLES `paper` WRITE;
INSERT INTO `paper` VALUES ('First Paper','CSIT 537 Fall 2015 Project 1 Step 2.pdf','application/pdf',216499,'nishok.n.m@gmail.com',8);
UNLOCK TABLES;

LOCK TABLES `reviewer` WRITE;
INSERT INTO `reviewer` VALUES ('reviewer3@gmail.com','reviewer3','reviewer3','reviewer3','9000981633','Montclair','Female');
UNLOCK TABLES;

LOCK TABLES `reviewpapers` WRITE;
INSERT INTO `reviewpapers` VALUES ('reviewer3@gmail.com',8);
UNLOCK TABLES;

LOCK TABLES `comments` WRITE;
INSERT INTO `comments` VALUES ('Nishok','Mohan','nishok.n.m@gmail.com','5512085755','Design.','Well Organized..!!! ');
UNLOCK TABLES;