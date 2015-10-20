
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(5) NOT NULL,
  `uniqid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cookie` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `user` VALUES('1', 'bcedc450f8481e89b1445069acdc3dd9', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', '74a6f94b41bc144f3dfeaf1ff318c64e');

