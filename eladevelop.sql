-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-12-24 11:07:13
-- 服务器版本： 5.5.60-log
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eladevelop`
--

-- --------------------------------------------------------

--
-- 表的结构 `ela_applytestela`
--

CREATE TABLE `ela_applytestela` (
  `id` bigint(20) NOT NULL,
  `userid` char(240) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addtime` char(50) NOT NULL,
  `eladr` char(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ela_column`
--

CREATE TABLE `ela_column` (
  `id` bigint(20) NOT NULL,
  `columnname` char(255) DEFAULT NULL COMMENT '菜单名',
  `columnlist` longtext COMMENT '子菜单项',
  `roleid` bigint(20) DEFAULT NULL COMMENT '角色id',
  `icon` char(50) DEFAULT NULL COMMENT '图标',
  `yn` int(11) DEFAULT '1' COMMENT '是否显示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_column`
--

INSERT INTO `ela_column` (`id`, `columnname`, `columnlist`, `roleid`, `icon`, `yn`) VALUES
(1, '综合管理', '[{\"menuname\":\"常用功能\",\"submenu\":[{\"submenuname\":\"首页\",\"submenuurl\":\"Main/workbench\"},{\"submenuname\":\"Developdoc管理\",\"submenuurl\":\"Developdoc/index\"}]}]', 1, '&#xe63f;', 1),
(2, '栏目分类', '[{\"menuname\":\"栏目分类\",\"submenu\":[{\"submenuname\":\"广告分类\",\"submenuurl\":\"Cate/index?cid=1\"},{\"submenuname\":\"文章分类\",\"submenuurl\":\"Cate/index?cid=2\"}]}]', 1, '&#xe643;', 0),
(3, '媒体管理', '[{\"menuname\":\"媒体管理\",\"submenu\":[{\"submenuname\":\"图片管理\",\"submenuurl\":\"Media/index?tid=1\"},{\"submenuname\":\"视频管理\",\"submenuurl\":\"Media/index?tid=2\"},{\"submenuname\":\"音频管理\",\"submenuurl\":\"Media/index?tid=3\"},{\"submenuname\":\"文件管理\",\"submenuurl\":\"Media/index?tid=4\"}]}]', 2, '&#xe6c4;', 0),
(4, '广告管理', '[{\"menuname\":\"广告管理\",\"submenu\":[{\"submenuname\":\"广告管理\",\"submenuurl\":\"Ervt/index\"}]}]', 1, '&#xe65d;', 0),
(5, '文章管理', '[{\"menuname\":\"亦来云资讯\",\"submenu\":[{\"submenuname\":\"技术周报\",\"submenuurl\":\"Article/index?cid=7\"},{\"submenuname\":\"社区活动\",\"submenuurl\":\"Article/index?cid=8\"},{\"submenuname\":\"技术沙龙\",\"submenuurl\":\"Article/index?cid=9\"}]},{\"menuname\":\"亦来云GIT\",\"submenu\":[{\"submenuname\":\"Carrier技术\",\"submenuurl\":\"Article/index?cid=10\"},{\"submenuname\":\"RT技术\",\"submenuurl\":\"Article/index?cid=11\"},{\"submenuname\":\"SDK技术\",\"submenuurl\":\"Article/index?cid=12\"},{\"submenuname\":\"侧链\",\"submenuurl\":\"Article/index?cid=13\"},{\"submenuname\":\"DID\",\"submenuurl\":\"Article/index?cid=14\"}]},{\"menuname\":\"亦来云应用\",\"submenu\":[{\"submenuname\":\"钱包\",\"submenuurl\":\"Article/index?cid=15\"},{\"submenuname\":\"物联网\",\"submenuurl\":\"Article/index?cid=16\"},{\"submenuname\":\"游戏\",\"submenuurl\":\"Article/index?cid=17\"}]},{\"menuname\":\"技术视频\",\"submenu\":[{\"submenuname\":\"基础视频\",\"submenuurl\":\"Article/index?cid=18\"},{\"submenuname\":\"Carrier相关\",\"submenuurl\":\"Article/index?cid=19\"},{\"submenuname\":\"RT技术\",\"submenuurl\":\"Article/index?cid=20\"},{\"submenuname\":\"SDK技术\",\"submenuurl\":\"Article/index?cid=21\"},{\"submenuname\":\"DID技术\",\"submenuurl\":\"Article/index?cid=22\"}]}]', 2, '&#xe668;', 0),
(6, '评论管理', '[{\"menuname\":\"评论管理\",\"submenu\":[{\"submenuname\":\"未审核评论\",\"submenuurl\":\"Comment/index\"},{\"submenuname\":\"所有评论\",\"submenuurl\":\"Comment/allindex\"}]}]', 1, '&#xe66e;', 1),
(7, '信箱管理', '[{\"menuname\":\"信箱管理\",\"submenu\":[{\"submenuname\":\"未回复信件\",\"submenuurl\":\"Fmail/index\"},{\"submenuname\":\"所有信件\",\"submenuurl\":\"Fmail/allindex\"}]}]', 2, '&#xe61d;', 0),
(8, '投票管理', '[{\"menuname\":\"投票管理\",\"submenu\":[{\"submenuname\":\"所有投票\",\"submenuurl\":\"Nocheckcomment/index\"},{\"submenuname\":\"完成投票\",\"submenuurl\":\"Allcomment/index\"}]}]', 2, NULL, 0),
(9, '问卷调查', '[{\"menuname\":\"问卷调查\",\"submenu\":[{\"submenuname\":\"所有问卷\",\"submenuurl\":\"Questionnaire/allindex\"},{\"submenuname\":\"进行中问卷\",\"submenuurl\":\"Questionnaire/indexing\"},{\"submenuname\":\"完成问卷\",\"submenuurl\":\"Questionnaire/index\"}]}]', 2, '&#xe6fa;', 0),
(10, '角色权限', '[{\"menuname\":\"角色权限\",\"submenu\":[{\"submenuname\":\"权限资源\",\"submenuurl\":\"Power/index\"},{\"submenuname\":\"角色管理\",\"submenuurl\":\"Role/index\"}]}]', 2, '&#xe6f3;', 1),
(11, '用户管理', '[{\"menuname\":\"用户管理\",\"submenu\":[{\"submenuname\":\"用户管理\",\"submenuurl\":\"User/index\"}]}]', 1, '&#xe6d1;', 1),
(12, '系统设置', '[{\"menuname\":\"系统设置\",\"submenu\":[{\"submenuname\":\"密码管理\",\"submenuurl\":\"Sys/setpwdshow\"}]}]', 1, '&#xe6ed;', 1),
(13, '日志管理', '[{\"menuname\":\"日志管理\",\"submenu\":[{\"submenuname\":\"日志管理\",\"submenuurl\":\"Log/index\"}]}]', 1, '&#xe632;', 1);

-- --------------------------------------------------------

--
-- 表的结构 `ela_comment`
--

CREATE TABLE `ela_comment` (
  `id` bigint(20) NOT NULL,
  `contents` char(255) DEFAULT NULL COMMENT '内容',
  `addtime` char(20) DEFAULT NULL COMMENT '新增时间',
  `sender` char(200) DEFAULT '匿名' COMMENT '评论人',
  `githuburl` varchar(1000) DEFAULT NULL COMMENT '被评论githuburl',
  `commentid` bigint(20) DEFAULT NULL COMMENT '分类ID',
  `status` int(11) DEFAULT '0' COMMENT '状态：0不显示 1 显示',
  `ip` char(60) DEFAULT NULL COMMENT '评论IP地址',
  `star` int(11) DEFAULT NULL COMMENT '星级',
  `likes` bigint(20) DEFAULT '0' COMMENT '赞',
  `cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ela_commenthistory`
--

CREATE TABLE `ela_commenthistory` (
  `id` bigint(20) NOT NULL,
  `commentid` bigint(20) NOT NULL,
  `userid` char(240) NOT NULL,
  `cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ela_githubhistory`
--

CREATE TABLE `ela_githubhistory` (
  `id` bigint(20) NOT NULL,
  `githuburl` varchar(3000) DEFAULT NULL COMMENT 'githuburl地址',
  `githubfilename` varchar(1000) DEFAULT NULL COMMENT 'github同步的文件',
  `times` bigint(20) DEFAULT NULL COMMENT '第几次更新github',
  `adddate` char(255) DEFAULT NULL COMMENT '新增时间',
  `aurthor` char(200) DEFAULT NULL COMMENT '作者'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ela_githubinfo`
--

CREATE TABLE `ela_githubinfo` (
  `githubid` bigint(20) NOT NULL,
  `githubuid` char(200) NOT NULL,
  `githubappid` char(200) NOT NULL,
  `githubtoken` char(240) NOT NULL,
  `headimg` char(200) DEFAULT NULL,
  `firstname` char(240) DEFAULT NULL,
  `lastname` char(240) DEFAULT NULL,
  `company` varchar(2500) DEFAULT NULL,
  `country` char(240) DEFAULT NULL,
  `city` char(240) DEFAULT NULL,
  `bio` varchar(5000) DEFAULT NULL,
  `moreurl` varchar(5000) DEFAULT NULL,
  `username` char(240) DEFAULT NULL,
  `email` char(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ela_logininfo`
--

CREATE TABLE `ela_logininfo` (
  `id` bigint(20) NOT NULL,
  `logintime` char(20) NOT NULL,
  `userid` char(60) NOT NULL,
  `loginip` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_logininfo`
--

INSERT INTO `ela_logininfo` (`id`, `logintime`, `userid`, `loginip`) VALUES
(1, '1515253562', 'admin', '106.114.17.82'),
(2, '1515289819', 'admin', '106.114.23.48'),
(3, '1515316790', 'admin', '106.114.17.82'),
(4, '1515333590', 'admin', '106.114.17.82'),
(5, '1515375402', 'admin', '106.114.23.48'),
(6, '1515375440', 'admin', '211.94.114.194'),
(7, '1515376164', 'admin', '106.114.23.48'),
(8, '1515376231', 'admin', '211.94.114.194'),
(9, '1515380251', 'admin', '106.114.23.48'),
(10, '1515393024', 'admin', '211.94.114.194'),
(11, '1532850236', 'admin', '127.0.0.1');

-- --------------------------------------------------------

--
-- 表的结构 `ela_rcinfo`
--

CREATE TABLE `ela_rcinfo` (
  `rcid` bigint(20) NOT NULL,
  `rcuid` char(240) NOT NULL,
  `rcupwd` char(200) NOT NULL,
  `rcnickname` char(200) NOT NULL,
  `firstname` char(240) NOT NULL,
  `lastname` char(240) NOT NULL,
  `company` varchar(5000) NOT NULL,
  `country` char(240) NOT NULL,
  `city` char(240) NOT NULL,
  `bio` varchar(5000) NOT NULL,
  `moreurl` varchar(5000) NOT NULL,
  `headimg` varchar(2000) NOT NULL,
  `email` char(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ela_staywechat`
--

CREATE TABLE `ela_staywechat` (
  `id` bigint(20) NOT NULL,
  `wechatid` char(240) NOT NULL,
  `code` char(200) NOT NULL,
  `headimg` varchar(2000) NOT NULL,
  `nickname` char(240) NOT NULL,
  `province` char(200) NOT NULL,
  `city` char(200) NOT NULL,
  `openid` char(240) NOT NULL,
  `wechatrand` char(100) NOT NULL,
  `addtime` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ela_user`
--

CREATE TABLE `ela_user` (
  `id` bigint(20) NOT NULL,
  `userid` char(120) DEFAULT NULL COMMENT '账户',
  `userpwd` char(32) DEFAULT NULL COMMENT '密码',
  `username` char(120) DEFAULT NULL,
  `addtime` char(20) DEFAULT NULL COMMENT '添加时间',
  `phone` char(20) DEFAULT NULL COMMENT '联系电话',
  `status` int(11) DEFAULT '1' COMMENT '1 正常 0 停用',
  `roleid` bigint(20) DEFAULT NULL COMMENT '角色id',
  `githubuid` char(240) DEFAULT NULL COMMENT 'github账户',
  `wechatuid` char(240) NOT NULL,
  `rcuid` char(240) DEFAULT NULL,
  `linkedinuid` char(240) NOT NULL,
  `logintime` char(50) NOT NULL,
  `loginip` char(30) DEFAULT NULL,
  `qq` char(240) DEFAULT NULL COMMENT 'QQ账户',
  `firstname` char(240) DEFAULT NULL,
  `lastname` char(240) NOT NULL,
  `company` varchar(5000) DEFAULT NULL,
  `bio` varchar(5000) DEFAULT NULL,
  `moreurl` varchar(5000) DEFAULT NULL,
  `country` char(240) DEFAULT NULL,
  `city` char(240) DEFAULT NULL,
  `headimg` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_user`
--

INSERT INTO `ela_user` (`id`, `userid`, `userpwd`, `username`, `addtime`, `phone`, `status`, `roleid`, `githubuid`, `wechatuid`, `rcuid`, `linkedinuid`, `logintime`, `loginip`, `qq`, `firstname`, `lastname`, `company`, `bio`, `moreurl`, `country`, `city`, `headimg`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', '超级管理员', '1513059115', '18931150152', 1, 1, NULL, '', '', '', '', '', NULL, 'Mike', 'Hou', 'ELA', 'Let\'s rock rock rock', 'www.ela.com', 'China', 'Beijing', '');

-- --------------------------------------------------------

--
-- 表的结构 `ela_userrelation`
--

CREATE TABLE `ela_userrelation` (
  `id` bigint(20) NOT NULL,
  `mainuser` char(200) NOT NULL,
  `rcuserid` char(200) NOT NULL,
  `githubuserid` char(200) NOT NULL,
  `wechatuserid` char(200) NOT NULL,
  `reguserid` char(200) NOT NULL,
  `ustatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ela_wechatinfo`
--

CREATE TABLE `ela_wechatinfo` (
  `wechatid` bigint(20) NOT NULL,
  `wechatuid` char(240) NOT NULL,
  `wehcattoken` char(240) NOT NULL,
  `wechatappid` char(240) NOT NULL,
  `firstname` char(240) NOT NULL,
  `lastname` char(240) NOT NULL,
  `company` varchar(5000) NOT NULL,
  `country` char(240) NOT NULL,
  `city` char(240) NOT NULL,
  `bio` varchar(5000) NOT NULL,
  `moreurl` varchar(5000) NOT NULL,
  `headimg` varchar(2000) NOT NULL,
  `email` char(240) DEFAULT NULL,
  `nickname` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ela_applytestela`
--
ALTER TABLE `ela_applytestela`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_column`
--
ALTER TABLE `ela_column`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_comment`
--
ALTER TABLE `ela_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_commenthistory`
--
ALTER TABLE `ela_commenthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_githubhistory`
--
ALTER TABLE `ela_githubhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_githubinfo`
--
ALTER TABLE `ela_githubinfo`
  ADD PRIMARY KEY (`githubid`);

--
-- Indexes for table `ela_logininfo`
--
ALTER TABLE `ela_logininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_rcinfo`
--
ALTER TABLE `ela_rcinfo`
  ADD PRIMARY KEY (`rcid`);

--
-- Indexes for table `ela_staywechat`
--
ALTER TABLE `ela_staywechat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_user`
--
ALTER TABLE `ela_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_userrelation`
--
ALTER TABLE `ela_userrelation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_wechatinfo`
--
ALTER TABLE `ela_wechatinfo`
  ADD PRIMARY KEY (`wechatid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ela_applytestela`
--
ALTER TABLE `ela_applytestela`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用表AUTO_INCREMENT `ela_column`
--
ALTER TABLE `ela_column`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `ela_comment`
--
ALTER TABLE `ela_comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- 使用表AUTO_INCREMENT `ela_commenthistory`
--
ALTER TABLE `ela_commenthistory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `ela_githubinfo`
--
ALTER TABLE `ela_githubinfo`
  MODIFY `githubid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `ela_logininfo`
--
ALTER TABLE `ela_logininfo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `ela_rcinfo`
--
ALTER TABLE `ela_rcinfo`
  MODIFY `rcid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `ela_staywechat`
--
ALTER TABLE `ela_staywechat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=916;

--
-- 使用表AUTO_INCREMENT `ela_user`
--
ALTER TABLE `ela_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用表AUTO_INCREMENT `ela_userrelation`
--
ALTER TABLE `ela_userrelation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用表AUTO_INCREMENT `ela_wechatinfo`
--
ALTER TABLE `ela_wechatinfo`
  MODIFY `wechatid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
