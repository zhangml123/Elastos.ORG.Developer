CREATE TABLE `ela_votelog` (
  `id` bigint(20) NOT NULL,
  `votingsid` bigint(20) NOT NULL,
  `votenum` bigint(20) NOT NULL,
  `forumid` bigint(20) NOT NULL,
  `did` char(240) NOT NULL,
  `addtime` int(20) NOT NULL,
  `ela` decimal(20,6) NOT NULL,
  `didrand` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `ela_votelog` ADD PRIMARY KEY (`id`);
ALTER TABLE `ela_votelog` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;