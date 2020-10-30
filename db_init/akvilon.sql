-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               6.0.6-alpha-community - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


CREATE DATABASE IF NOT EXISTS `akvilon_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
create user 'akvilon'@'localhost' identified by 'jysb87td';
grant all privileges on akvilon_db.* to 'akvilon'@'localhost';

USE `akvilon_db`;



DROP TABLE IF EXISTS `akvilon_categ`;
CREATE TABLE IF NOT EXISTS `akvilon_categ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


INSERT INTO `akvilon_categ` (`id`, `name`, `img`, `description`, `active`) VALUES
	(1, 'DQ200', 'dq200.jpg', NULL, 1),
	(2, 'DQ250', 'dq250.jpg', NULL, 1),
	(3, 'DL501', 'dl501.jpg', NULL, 1),
	(4, 'DQ500', 'dq500.jpg', NULL, 1);

DROP TABLE IF EXISTS `akvilon_products`;
CREATE TABLE IF NOT EXISTS `akvilon_products` (
  `id_categ` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `oem` varchar(100) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `coast` decimal(10,2) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `active` bit(1) NOT NULL DEFAULT '',
  UNIQUE KEY `id_categ_id_name_oem` (`id_categ`,`id`,`name`,`oem`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;


INSERT INTO `akvilon_products` (`id_categ`, `id`, `name`, `oem`, `count`, `coast`, `img`, `description`, `active`) VALUES
	(1, 1, 'Гидравл. Масло в Мех-рон', 'G004000m2', 3, NULL, NULL, NULL, b'1'),
	(1, 2, 'Прокладка под Мехатрон', '0AM927377', 2, NULL, NULL, NULL, b'1'),
	(1, 3, 'Прокладка под Мехатрон', 'a09m72737', 5, NULL, NULL, NULL, b'1');



CREATE TABLE `akvilon_users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200) NOT NULL DEFAULT '0',
	`phone` VARCHAR(200) NOT NULL DEFAULT '0',
	`email` VARCHAR(200) NOT NULL DEFAULT '0',
	`pwd` VARCHAR(200) NULL DEFAULT '0',
	`registr` BIT NOT NULL DEFAULT b'0',
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `akvilon_orders` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_user` INT NOT NULL DEFAULT '0',
	`date_order` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	INDEX `id` (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `akvilon_order_details` (
	`id_order` INT NOT NULL,
	`id_products` INT NOT NULL,
	`count` INT NULL,
	`price` DECIMAL(10,2) NULL
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

ALTER TABLE `akvilon_orders` ADD COLUMN `exec` BIT NOT NULL DEFAULT b'0' AFTER `date_order`;

ALTER TABLE `akvilon_users`	ADD COLUMN `dt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `registr`;

ALTER TABLE `akvilon_orders` ADD COLUMN `description` VARCHAR(250) NULL AFTER `date_order`;

CREATE TABLE `akvilon_favouritet` (
	`id_user` INT NOT NULL,
	`id_product` INT NOT NULL
)
COLLATE='utf8_general_ci'
;

ALTER TABLE `akvilon_orders`
	CHANGE COLUMN `exec` `exec` SMALLINT NOT NULL DEFAULT 0 AFTER `description`,
	ADD COLUMN `descript_manager` VARCHAR(250) NULL AFTER `exec`,
	ADD COLUMN `date_manager` TIMESTAMP NULL AFTER `descript_manager`;

/**/
ALTER TABLE `akvilon_users`	ADD COLUMN `discont` INT NOT NULL DEFAULT '0' AFTER `dt`;