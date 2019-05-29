CREATE TABLE `ela_events` (
  `id` bigint(20) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `cate` int(11) NOT NULL,
  `starttime` char(20) NOT NULL,
  `endtime` char(20) NOT NULL,
  `whereplace` varchar(5000) NOT NULL,
  `onlineurl` varchar(2000) NOT NULL,
  `ticketcate` int(11) NOT NULL,
  `ticketprice` decimal(20,2) NOT NULL,
  `howto` longtext NOT NULL,
  `remark` longtext NOT NULL,
  `create_notice` int(11) NOT NULL DEFAULT '0',
  `sendmail` int(11) NOT NULL DEFAULT '0',
  `draft` int(11) NOT NULL DEFAULT '0',
  `addtime` char(20) NOT NULL,
  `author` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `ela_events` ADD PRIMARY KEY (`id`);
ALTER TABLE `ela_events` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;