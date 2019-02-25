-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-02-25 08:37:24
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
(6, '评论管理', '[{\"menuname\":\"评论管理\",\"submenu\":[{\"submenuname\":\"所有评论\",\"submenuurl\":\"Comment/index\"}]}]', 1, '&#xe66e;', 1),
(7, '信箱管理', '[{\"menuname\":\"信箱管理\",\"submenu\":[{\"submenuname\":\"未回复信件\",\"submenuurl\":\"Fmail/index\"},{\"submenuname\":\"所有信件\",\"submenuurl\":\"Fmail/allindex\"}]}]', 2, '&#xe61d;', 0),
(8, '投票管理', '[{\"menuname\":\"投票管理\",\"submenu\":[{\"submenuname\":\"所有投票\",\"submenuurl\":\"Nocheckcomment/index\"},{\"submenuname\":\"完成投票\",\"submenuurl\":\"Allcomment/index\"}]}]', 2, NULL, 0),
(9, '问卷调查', '[{\"menuname\":\"问卷调查\",\"submenu\":[{\"submenuname\":\"所有问卷\",\"submenuurl\":\"Questionnaire/allindex\"},{\"submenuname\":\"进行中问卷\",\"submenuurl\":\"Questionnaire/indexing\"},{\"submenuname\":\"完成问卷\",\"submenuurl\":\"Questionnaire/index\"}]}]', 2, '&#xe6fa;', 0),
(10, '角色权限', '[{\"menuname\":\"角色权限\",\"submenu\":[{\"submenuname\":\"权限资源\",\"submenuurl\":\"Power/index\"},{\"submenuname\":\"角色管理\",\"submenuurl\":\"Role/index\"}]}]', 2, '&#xe6f3;', 0),
(11, '用户管理', '[{\"menuname\":\"用户管理\",\"submenu\":[{\"submenuname\":\"用户管理\",\"submenuurl\":\"User/index\"}]}]', 1, '&#xe6d1;', 1),
(12, '系统设置', '[{\"menuname\":\"系统设置\",\"submenu\":[{\"submenuname\":\"密码管理\",\"submenuurl\":\"Sys/setpwdshow\"},{\"submenuname\":\"微信公众号管理\",\"submenuurl\":\"Wechatmanage/index\"}]}]', 1, '&#xe6ed;', 1),
(13, '日志管理', '[{\"menuname\":\"日志管理\",\"submenu\":[{\"submenuname\":\"日志管理\",\"submenuurl\":\"Log/index\"}]}]', 1, '&#xe632;', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ela_comment`
--

CREATE TABLE `ela_comment` (
  `id` bigint(20) NOT NULL,
  `contents` longtext COMMENT '内容',
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

--
-- 转存表中的数据 `ela_commenthistory`
--

INSERT INTO `ela_commenthistory` (`id`, `commentid`, `userid`, `cate`) VALUES
(10, 95, 'wenzhenxiang', 3);

-- --------------------------------------------------------

--
-- 表的结构 `ela_didinfo`
--

CREATE TABLE `ela_didinfo` (
  `id` bigint(20) NOT NULL,
  `didid` char(240) NOT NULL,
  `didupwd` char(200) NOT NULL,
  `nickname` char(200) NOT NULL,
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
  `githubappid` char(200) DEFAULT NULL,
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
  `email` char(240) DEFAULT NULL,
  `nickname` char(240) NOT NULL
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

-- --------------------------------------------------------

--
-- 表的结构 `ela_notice`
--

CREATE TABLE `ela_notice` (
  `id` bigint(20) NOT NULL,
  `addtime` char(60) NOT NULL,
  `noticetitle` char(250) NOT NULL,
  `contents` longtext NOT NULL,
  `author` char(150) NOT NULL,
  `draft` int(11) NOT NULL,
  `ishomepage` int(11) NOT NULL,
  `notifywho` char(20) NOT NULL,
  `pushnotifyset` char(20) NOT NULL,
  `publishtime` char(60) NOT NULL,
  `viewnum` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_notice`
--

INSERT INTO `ela_notice` (`id`, `addtime`, `noticetitle`, `contents`, `author`, `draft`, `ishomepage`, `notifywho`, `pushnotifyset`, `publishtime`, `viewnum`) VALUES
(1, '1551006268', '222', '<p>fdsfds</p>', 'WECHAT1550805752cKLp5', 0, 1, '01', '10', '3143435435436', 1),
(2, '1551006362', '测试1', '<p>测试<img src=\"data:image/jpeg;base64,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\" data-filename=\"t2.jpg\" style=\"width: 300px;\"></p>', 'WECHAT1550805752cKLp5', 0, 1, '01', '10', '3143435435436', 1);

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
-- 表的结构 `ela_staydid`
--

CREATE TABLE `ela_staydid` (
  `id` bigint(20) NOT NULL,
  `didid` char(50) NOT NULL,
  `nickname` char(200) NOT NULL,
  `Elaaddress` varchar(500) NOT NULL,
  `publickey` char(240) NOT NULL,
  `didrandom` char(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `addtime` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_staydid`
--

INSERT INTO `ela_staydid` (`id`, `didid`, `nickname`, `Elaaddress`, `publickey`, `didrandom`, `status`, `addtime`) VALUES
(171, '', '', '', '', '154904451895973', 0, '1549044518'),
(172, '', '', '', '', '155011014028317', 0, '1550110140'),
(173, '', '', '', '', '155080569249199', 0, '1550805692'),
(174, '', '', '', '', '155080575649586', 0, '1550805756'),
(175, '', '', '', '', '155080578393518', 0, '1550805783'),
(176, '', '', '', '', '155080579511264', 0, '1550805795'),
(177, '', '', '', '', '155080584544401', 0, '1550805845'),
(178, '', '', '', '', '155080587636910', 0, '1550805876'),
(179, '', '', '', '', '155080604239020', 0, '1550806042'),
(180, '', '', '', '', '155080714787800', 0, '1550807147'),
(181, '', '', '', '', '155098847778959', 0, '1550988477'),
(182, '', '', '', '', '155098964578916', 0, '1550989645'),
(183, '', '', '', '', '155098966733823', 0, '1550989667'),
(184, '', '', '', '', '155098994490691', 0, '1550989944'),
(185, '', '', '', '', '155098997687278', 0, '1550989976'),
(186, '', '', '', '', '155099002951387', 0, '1550990029'),
(187, '', '', '', '', '155099003280359', 0, '1550990032'),
(188, '', '', '', '', '155099008958771', 0, '1550990089'),
(189, '', '', '', '', '155099022459315', 0, '1550990224'),
(190, '', '', '', '', '155099028229305', 0, '1550990282'),
(191, '', '', '', '', '155099031823345', 0, '1550990318'),
(192, '', '', '', '', '155099035161969', 0, '1550990351'),
(193, '', '', '', '', '155099040073295', 0, '1550990400'),
(194, '', '', '', '', '155099070131418', 0, '1550990701'),
(195, '', '', '', '', '155099072548304', 0, '1550990725'),
(196, '', '', '', '', '155099159457907', 0, '1550991594'),
(197, '', '', '', '', '155099163977055', 0, '1550991639'),
(198, '', '', '', '', '155099185501031', 0, '1550991855'),
(199, '', '', '', '', '155100627771977', 0, '1551006277'),
(200, '', '', '', '', '155100637437218', 0, '1551006374');

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

--
-- 转存表中的数据 `ela_staywechat`
--

INSERT INTO `ela_staywechat` (`id`, `wechatid`, `code`, `headimg`, `nickname`, `province`, `city`, `openid`, `wechatrand`, `addtime`) VALUES
(2416, '', '', '', '', '', '', '', '15490445239la7O', '1549044523'),
(2417, '', '', '', '', '', '', '', '15501101361g8lk', '1550110136'),
(2418, '', '071mmNPO0ZydV32MfaSO0fzJPO0mmNPA', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIOQDqc1dFps11MUEmxIHkEyQswibuDQcBZsy6IqBLjIomeQV1vlORmGATLoQSmkFdlWIV6oTUXbyg/132', '冀翔', '河北', '石家庄', 'on-lA1aJdo8Cv44A0D2vBzOgYlgg', '1550805696kTSrd', '1550805696'),
(2419, '', '001JoUPL123U371gDHNL1tpIPL1JoUPi', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIOQDqc1dFps11MUEmxIHkEyQswibuDQcBZsy6IqBLjIomeQV1vlORmGATLoQSmkFdlWIV6oTUXbyg/132', '冀翔', '河北', '石家庄', 'on-lA1aJdo8Cv44A0D2vBzOgYlgg', '1550805785b8iFS', '1550805785'),
(2420, '', '', '', '', '', '', '', '1550805796HaEJO', '1550805796'),
(2421, '', '', '', '', '', '', '', '1550805875aNQJ6', '1550805875'),
(2422, '', '', '', '', '', '', '', '1550806041vuE4u', '1550806041'),
(2423, '', '', '', '', '', '', '', '1550807146Jscey', '1550807146'),
(2424, '', '', '', '', '', '', '', '1550988478KGBo5', '1550988478'),
(2425, '', '', '', '', '', '', '', '15509896452o3Gd', '1550989645'),
(2426, '', '', '', '', '', '', '', '1550989668pUNKR', '1550989668'),
(2427, '', '', '', '', '', '', '', '1550989944hkudY', '1550989944'),
(2428, '', '', '', '', '', '', '', '15509899769cYlr', '1550989976'),
(2429, '', '0615Fju11owgaY1ohJt11kfwu115FjuC', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIOQDqc1dFps11MUEmxIHkEyQswibuDQcBZsy6IqBLjIomeQV1vlORmGATLoQSmkFdlWIV6oTUXbyg/132', '冀翔', '河北', '石家庄', 'on-lA1aJdo8Cv44A0D2vBzOgYlgg', '1550990028muCpP', '1550990028'),
(2430, '', '', '', '', '', '', '', '15509900325vaIj', '1550990032'),
(2431, '', '', '', '', '', '', '', '1550990088ZcYLK', '1550990088'),
(2432, '', '', '', '', '', '', '', '1550990223L1AfT', '1550990223'),
(2433, '', '', '', '', '', '', '', '1550990281qm42v', '1550990281'),
(2434, '', '', '', '', '', '', '', '1550990319eTrdS', '1550990319'),
(2435, '', '', '', '', '', '', '', '1550990352Yltdw', '1550990352'),
(2436, '', '', '', '', '', '', '', '1550990399iEP8B', '1550990399'),
(2437, '', '', '', '', '', '', '', '1550990702eCvou', '1550990702'),
(2438, '', '', '', '', '', '', '', '15509907241V8zM', '1550990724'),
(2439, '', '0716GZFO0jBB542CgTGO09d0GO06GZFH', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIOQDqc1dFps11MUEmxIHkEyQswibuDQcBZsy6IqBLjIomeQV1vlORmGATLoQSmkFdlWIV6oTUXbyg/132', '冀翔', '河北', '石家庄', 'on-lA1aJdo8Cv44A0D2vBzOgYlgg', '1550991595zjc5s', '1550991595');

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
  `didid` char(240) NOT NULL,
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
  `headimg` varchar(2000) DEFAULT NULL,
  `subucate` int(11) NOT NULL,
  `nickname` varchar(500) NOT NULL,
  `email` char(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_user`
--

INSERT INTO `ela_user` (`id`, `userid`, `userpwd`, `username`, `addtime`, `phone`, `status`, `roleid`, `githubuid`, `wechatuid`, `rcuid`, `didid`, `linkedinuid`, `logintime`, `loginip`, `qq`, `firstname`, `lastname`, `company`, `bio`, `moreurl`, `country`, `city`, `headimg`, `subucate`, `nickname`, `email`) VALUES
(1, 'admin', 'e3ceb5881a0a1fdaad01296d7554868d', '超级管理员', '1513059115', '18931150152', 1, 1, NULL, '', '', '', '', '', '', NULL, 'Mike', 'Hou', 'ELA', 'Let\'s rock rock rock', 'www.ela.com', 'China', 'Beijing', '', 0, '', ''),
(28, 'WECHAT1550805752cKLp5', 'c2bb28da4b0748c3af477d4d6ef67454', NULL, '1550805752', NULL, 1, 2, NULL, 'on-lA1aJdo8Cv44A0D2vBzOgYlgg', NULL, '', '', '', NULL, NULL, '冀翔', '', NULL, NULL, NULL, NULL, NULL, 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIOQDqc1dFps11MUEmxIHkEyQswibuDQcBZsy6IqBLjIomeQV1vlORmGATLoQSmkFdlWIV6oTUXbyg/132', 4, '冀翔', '');

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
  `didid` char(200) NOT NULL,
  `ustatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_userrelation`
--

INSERT INTO `ela_userrelation` (`id`, `mainuser`, `rcuserid`, `githubuserid`, `wechatuserid`, `reguserid`, `didid`, `ustatus`) VALUES
(7, 'WECHAT1550805752cKLp5', '', '', 'on-lA1aJdo8Cv44A0D2vBzOgYlgg', '', '', 4);

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

-- --------------------------------------------------------

--
-- 表的结构 `ela_wechatmenu`
--

CREATE TABLE `ela_wechatmenu` (
  `id` int(11) NOT NULL,
  `menulist` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_wechatmenu`
--

INSERT INTO `ela_wechatmenu` (`id`, `menulist`) VALUES
(1, '{\"button\":[{\"name\":\"天气预报\",\"sub_button\":[{\"type\":\"view\",\"name\":\"北京天气\",\"url\":\"http://m.hao123.com/a/tianqi\"},{\"type\":\"view\",\"name\":\"上海天气\",\"url\":\"http://m.hao123.com/a/tianqi\"},{\"type\":\"view\",\"name\":\"广州天气\",\"url\":\"http://m.hao123.com/a/tianqi\"}]},{\"name\":\"空特科技\",\"sub_button\":[{\"type\":\"view\",\"name\":\"公司简介\",\"url\":\"http://m.hao123.com/a/tianqi\"},{\"type\":\"view\",\"name\":\"趣味游戏\",\"url\":\"http://m.hao123.com/a/tianqi\"}]}]}');

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
-- Indexes for table `ela_didinfo`
--
ALTER TABLE `ela_didinfo`
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
-- Indexes for table `ela_notice`
--
ALTER TABLE `ela_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ela_rcinfo`
--
ALTER TABLE `ela_rcinfo`
  ADD PRIMARY KEY (`rcid`);

--
-- Indexes for table `ela_staydid`
--
ALTER TABLE `ela_staydid`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ela_wechatmenu`
--
ALTER TABLE `ela_wechatmenu`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ela_applytestela`
--
ALTER TABLE `ela_applytestela`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `ela_column`
--
ALTER TABLE `ela_column`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `ela_comment`
--
ALTER TABLE `ela_comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- 使用表AUTO_INCREMENT `ela_commenthistory`
--
ALTER TABLE `ela_commenthistory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `ela_didinfo`
--
ALTER TABLE `ela_didinfo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `ela_githubinfo`
--
ALTER TABLE `ela_githubinfo`
  MODIFY `githubid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `ela_logininfo`
--
ALTER TABLE `ela_logininfo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `ela_notice`
--
ALTER TABLE `ela_notice`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `ela_rcinfo`
--
ALTER TABLE `ela_rcinfo`
  MODIFY `rcid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `ela_staydid`
--
ALTER TABLE `ela_staydid`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- 使用表AUTO_INCREMENT `ela_staywechat`
--
ALTER TABLE `ela_staywechat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2440;

--
-- 使用表AUTO_INCREMENT `ela_user`
--
ALTER TABLE `ela_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 使用表AUTO_INCREMENT `ela_userrelation`
--
ALTER TABLE `ela_userrelation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `ela_wechatinfo`
--
ALTER TABLE `ela_wechatinfo`
  MODIFY `wechatid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `ela_wechatmenu`
--
ALTER TABLE `ela_wechatmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
