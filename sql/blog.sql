CREATE TABLE IF NOT EXISTS `blog` (
  `id` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `html` varchar(2100) NOT NULL,
  `weblink` varchar(200) NOT NULL,
  `user` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

