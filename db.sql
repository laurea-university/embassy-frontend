
DROP DATABASE IF EXISTS `embassy`;
CREATE DATABASE `embassy`;
USE `embassy`;

CREATE TABLE IF NOT EXISTS `user` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`login` VARCHAR(64) NOT NULL,
	`passwd` VARCHAR(64) NOT NULL,
	`mail` VARCHAR(64) NOT NULL,
	`admin` BOOL NOT NULL DEFAULT FALSE
) ENGINE=MyISAM CHARSET utf8;

CREATE TABLE IF NOT EXISTS `company` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(128) NOT NULL,
	`tags` VARCHAR(512) NOT NULL,
	`info` TEXT NOT NULL,
	`pictures` TEXT,
	`location` VARCHAR(512) NOT NULL,
	`staff` TEXT NOT NULL,
	`website` VARCHAR(128),
	`phone` VARCHAR(32)
) ENGINE=MyISAM CHARSET utf8;

INSERT INTO `user`(login, passwd, mail, admin) VALUES("admin", "d033e22ae348aeb5660fc2140aec35850c4da997", "admin@wtf.com", true);

INSERT INTO `company`(name, tags, info, pictures, location, staff, website, phone) VALUES("Supinfo", "lame,web", "An EPITECH copycat", NULL, "Earth", "Some philosophy teacher", "http://supinfo.com/", "0123456789");
INSERT INTO `company`(name, tags, info, pictures, location, staff, website, phone) VALUES("Google", "lame,web,america", "Information whores", "https://encrypted.google.com/images/srpr/logo3w.png", "Earth", "Nicolas Sadirac", "http://google.com/", "0123456789");
INSERT INTO `company`(name, tags, info, pictures, location, staff, website, phone) VALUES("Apple", "lame,america", "Thiefs", NULL, "Earth", "RIP Steve jobs", "http://apple.com/", "0123456789");
