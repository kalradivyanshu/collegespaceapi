CREATE TABLE IF NOT EXISTS `notice` (
  `id` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL,
  `for` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `weblink` varchar(200) NOT NULL,
  `user` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);
