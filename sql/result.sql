
CREATE TABLE IF NOT EXISTS `result` (
  `id` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `for` varchar(200) NOT NULL,
  `pdflink` varchar(200) NOT NULL,
  `weblink` varchar(200) NOT NULL,
  `user` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

