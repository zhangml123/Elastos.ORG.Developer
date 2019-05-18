CREATE TABLE `ela_votelog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `votingsid` bigint(20) NOT NULL,
  `votenum` bigint(20) NOT NULL,
  `forumid` bigint(20) NOT NULL,
  `did` char(240) NOT NULL,
  `addtime` int(20) NOT NULL,
  `ela` decimal(20,6) NOT NULL,
  `didrand` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
