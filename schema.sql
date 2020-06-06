CREATE DATABASE IF NOT EXISTS bts;
USE bts;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(100) NOT NULL DEFAULT '',
  `payment_method` varchar(100) NOT NULL DEFAULT '',
  `details` varchar(100) NOT NULL DEFAULT '',
  `article` varchar(100) NOT NULL DEFAULT '',
  `total` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1;