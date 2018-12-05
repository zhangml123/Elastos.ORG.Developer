-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-12-05 10:07:49
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
  `addtime` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_applytestela`
--

INSERT INTO `ela_applytestela` (`id`, `userid`, `amount`, `status`, `addtime`) VALUES
(1, '602986973@qq.com', 10, 1, '1543804832');

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
  `likes` bigint(20) DEFAULT '0' COMMENT '赞'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_comment`
--

INSERT INTO `ela_comment` (`id`, `contents`, `addtime`, `sender`, `githuburl`, `commentid`, `status`, `ip`, `star`, `likes`) VALUES
(1, '带一路”倡议自2013年秋天提出以来，中国就此召开的规格最高的国际会议，也是今年我国主场外交的重头戏', '1514083288', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 1, NULL, 1, 7),
(2, 'ddsa', '1514795985', 'dsa', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 1, '106.114.164.224', 4, 9),
(3, 'dsad', '1514815460', 'dsa', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 1, 1, '106.114.164.224', 1, 1),
(4, '测试评论', '1514817454', '测试人', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 1, 0, '106.114.164.224', 1, 1),
(5, '测试啊！', '1514817500', '存储', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 1, 0, '106.114.164.224', 1, 1),
(6, '这是测试评论', '1514853428', '测试', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 2, 0, '106.114.164.224', 1, 1),
(7, 'rerer', '1514853801', 'dsa', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 1, 1, '106.114.164.224', 1, 1),
(10, 'dsadsa', '1514854007', 'dsa', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 2, 1, '106.114.164.224', 1, 1),
(29, '新评论！', '1542017229', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '127.0.0.1', 1, 1),
(30, '新子评论！', '1542017240', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 29, 0, '127.0.0.1', 1, 0),
(31, '第二次评论！', '1542017328', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android.md', NULL, 0, '127.0.0.1', 3, 0),
(32, '额', '1542017368', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android.md', NULL, 0, '127.0.0.1', 1, 0),
(33, '子评论！', '1542017681', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android.md', NULL, 0, '127.0.0.1', 1, 0),
(34, '发', '1542017702', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android.md', NULL, 0, '127.0.0.1', 1, 0),
(35, 'dsa', '1542017775', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android.md', NULL, 0, '127.0.0.1', 1, 0),
(36, 'dsadsa', '1542017830', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android.md', 35, 0, '127.0.0.1', 1, 0),
(37, '90r456', '1542017845', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android.md', 35, 0, '127.0.0.1', 1, 0),
(38, '566', '1542017896', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Contribution_Award_Assessment.md', NULL, 0, '127.0.0.1', 1, 0),
(39, 'ddsdsadsads', '1542017909', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Connect_to_SideChain_of_testnet.md', NULL, 0, '127.0.0.1', 1, 0),
(40, 'd', '1542017920', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Connect_to_SideChain_of_testnet.md', 39, 0, '127.0.0.1', 1, 0),
(41, 'dsadsaavcvv', '1542017964', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Connect_to_SideChain_of_testnet.md', NULL, 0, '127.0.0.1', 1, 0),
(42, 'a', '1542017974', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Connect_to_SideChain_of_testnet.md', 41, 0, '127.0.0.1', 1, 0),
(43, 'Join up to two circles you are good at. A circle is a simple closed shape. It is the set of all points in a plane that are at a given distance from a given point', '1542018619', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '127.0.0.1', 1, 0),
(44, 'Join up to two circles you are good at. A circle is a simple closed shape. It is the set of all points in a plane that are at a given distance from a given point', '1542018626', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 43, 0, '127.0.0.1', 1, 0),
(45, 'ddsddfs', '1542018756', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android_CN.md', NULL, 0, '127.0.0.1', 3, 0),
(46, 'x', '1542089479', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android_CN.md', NULL, 0, '124.236.182.80', 1, 0),
(47, '444', '1542091876', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/DApp_DID.md', NULL, 0, '124.236.182.80', 1, 1),
(48, 'test', '1542094673', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '58.220.98.25', 1, 0),
(49, 'hello', '1542094690', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Carrier_For_Android_CN.md', NULL, 0, '58.220.98.25', 1, 0),
(50, 'hey', '1542329045', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/DApp_DID.md', NULL, 0, '50.97.232.186', 1, 0),
(51, 'hey who I am?', '1542329069', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '50.97.232.186', 1, 0),
(52, 'again', '1542329089', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 51, 0, '50.97.232.186', 1, 0),
(53, 'reply 2', '1542329102', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', 51, 0, '50.97.232.186', 1, 0),
(54, 'This is a test comment This is a test comment This is a test comment This is a test comment This is a test comment This is a test comment This is a test comment This is a test comment This is a test comment This is a test comment This is a test comment Th', '1542330592', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '110.87.98.82', 1, 0),
(55, '', '1542330691', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '110.87.98.82', 1, 0),
(56, '4', '1542356449', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '124.236.181.188', 1, 0),
(57, '', '1542356456', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '124.236.181.188', 1, 0),
(58, '8', '1542356716', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md', NULL, 0, '124.236.181.188', 1, 0),
(59, 'h', '1543389326', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/EN/Dev environment/Get API key and secret.md', NULL, 0, '110.87.98.82', 1, 0),
(60, 'jj', '1543389334', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/EN/Dev environment/Get API key and secret.md', 59, 0, '110.87.98.82', 1, 0),
(61, '不错', '1543890860', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/了解基础/侧链.md', NULL, 0, '106.117.53.197', 6, 0),
(62, '不错', '1543890879', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/了解基础/侧链.md', NULL, 0, '106.117.53.197', 6, 0),
(63, 'y', '1543892044', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/了解基础/侧链.md', NULL, 0, '106.117.53.197', 3, 0),
(64, 'uuu', '1543892921', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/了解基础/侧链.md', NULL, 0, '106.117.53.197', 4, 0),
(65, 'this is good', '1543906132', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/EN/Dev environment/Get test token.md', NULL, 0, '110.87.98.82', 5, 0),
(66, 'I love it', '1543906140', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/EN/Dev environment/Get API key and secret.md', NULL, 0, '110.87.98.82', 1, 0),
(67, '测试评论！', '1543919989', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/交易所对接/如何与交易所对接.md', NULL, 0, '106.117.53.197', 3, 0),
(68, '反馈信息！', '1543920105', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/了解基础/侧链.md', 64, 0, '106.117.53.197', 0, 0),
(69, '新评论！', '1543930506', '602986973@qq.com', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/了解基础/侧链.md', NULL, 0, '106.117.85.62', 3, 2),
(70, '我来回复！', '1543930519', '602986973@qq.com', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/了解基础/侧链.md', 69, 0, '106.117.85.62', 0, 0),
(71, 'ceshi', '1543932629', '匿名', 'https://github.com/elastos/Elastos.Developer.Doc/tree/master/CN/了解基础/侧链.md', NULL, 0, '106.117.85.62', 1, 0);

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

--
-- 转存表中的数据 `ela_githubinfo`
--

INSERT INTO `ela_githubinfo` (`githubid`, `githubuid`, `githubappid`, `githubtoken`, `headimg`, `firstname`, `lastname`, `company`, `country`, `city`, `bio`, `moreurl`, `username`, `email`) VALUES
(2, 'elachating', '43022721', 'db97ba772feb73f6ae14a564261d89cab03f17cb', 'https://avatars0.githubusercontent.com/u/43022721?v=4', 'liu', 'ming', 'kongte.inc', 'China', 'Beijing', 'elachat is a p2p im!', 'http://ela.chat', NULL, '103306946@qq.com'),
(3, 'yunyouming', '5235349', '94c8acb8c8e0d0c27895b03be8ab21a1e944bb21', 'https://avatars3.githubusercontent.com/u/5235349?v=4', 'liou', 'ming', 'apple.inc', 'China', 'beiig', 'this is test code!', 'http://ela.chat', NULL, NULL);

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
  `headimg` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ela_rcinfo`
--

INSERT INTO `ela_rcinfo` (`rcid`, `rcuid`, `rcupwd`, `rcnickname`, `firstname`, `lastname`, `company`, `country`, `city`, `bio`, `moreurl`, `headimg`) VALUES
(1, '602986973@qq.com', '', '', '', '', '', '', '', '', '', '');

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
(1, 'admin', '96e79218965eb72c92a549dd5a330112', '超级管理员', '1513059115', '18931150152', 1, 1, NULL, '', '', '', '', '', NULL, 'Mike', 'Hou', 'ELA', 'Let\'s rock rock rock', 'www.ela.com', 'China', 'Beijing', ''),
(3, 'admin2', '96e79218965eb72c92a549dd5a330112', '管理员3', '1515306567', '1889777887', 1, 1, NULL, '', '', '', '', '', NULL, '', '', '', '', '', '', '', ''),
(13, '602986973@qq.com', '65d8d6ff97feaccbf624d5dcb6bd0087', NULL, '1543930262', NULL, 1, NULL, '', '', '', '', '1543930262', '', NULL, 'liu', 'ming', 'apple.lnc', 'none', 'http://ela.chat', 'China', 'shijiazhuang', '');

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
  `headimg` varchar(2000) NOT NULL
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
-- Indexes for table `ela_user`
--
ALTER TABLE `ela_user`
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `ela_column`
--
ALTER TABLE `ela_column`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `ela_comment`
--
ALTER TABLE `ela_comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- 使用表AUTO_INCREMENT `ela_githubinfo`
--
ALTER TABLE `ela_githubinfo`
  MODIFY `githubid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `ela_logininfo`
--
ALTER TABLE `ela_logininfo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `ela_rcinfo`
--
ALTER TABLE `ela_rcinfo`
  MODIFY `rcid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `ela_user`
--
ALTER TABLE `ela_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `ela_wechatinfo`
--
ALTER TABLE `ela_wechatinfo`
  MODIFY `wechatid` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
