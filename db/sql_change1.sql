ALTER table ela_staydid CHANGE PhoneNumbers PhoneNumber varchar(2000);

ALTER TABLE ela_article add `votenum` bigint(20);

ALTER TABLE ela_staydid add `PhoneNumbers` varchar(2000) default null;


CREATE TABLE `ela_votings` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(5000) NOT NULL,
  `type` int(2) NOT NULL,
  `options` int(2) NOT NULL,
  `contents` longtext NOT NULL,
  `endtime` int(15) NOT NULL,
  `repeatyn` int(1) NOT NULL,
  `repeatday` int(5) NOT NULL,
  `createtime` int(15) NOT NULL,
  `author` char(240) NOT NULL,
  `views` bigint(20) NOT NULL,
  `joinnum` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
