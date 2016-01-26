  CREATE TABLE `guest` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(64) NOT NULL DEFAULT '',
  `lastname` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;