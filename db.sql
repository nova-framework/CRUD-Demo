DROP TABLE IF EXISTS `dc_contacts`;

CREATE TABLE `dc_contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `dc_contacts` WRITE;
/*!40000 ALTER TABLE `dc_contacts` DISABLE KEYS */;

INSERT INTO `dc_contacts` (`id`, `firstName`, `lastName`)
VALUES
	(5,'david','carr');

/*!40000 ALTER TABLE `dc_contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dc_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dc_users`;

CREATE TABLE `dc_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `dc_users` WRITE;
/*!40000 ALTER TABLE `dc_users` DISABLE KEYS */;

INSERT INTO `dc_users` (`id`, `username`, `password`)
VALUES
	(1,'demo','$2y$12$7fJZYOvUPm5S1/TeppeKFu9xxIZT877xYIrXPpkwrTTwFed6xDrZq');

/*!40000 ALTER TABLE `dc_users` ENABLE KEYS */;
UNLOCK TABLES;