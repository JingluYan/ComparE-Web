-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 05 月 13 日 23:33
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `compare`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `commentid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `productid` varchar(100) NOT NULL,
  `memberid` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`commentid`),
  KEY `productid` (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`commentid`, `productid`, `memberid`, `content`, `time`) VALUES
(1, 'NOKIA500', 2, 'It is very good', '2012-04-13 20:06:06'),
(2, 'INSP15A', 5, 'It is very bad', '2012-04-13 20:06:06'),
(3, 'ThinkCentre M91/M91p', 2, 'I like it very much', '2012-04-13 20:26:06'),
(4, '17-inch MacBook Pro', 5, 'Good', '2012-04-16 16:39:03'),
(5, '300V4A 14.0" Essential Notebook" Essential Notebook', 4, 'I like it', '2012-04-16 22:33:36'),
(6, 'ThinkPad X1', 3, 'Bad', '2012-05-16 20:26:06'),
(7, '11-inch MacBook Air', 2, 'Very Good!', '2012-03-13 18:08:06'),
(8, 'MOTOLUXE', 5, 'I must say its a great phone. At first it seemed to be hard to use and a bit too much for me, then when I uploaded my songs and pictures, and started getting texts it started to seem very friendly. Everything I need is easily at reach on the live tiles on the main page, its just ace.', '2012-02-23 08:09:06'),
(9, 'NOKIA500', 3, 'I like it', '2012-05-03 12:46:06'),
(10, 'NOKIA5230', 4, 'I am very enjoy it', '2012-01-19 19:15:06'),
(11, 'NOKIA500', 2, 'I''ve had this phone for 6 weeks now and I love it! Compared with the Blackberry I had before it, it''s smaller, lighter, much faster, far more flexible in uses and much better at synching with our (small company) systems - diary, email, phone system, MS Office files etc. Its only weakness vs the Blackberry is battery life, but that''s clearly because I''m using it much more fully and withWiFi or Bluetooth all the time - and ?25 sopent on a TeckNet 7000mAh Battery Bank solved the problem anyway - recharges the phone and my Kindle at the same time, anywhere.', '2012-02-23 20:37:06'),
(12, 'x302', 1, 'It is very bad', '2012-02-22 22:22:22');

-- --------------------------------------------------------

--
-- 表的结构 `computer`
--

CREATE TABLE IF NOT EXISTS `computer` (
  `productid` varchar(100) NOT NULL,
  `processor` varchar(25) NOT NULL,
  `memory` int(11) NOT NULL,
  `storage` int(11) NOT NULL,
  `screensize` float(4,1) DEFAULT NULL,
  `type` varchar(18) DEFAULT NULL,
  `operatingsystem` varchar(10) NOT NULL,
  `displaycard` varchar(30) DEFAULT NULL,
  `weight` float(8,2) DEFAULT NULL,
  `other` text,
  `rating` float NOT NULL,
  `viewtimes` bigint(20) unsigned NOT NULL,
  `color` varchar(50) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `minprice` float(8,2) NOT NULL,
  PRIMARY KEY (`productid`),
  KEY `processor` (`processor`),
  KEY `brand` (`brand`),
  KEY `operatingsystem` (`operatingsystem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `computer`
--

INSERT INTO `computer` (`productid`, `processor`, `memory`, `storage`, `screensize`, `type`, `operatingsystem`, `displaycard`, `weight`, `other`, `rating`, `viewtimes`, `color`, `brand`, `picture`, `minprice`) VALUES
('11-inch MacBook Air', 'Intel Xeon Quad Core', 2, 320, 11.6, 'Laptop', 'Mac', 'Nvidia GeForce GT', 1.08, ' - ', 5, 190000000000000, 'silver grey', 'Apple', 'images/11-inch MacBook Air.jpg', 764.94),
('13-inch MacBook Air', 'Intel Celeron', 4, 360, 14.0, 'Laptop', 'Mac', 'AMD Radeon HD', 1.35, ' - ', 3, 120000000000000, 'silver grey', 'Apple', 'images/13-inch MacBook Air.jpg', 1059.00),
('13-inch MacBook Pro', 'Intel Core i5', 4, 500, 14.0, 'Laptop', 'Mac', 'ATI Radeon', 2.04, ' - ', 4, 20000000000000, 'silver grey', 'Apple', 'images/13-inch MacBook Pro.jpg', 989.00),
('15-inch MacBook Pro', 'Intel Core i7', 4, 500, 15.6, 'Laptop', 'Mac', 'AMD Radeon HD', 2.54, ' - ', 4, 13000000000000, 'silver grey', 'Apple', 'images/15-inch MacBook Pro.jpg', 1289.00),
('17-inch MacBook Pro', 'Intel Core i7', 4, 500, 17.3, 'Laptop', 'Mac', 'ATI Radeon ', 2.99, ' - ', 5, 160000000000000, 'silver grey', 'Apple', 'images/17-inch MacBook Pro.jpg', 2086.99),
('21.5-inch iMac', 'Intel Core i5', 4, 1000, 23.0, 'Desktop', 'Mac', 'ATI Radeon ', 9.30, ' - ', 3, 200000000000000, 'silver grey', 'Apple', 'images/21.5-inch iMac.jpg', 933.80),
('27-inch iMac', 'Intel Xeon Quad Core', 4, 1000, 27.0, 'Desktop', 'Mac', 'AMD Radeon HD', 13.80, ' - ', 3, 220000000000000, 'silver grey', 'Apple', 'images/27-inch iMac.jpg', 1219.99),
('300E5A 15.6', 'Intel Core i5', 4, 500, 15.6, 'Laptop', 'Windows 7', 'AMD Radeon HD', 2.30, '367.9 x 243 x 27.1 ~ 33mm, HD Audio, SoundAlive, 3W stereo Speaker, Web Camera', 3, 30009800000000, 'black', 'Samsung', 'images/300E5A 15.6.jpg', 329.94),
('300V4A 14.0', 'Intel Core i3', 6, 500, 14.0, 'Laptop', 'Windows 7', ' - ', 2.16, '331.1 x 230 x 29.9 ~ 32.3mm, HD Audio, Mic Noise Suppression, SoundAlive, 3W Stereo Speaker, 1.3 megapixel HD Webcam\n', 4, 100009870000000, 'black', 'Samsung', 'images/300V4A 14.0.jpg', 399.99),
('900X1B 11.6', 'Intel Celeron', 8, 250, 11.6, 'Laptop', 'Windows 7', ' - ', 1.06, '298 x 197.5 x 15.9 ~ 16.5mm, HD Audio, SoundAlive?, 3W Stereo Speaker (1.5W x 2), 1.3 megapixel HD\n Webcam', 4, 20000000750000, 'black', 'Samsung', 'images/Ultra Portable Notebook.jpg', 783.60),
('INSP15A', 'Intel Pentium Dual-Core', 4, 500, 15.6, 'Laptop', 'Windows 7', 'Intel HD Graphics ', 2.37, ' - ', 0, 10000000000000, 'black', 'Dell', 'images/INSP15A.jpg', 450.00),
('INSP15B', 'Intel Core i3', 4, 500, 15.6, 'Laptop', 'Windows 7', 'Intel HD Graphics ', 2.37, 'Bluetooth', 4.5, 90009900000000, 'black', 'Sony', 'images/INSP15B.jpg', 899.99),
('INSP15C', 'Intel Core i5', 4, 640, 15.6, 'Laptop', 'Windows 7', 'Intel HD Graphics ', 2.37, 'Bluetooth', 3, 30000000400000, 'black', 'Dell', 'images/INSP15C.jpg', 749.99),
('INSP15D', 'Intel Celeron', 4, 1000, 15.6, 'Laptop', 'Windows 7', 'Intel HD Graphics ', 2.65, 'Bluetooth', 4, 1000000780000, 'black', 'Dell', 'images/INSP15D.jpg', 1110.00),
('INSP15R', 'Intel Celeron', 4, 750, 15.6, 'Laptop', 'Windows 7', 'Nvidia GeForce GT ', 2.65, 'Bluetooth', 3.5, 90000000000000, 'black, blue, red, pink', 'Dell', 'images/INSP15R.jpg', 749.99),
('Intel Xeon Dual Core', 'Intel Core i7', 8, 750, 15.6, 'Laptop', 'Windows 7', ' - ', 2.29, '362.1 x 238.5 x 23.9mm, SoundAlive?, 3W Stereo Speaker (1.5W x 2), 1.3 megapixel HD Webcam\n', 3, 20000006600000, 'black', 'Samsung', 'images/Series 7 CHRONOS.jpg', 899.99),
('M71z All in one', 'Intel Core i3', 4, 500, 23.0, 'All-in-one Desktop', 'Windows 7', ' - ', NULL, 'Intel Integrated HD Graphics H61, DVD Recordable, All in One', 4, 100100000006000, 'black', 'Lenovo', 'images/M71z All in one.jpg', 299.99),
('Notebook Series 9', 'Intel Xeon Dual Core', 4, 128, 14.0, 'Laptop', 'Windows 7', 'Core Graphics Driver', 1.31, '328.5 x 227 x 15.9 ~ 16.3mm, HD Audio, SoundAlive, 3W stereo Speaker, 1.3 megapixel HD Webcam \n', 4, 10000000087000, 'black', 'Samsung', 'images/Notebook Series 9.jpg', 1031.15),
('Series 5 Ultrabook', 'Intel Core i5', 4, 500, 10.1, 'Laptop', 'Windows 7', 'Speicial Display Card', 1.79, '33.3*20.9*229.5mm, HD Audio, Mic Noise Suppression\nSoundAlive, 1.3 megapixel HD Webcam', 4, 10300000000000, 'black', 'Samsung', 'images/Series 5 Ultrabook.jpg', 778.91),
('Series 7 Gamer', 'Intel Celeron \n', 8, 1500, 17.3, 'Laptop', 'Windows 7', ' - ', 4.02, '"409 x 284.8 x 32.99 ~ 52.6mm, HD Audio, Mic Noise Suppression Dolby Home Theatre?, \n4W Stereo Speaker (2W x 2)sub-Woofer, 2 megapixel Webcam"', 4, 80000098000000, 'black', 'Samsung', 'images/Series 7 Gamer.jpg', 791.33),
('ThinkCentre M90z', 'Intel Core i3', 2, 500, 23.0, 'All-in-one Desktop', 'Windows 7', ' - ', NULL, 'Intel HD Graphics, DVD Recordable (Dual Layer) , All in One', 3, 100000400000000, 'black', 'Lenovo', 'images/ThinkCentre M90z.jpg', 774.06),
('ThinkCentre M91/M91p', 'Intel Core i5', 4, 500, NULL, 'Desktop', 'Windows 7', 'AMD Radeon HD', NULL, 'Intel Graphics Media Accelerator HD, DVD Recordable,Tower', 4, 10000000000000, 'black', 'Lenovo', 'images/ThinkCentre M91p.jpg', 806.72),
('ThinkPad E420s', 'Intel Xeon Dual Core', 4, 820, 14.0, 'Laptop', 'Windows 7', 'AMD Radeon HD', 1.88, 'LED Backlight, Infinity Glass, AMD Radeon HD6630 2GB Switchable Graphics, Intel Core i5-2450M Processor \n(2.5GHz up to SC 3.1GHz, 3MB L3, 1333MHz DDR3),Bluetooth 3.0', 4, 20670000000000, 'black', 'Lenovo', 'images/ThinkPad E420s.jpg', 723.76),
('ThinkPad E525', 'Other', 4, 320, 15.6, 'Laptop', 'Windows 7', 'AMD Radeon HD', 2.45, 'Bluetooth 3.0, No Fingerprint Reader', 4.5, 20009900000000, 'black', 'Lenovo', 'images/ThinkPad E525.jpg', 344.97),
('ThinkPad Edge E520', 'Intel Core i3', 4, 320, 15.6, 'Laptop', 'Windows 7', ' - ', 2.45, 'Bluetooth 3.0, No Fingerprint Reader', 0, 30000030000000, 'black', 'Lenovo', 'images/ThinkPad Edge E520.jpg', 447.95),
('ThinkPad X1', 'Intel Core i3', 4, 320, 14.0, 'Laptop', 'Windows 7', 'AMD Radeon HD \n', 1.69, 'TrackPoint with Fingerprint Reader and Clickpad', 3, 10860000000000, 'black', 'Lenovo', 'images/ThinkPad X1.jpg', 1039.98),
('ThinkPad X121e Intel', 'Other', 2, 320, 11.6, 'Laptop', 'Windows 7', ' - ', 1.31, 'Intel GMA HD Gfx 3000, Intel Core i3-2367M ULV Processor (1.4GHz, 3MB L3, 1333MHz DDR3)', 3, 10000700000000, 'black,red', 'Lenovo', 'images/ThinkPad X121e Intel.jpg', 420.55),
('ThinkPad X220', 'Intel Core i3', 2, 320, 11.6, 'Laptop', 'Windows 7', ' - ', 1.31, 'Bluetooth 3.0, LED Backlit Display, Mobile Broadband Ready, 2x2 Antenna', 4, 1000010000009000, 'black', 'Lenovo', 'images/ThinkPad X220.jpg', 1275.00),
('XPS15A', 'Intel Core i5', 6, 750, 15.6, 'Laptop', 'Windows 7', 'Nvidia GeForce GT', 2.78, 'Bluetooth', 4, 1000500000000, 'sliver', 'Dell', 'images/XPS15A.jpg', 599.99),
('XPS17A', 'Intel Core i5', 4, 750, 17.3, 'Laptop', 'Windows 7', 'Nvidia GeForce GT ', 3.43, 'Bluetooth', 3.5, 60000030000000, 'sliver', 'Dell', 'images/XPS17A.jpg', 450.00);

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int(10) unsigned NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `memberid` int(10) unsigned NOT NULL,
  `staffid` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `response` text,
  `writetime` datetime NOT NULL,
  `responsetime` datetime DEFAULT NULL,
  PRIMARY KEY (`feedbackid`),
  KEY `staffid` (`staffid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `title`, `memberid`, `staffid`, `content`, `response`, `writetime`, `responsetime`) VALUES
(1, 'Register question', 1, 1, 'Could I register more than one account by\n using the same e-mail?', 'No,the e-mail you use must be unique', '2011-04-11 18:11:11', '2011-04-12 12:11:21'),
(2, 'Good Web', 2, 1, 'Your web is very good.', 'Thank you!', '2012-02-11 11:16:41', '2012-02-12 18:11:11'),
(3, 'Password question', 1, 2, 'I fogot my password,what should I do', 'You can click foget password when you log in to create a new password', '2012-04-13 21:13:11', '2012-04-14 18:11:06'),
(4, 'Web suggestion', 3, 2, 'Your web is not very efficient, hope you can improve it', 'Thanks for your suggest, we will try it', '2012-05-18 11:19:22', '2012-05-19 17:21:11'),
(5, 'Password question', 5, 5, 'I fogot my password and I do not want another new password, can I got my original password', 'It is more safe to create a new password', '2012-02-22 16:19:18', '2012-02-23 18:21:31');

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `memberid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` char(40) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `zipcode` varchar(12) NOT NULL,
  `roomORhouseno` varchar(5) NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `e_mail` varchar(35) NOT NULL,
  `phoneno` varchar(13) DEFAULT NULL,
  `telno` char(11) DEFAULT NULL,
  `registerdate` date NOT NULL,
  `securityquestion` varchar(40) NOT NULL,
  `securityquestionanswer` varchar(20) NOT NULL,
  `dateoflatestlogin` date NOT NULL,
  PRIMARY KEY (`memberid`),
  KEY `lname` (`lname`),
  KEY `registerdate` (`registerdate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`memberid`, `password`, `fname`, `lname`, `gender`, `zipcode`, `roomORhouseno`, `dateofbirth`, `e_mail`, `phoneno`, `telno`, `registerdate`, `securityquestion`, `securityquestionanswer`, `dateoflatestlogin`) VALUES
(1, 'cc7550b35ed886be8222b5ff04cc601a6a4fa15b', 'Atkinson', 'Katie', 'male', 'WA 98105', 'NO. D', '2008-06-22', 'Cball@liv.ac.uk', '+447721920735', '07721920735', '2008-06-22', '', '', '2008-06-22');

-- --------------------------------------------------------

--
-- 表的结构 `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `productid` varchar(100) NOT NULL,
  `platform` varchar(15) NOT NULL,
  `connectivity` varchar(300) NOT NULL,
  `physicalsize` varchar(25) NOT NULL,
  `weight` float(8,2) DEFAULT NULL,
  `screensize` float(4,1) NOT NULL,
  `pixel` float(7,2) NOT NULL,
  `battery` varchar(200) NOT NULL,
  `softwareapplication` varchar(200) NOT NULL,
  `memory` int(11) NOT NULL,
  `externalmemory` int(11) DEFAULT NULL,
  `other` text,
  `rating` float NOT NULL,
  `viewtimes` bigint(20) unsigned NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `brand` varchar(15) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `minprice` float(8,2) NOT NULL,
  PRIMARY KEY (`productid`),
  KEY `platform` (`platform`),
  KEY `brand` (`brand`),
  KEY `memory` (`memory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `mobile`
--

INSERT INTO `mobile` (`productid`, `platform`, `connectivity`, `physicalsize`, `weight`, `screensize`, `pixel`, `battery`, `softwareapplication`, `memory`, `externalmemory`, `other`, `rating`, `viewtimes`, `color`, `brand`, `picture`, `minprice`) VALUES
('ASHA201', 'Symbian', '2G', '14.0x115.4x61.1', 105.00, 2.4, 2.00, '1320mAh', 'Symbian OS', 32, NULL, 'Full Qwerty', 3.5, 10000060000000, 'Black,Blue,Green', 'Nokia', 'images/ASHA201.jpg', 57.90),
('ASHA300', 'Other', '3G', '12.7x112.8x49.5', 85.00, 2.4, 5.00, '1110mAh', ' - ', 128, NULL, 'Touch', 2.5, 20000000400000, 'Sliver, red, purple, black', 'Nokia', 'images/ASHA300.jpg', 88.11),
('C601', 'Symbian', 'Wifi 3G', '13.9 x 103.8 x 52.5', 131.00, 3.2, 8.00, '1050mAh', ' - ', 256, NULL, 'Touch', 3, 1000000082900000, 'Black', 'Nokia', 'images/C601.jpg', 180.00),
('C700', 'Blackberry RIM', 'Wifi 3G', '10.5 x 117.3 x 56.8', 130.00, 3.5, 8.00, '1200mAh', ' - ', 256, 8, 'Touch', 3, 1000000928000000, 'Black, sliver, Brown', 'Blackberry', 'images/C700.jpg', 218.99),
('ChaCha', 'Android', '3.5 mm stereo audio jack, Standard micro-USB (5-pin micro-USB 2.0)', '114.4mm x 64.6mm x 10.7mm', 124.00, 2.6, 5.00, '"Rechargeable Lithium-ion battery 1250 mAh"', ' - ', 512, NULL, 'Bluetooth, Internet, Multimedia', 3, 10009000050000, 'White', 'HTC', 'images/ChaCha.jpg', 129.99),
('Desire S', 'Blackberry RIM', '"3.5 mm stereo audio jack, Standard micro-USB (5-pin micro-USB 2.0)"', '115mm x 59.8mm x 11.63mm ', 130.00, 3.7, 5.00, '"Rechargeable Lithium-ion battery<BR>1450 mAh"', ' - ', 768, NULL, 'Bluetooth, Internet, Multimedia', 4, 10098000000000, 'black', 'Blackberry', 'images/Desire S.jpg', 233.14),
('Desire Z', 'Android', '"3.5 mm stereo audio jack, Standard micro-USB (5-pin micro-USB 2.0)"', '119mm x 60.4mm x 14.16mm ', 180.00, 3.7, 5.00, '"Rechargeable Lithium-ion battery\n1300 mAh"', ' - ', 512, NULL, '"Register at HTCSense.com to manage your phone remotely and \nprotect your phone in case of loss, Check email from all your email accounts in one unified \ninbox,Watch Adobe, Flash, on websites Easily transfer contacts, calendar events, and text \nmessages from popular brand phones via Bluetooth"', 3, 40000000990000, ' - ', 'HTC', 'images/Desire Z.jpg', 189.99),
('E500', 'Symbian', 'Wifi 3G', '12.8 x 115.0 x 58.9', 126.00, 2.5, 5.00, '1200mAh', ' - ', 256, NULL, 'full QWERTY keyboard', 3, 120000120000000, 'black, white, brown, sliver, blue', 'Nokia', 'images/E500.jpg', 139.99),
('E600', 'Symbian', 'Wifi 3G', '10.5 x 115.5 x 59.0', 133.00, 2.5, 8.00, '1500mAh', ' - ', 312, 8, 'full QWERTY keyboard', 4.5, 20000500000000, 'black, sliver', 'Nokia', 'images/E600.jpg', 245.00),
('E700', 'Symbian', 'Wifi 3G', '13.6 x 123.7 x 62.4', 137.60, 4.0, 8.00, '1200mAh', ' - ', 256, 16, 'Touch, Slide, full QWERTY keyboard', 0, 50000000200000, 'black, sliver, blue, green, red', 'Nokia', 'images/E700.jpg', 387.22),
('EVO 3D', 'Android', '"3.5 mm stereo audio jack, micro-USB 2.0 (5-pin) port with mobile\nhigh-definition video link (MHL) for USB or HDMI connection"', '126.1mm x 65.4mm x 11.3mm', 170.00, 4.3, 5.00, '"Rechargeable lithium-ion battery 1730 mAh"', ' - ', 512, NULL, 'Bluetooth, \nInternet, Multimedia, Social Networking', 4, 10000084000000, 'Black', 'HTC', 'images/EVO 3D.jpg', 279.00),
('Explorer', 'Android', '"3.5 mm stereo audio jack Standard micro-USB (5-pin micro-USB 2.0)"', '102.8mm x 57.2mm x 12.9mm', 108.00, 3.2, 3.00, '"Rechargeable Lithium-ion battery\n1230 mAh"', ' - ', 512, NULL, 'Bluetooth, Internet, Multimedia, Social Networking', 3, 60000000060000, 'Black', 'HTC', 'images/Explorer.jpg', 99.99),
('HD7', 'Windows', '3.5 mm stereo audio jack, Standard micro-USB (5-pin micro-USB 2.0)', '122mm x 68mm x 11.2mm', 162.00, 4.3, 5.00, '"Rechargeable Lithium-ion battery 1230 mAh"', ' - ', 312, NULL, 'With kickstand, Customize your phone with live tiles which dynamically \nupdate all key information right on the Start screen, Choose from thousands of video titles\nand music tracks via integrated Zune, services. Play console-quality video games with XBox LIVE, \nintegrationPlay console-quality video games with XBox LIVE integrationPlay console-quality video\ngames with XBox LIVE? integration', 4, 10000008000000, 'Black', 'HTC', 'images/HD7.jpg', 256.97),
('HTC Desire HD', 'Other', '3.5 mm stereo audio jack Standard micro-USB (5-pin micro-USB 2.0)', '123mm x 68mm x 11.8mm', 164.00, 4.3, 8.00, 'Rechargeable Lithium-ion battery\n1230 mAh', ' - ', 768, NULL, '"Register at HTCSense.com to manage your phone remotely and protect\nyour phone in case of loss, Read eBooks on your phone,Watch Adobe, Flash on websites,Easily\ntransfer contacts, calendar events, and text messages from popular brand phones via Bluetooth\nCheck email from all your email accounts in one unified inbox"', 3, 10000006620000, 'black,grey', 'HTC', 'images/HTC Desire HD.jpg', 230.00),
('Incredible S', 'Android', '3.5 mm stereo audio jack, Standard micro-USB (5-pin micro-USB 2.0)', '120mm x 64mm x 11.7mm', 135.50, 4.0, 8.00, '"Rechargeable Lithium-ion battery 1450 mAh"', ' - ', 768, NULL, 'Bluetooth, Internet, Multimedia', 5, 17000060000000, 'Black', 'HTC', 'images/Incredible S.jpg', 258.00),
('iPhone4', 'IOS', 'GPRS, EDGE, HSDPA, USB2.0, WiFi, GPS, Support JAVA', '115.2 X 58.6 X 9.3', 137.00, 3.5, 3.20, '1420mAH ;GSM:840mins, 
	WCDMA:420mins', 'QQ;MSN; MP3 AAC,Protected AAC, HE-AAC,Apple Lossless,AIFF and WAV; Video: Main Profile level 3.1', 512, 16, 
	'A touchscreen slate 3G smartphone developed by Apple Inc. It is the fourth generation iPhone, and successor to the iPhone 3GS.
	It is particularly marketed for video calling (marketed by Apple as FaceTime), consumption of media such as books and periodicals,
movies, music, and games, and for general web and e-mail access',4.5, 100000030000200032, 'black, white', 'Apple', 'images/iPhone4.jpg', 385.00),
('iPhone4S', 'IOS', 'Wi-Fi (802.11 b/g/n) (2.4 GHz only);Bluetooth 4.0; Combined GSM/CDMA antenna', '115.2 x 58.66 x 9.3', 
140.00, 3.5, 3.20, 'The iPhone 4S is stated to have 200 hours standby time (iPhone 4 300 hours), 8 hours talk time on 3G (iPhone 4–7 hours),
14 hours talk time on 2G, 6 hours 3G browsing', 'The iPhone 4S uses the Apple A5 system-on-a-chip that uses an Imagination Technologies
PowerVR SGX graphics processing unit, which features pixel, vertex, and geometry shader hardware, supporting Open', 512, 64, 
'The iPhone 4S is a touchscreen-based, slate-sized smartphone developed by Apple Inc. It is the fifth generation of the iPhone[5] 
and retains the exterior design of its predecessor, the iPhone 4, but is host to a range of improved hardware specifications and 
software updates.[6] The phone added a voice recognition system known as Siri and a cloud storage service named iCloud. Some of
the device''s functions may be voice-controlled through Siri', 4.5, 90050200000408000, 'black, white', 'Apple', 'images/iPhone4S.jpg', 495.00),
('LUMIA800', 'Windows', 'Wifi 3G', '12.1 x 116.5 x 61.2', 142.00, 3.7, 8.00, '1450mAh', ' - ', 512, 16, 'Touch', 5, 11000140000000, 'Blue, black, pink, white', 'Nokia', 'images/LUMIA800.jpg', 309.99),
('MOTOLUXE', 'Android', 'Android 2.3SOFTWARE UPDATES (FOTA),SYNCHRONISATION,WIFI,BLUETOOTH3.0,\nUSB 2.0 HS,DLNA,3.5 mm audio jack,GPS/aGPS', '117.7 x 60.5 x 9.9 mm', 123.60, 4.0, 5.00, '1400 \nmAh,TALK TIME  2G, up to approximately 6.5 hrs; 3G, up to approximately 4.5 hrs,STANDBY TIME \n2G, up approximately 450 hrs; 3G, up to approximately 400 hrs', 'WEB ACCESS ,WEB BROWSER,ANDROID \nMARKET', 456, NULL, 'Full touch bar', 3, 14000000000890, 'black', 'MOTOROLA', 'images/MOTOLUXE.jpg', 149.99),
('Motorola DEFY MINI', 'Android', 'SOFTWARE UPDATES (FOTA,SYNCHRONISATION,WIFI,BLUETOOTH,\nTECHNOLOGY4,CONNECTOR TYPE,DATA TRANSMISSION RATE5,DLNA,HEADSET JACK,LOCATION SERVICES6', '109×58.5×12.55mm', 107.00, 3.2, 5.00, '1650 mAh,TALK TIME  2G, up to approximately 580 min;\n3G, up to approximately 540 min,STANDBY TIME 2G, up approximately 420 hrs; 3G. Up to\napproximately 360 hrs', ' GAMES,WEB ACCESS,WEB BROWSER,ANDROID MARKET', 512, NULL, 'Full touch bar', 4, 10000000900000, 'black', 'MOTOROLA', 'images/Motorola DEFY MINI.jpg', 154.99),
('N800', 'Symbian', 'Wifi 3G', '12.9 x 113.5 x 59.0', 135.00, 3.5, 12.00, '1200mAh', ' - ', 256, 16, 'Touch', 5, 40000080000000, 'Sliver,\n black, orange, blue, green', 'Nokia', 'images/N800.jpg', 209.95),
('N900', 'Other', 'Wifi 3G', '18.0x110.9x59.8', 181.00, 3.5, 5.00, '1320mAh', ' - ', 256, 32, 'Full QWERTY Keyboard, touch', 0, 80400000000000, 'black', 'Nokia', 'images/N900.jpg', 212.00),
('NOKIA500', 'Symbian', 'Wifi 3G', '53.8x111.3x14.1', 93.00, 3.2, 5.00, '1110mAh', 'Symbian OS', 256, 2, 'Touch', 3, 80000000000000, 'Black, Blue, Green, Pink, Red', 'Nokia', 'images/NOKIA500.jpg', 124.99),
('NOKIA5228', 'Symbian', '2G', '14.5x51.7x111.0', 113.00, 3.2, 2.00, '1320mAh', 'Symbian OS', 128, NULL, 'Touch', 3.5, 50000000000000, 'black', 'Nokia', 'images/NOKIA5228.jpg', 119.99),
('NOKIA5230', 'other', '3G', '14.5x51.7x111.0', 113.00, 3.2, 2.00, '1320mAh', 'Symbian OS', 456, NULL, 'Touch', 3, 12000000000000, 'White/red, white/black, white/pink, white/yellow', 'Nokia', 'images/NOKIA5230.jpg', 101.99),
('NOKIA700', 'Symbian', 'Wifi 3G', '9.7x50.0x111.0', 96.00, 3.2, 5.00, '1080mAh', 'Symbian OS', 512, 2, 'Touch', 4, 90000000000000, 'Black,Red', 'Nokia', 'images/NOKIA700.jpg', 229.99),
('Radar', 'Windows', '"3.5 mm stereo audio jack, micro-USB 2.0 (5-pin) port"', '120.5mm x 61.5mm x 10.9mm', 137.00, 3.8, 5.00, '"Rechargeable Lithium-ion battery\n1520 mAh"', ' - ', 512, NULL, 'Bluetooth, Internet, Multimedia, Social Networking', 3, 93000000040000, 'Black, White', 'HTC', 'images/Radar.jpg', 239.99),
('Rhyme', 'Android', '"3.5 mm stereo audio jack, Bluetooth, 3.0 with FTP/OPP for file transfer, \nA2DP for wireless stereo headsets, and PBAP for phonebook access from the car kit Wi-Fi: IEEE \n802.11 b/g/n DLNA for wirelessly streaming media from the phone to your TV or computer"', '119 x 60.8 x 10.85 mm ', 130.00, 3.7, 5.00, '"Rechargeable Lithium-ion battery 1600 mAh"', ' - ', 768, NULL, 'Bluetooth, Internet, Multimedia', 4, 700026000000000, 'Black, Grey', 'HTC', 'images/Rhyme.jpg', 319.00),
('TITAN', 'Windows', '3.5 mm stereo audio jack micro-USB 2.0 (5-pin) port', '131.5mm x 70.7mm x 9.9mm ', 160.00, 4.7, 8.00, '"Rechargeable Lithium-ion battery\n1600 mAh"', ' - ', 512, NULL, 'Bluetooth, Internet, Multimedia, Social Networking', 3, 80290000090000, 'black', 'HTC', 'images/TITAN.jpg', 269.99),
('Wildfire S', 'Android', '3.5 mm stereo audio jack, Standard micro-USB (5-pin micro-USB 2.0)', '101.3mm x 59.4mm x 12.4mm', 105.00, 3.2, 5.00, '"Rechargeable Lithium-ion battery 1230 mAh"', ' - ', 512, NULL, 'Bluetooth, Internet, Multimedia', 4, 40000000003000, 'Black, Grey', 'HTC', 'images/Wildfire S.jpg', 144.99),
('x200', 'Other', '2G', '13.3 x111.0 x 47.0', 82.00, 1.8, 5.00, '860mAh', ' - ', 64, NULL, 'Alphanumeric keypad', 3, 1000000025100000, 'Blue, red', 'Nokia', 'images/x200.jpg', 77.95),
('x300', 'Other', '2G', '14.1 x 96.0 x 49.3', 103.00, 1.8, 3.20, '860mAh', ' - ', 64, NULL, 'Alphanumeric keypad', 4.5, 1000000512000000, 'Blue, white', 'Nokia', 'images/x300.jpg', 109.99),
('x302', 'Nokia OS', 'Wifi 3G', '9.6 x 106.2 x 48.4', 77.00, 2.4, 5.00, '860mAh', ' - ', 4, NULL, 'Touch, Alphanumeric keypad', 4, 521000000000000, 'Blue, black, pink, red, white', 'Nokia', 'images/x302.jpg', 109.99),
('x700', 'Symbian', 'Wifi 3G', '11.9 x 119.7 x 62.8', 146.00, 4.0, 8.00, '1200mAh', ' - ', 256, 8, 'Touch', 3.5, 121000002100000, 'black, sliver', 'Nokia', 'images/x700.jpg', 270.42);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productid` varchar(100) NOT NULL,
  `producttype` int(10) unsigned NOT NULL,
  `releasedate` date NOT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`productid`),
  KEY `producttype` (`producttype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`productid`, `producttype`, `releasedate`, `picture`) VALUES
('11-inch MacBook Air', 1, '2010-08-22', 'images/11-inch MacBook Air.jpg'),
('13-inch MacBook Air', 1, '2010-06-22', 'images/13-inch MacBook Air.jpg'),
('13-inch MacBook Pro', 1, '2010-04-28', 'images/13-inch MacBook Pro.jpg'),
('15-inch MacBook Pro', 1, '2011-03-29', 'images/15-inch MacBook Pro.jpg'),
('17-inch MacBook Pro', 1, '2011-02-22', 'images/17-inch MacBook Pro.jpg'),
('21.5-inch iMac', 1, '2009-06-12', 'images/21.5-inch iMac.jpg'),
('27-inch iMac', 1, '2011-09-02', 'images/27-inch iMac.jpg'),
('300E5A 15.6" Essential Notebook', 1, '2009-11-02', 'images/300E5A 15.6.jpg'),
('300V4A 14.0" Essential Notebook" Essential Notebook', 1, '2010-05-26', 'images/300V4A 14.0.jpg'),
('900X1B 11.6" Ultra Portable Notebook', 1, '2007-07-22', 'images/Ultra Portable Notebook.jpg'),
('ASHA201', 2, '2007-03-11', 'images/ASHA201.jpg'),
('ASHA300', 2, '2008-10-23', 'images/ASHA300.jpg'),
('C601', 2, '2002-03-11', 'images/C601.jpg'),
('C700', 2, '2005-11-08', 'images/C700.jpg'),
('ChaCha', 2, '2008-11-22', 'images/ChaCha.jpg'),
('Desire S', 2, '2007-05-02', 'images/Desire S.jpg'),
('Desire Z', 2, '2004-11-12', 'images/Desire Z.jpg'),
('E500', 2, '2001-06-18', 'images/E500.jpg'),
('E600', 2, '2002-09-15', 'images/E600.jpg'),
('E700', 2, '2004-12-09', 'images/E700.jpg'),
('EVO 3D', 2, '2008-09-22', 'images/EVO 3D.jpg'),
('Explorer', 2, '2008-12-05', 'images/Explorer.jpg'),
('HD7', 2, '2008-05-22', 'images/HD7.jpg'),
('HTC Desire HD', 2, '2005-04-08', 'images/HTC Desire HD.jpg'),
('Incredible S', 2, '2008-02-18', 'images/Incredible S.jpg'),
('INSP15A', 1, '2008-05-28', 'images/INSP15A.jpg'),
('INSP15B', 1, '2006-03-24', 'images/INSP15B.jpg'),
('INSP15C', 1, '2003-12-03', 'images/INSP15C.jpg'),
('INSP15D', 1, '2006-09-12', 'images/INSP15D.jpg'),
('INSP15R', 1, '2009-04-28', 'images/INSP15R.jpg'),
('iPhone4', 2, '2010-03-12', 'images/iPhone4.jpg'),
('iPhone4S', 2, '2011-04-10', 'images/iPhone4S.jpg'),
('LUMIA800', 2, '2008-07-29', 'images/LUMIA800.jpg'),
('M71z All in one', 1, '2010-06-19', 'images/M71z All in one.jpg'),
('Moterola DEFY MINI', 2, '2008-06-22', 'images/Moterola DEFY MINI.jpg'),
('MOTOLUXE', 2, '2010-08-04', 'images/MOTOLUXE.jpg'),
('N800', 2, '2003-02-06', 'images/N800.jpg'),
('N900', 2, '2002-11-24', 'images/N900.jpg'),
('NOKIA500', 2, '2003-11-02', 'images/NOKIA500.jpg'),
('NOKIA5228', 2, '2004-08-28', 'images/NOKIA5228.jpg'),
('NOKIA5230', 2, '2003-06-12', 'images/NOKIA5230.jpg'),
('NOKIA700', 2, '2005-09-22', 'images/NOKIA700.jpg'),
('Notebook Series 9', 1, '2005-06-22', 'images/Notebook Series 9.jpg'),
('Radar', 2, '2008-03-08', 'images/Radar.jpg'),
('Rhyme', 2, '2008-12-09', 'images/Rhyme.jpg'),
('Series 5 Ultrabook', 1, '2006-06-16', 'images/Series 5 Ultrabook.jpg'),
('Series 7 CHRONOS', 1, '2008-06-28', 'images/Series 7 CHRONOS.jpg'),
('Series 7 Gamer', 1, '2008-06-22', 'images/Series 7 Gamer.jpg'),
('ThinkCentre M90z', 1, '2009-05-04', 'images/ThinkCentre M90z.jpg'),
('ThinkCentre M91/M91p', 1, '2011-01-22', 'images/ThinkCentre M91p.jpg'),
('ThinkPad E420s', 1, '2009-05-22', 'images/ThinkPad E420s.jpg'),
('ThinkPad E525', 1, '2009-03-02', 'images/ThinkPad E525.jpg'),
('ThinkPad Edge E520', 1, '2010-06-26', 'images/ThinkPad Edge E520.jpg'),
('ThinkPad X1', 1, '2009-06-02', 'images/ThinkPad X1.jpg'),
('ThinkPad X121e Intel', 1, '2010-10-23', 'images/ThinkPad X121e Intel.jpg'),
('ThinkPad X220', 1, '2010-11-22', 'images/ThinkPad X220.jpg'),
('TITAN', 2, '2008-09-03', 'images/TITAN.jpg'),
('Wildfire S', 2, '2008-10-15', 'images/Wildfire S.jpg'),
('x200', 2, '2002-03-28', 'images/x200.jpg'),
('x300', 2, '2001-07-02', 'images/x300.jpg'),
('x302', 2, '2000-08-27', 'images/x302.jpg'),
('x700', 2, '2000-05-19', 'images/x700.jpg'),
('XPS15A', 1, '2002-02-22', 'images/XPS15A.jpg'),
('XPS17A', 1, '2005-11-09', 'images/XPS17A.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `purchaselink`
--

CREATE TABLE IF NOT EXISTS `purchaselink` (
  `productid` varchar(100) NOT NULL,
  `supplierid` int(10) unsigned NOT NULL,
  `price` float(8,2) NOT NULL,
  `stock` varchar(3) NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`productid`,`supplierid`),
  KEY `supplierid` (`supplierid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `purchaselink`
--

INSERT INTO `purchaselink` (`productid`, `supplierid`, `price`, `stock`, `link`) VALUES
('11-inch MacBook Air', 2, 764.94, 'Yes', 'http://www.amazon.co.uk/Apple-MacBook-Dual-Core-1-6GHz-Graphics/dp/B005DY7A6U/ref=sr_1_1?ie=UTF8&qid\n=1335017597&sr=8-1'),
('11-inch MacBook Air', 5, 849.00, 'Yes', 'http://www.currys.co.uk/gbuk/apple-macbook-air-mc966b-a-11-6-laptop-11096965-pdt.html'),
('11-inch MacBook Air', 6, 919.00, 'Yes', 'http://www.pcworld.co.uk/gbuk/apple-macbook-air-mc969b-a-refurbished-11-6-laptop-12290840-pdt.html'),
('11-inch MacBook Air', 7, 849.00, 'Yes', 'http://www.comet.co.uk/p/Laptops/buy-APPLE-11.6-INCH-MACBOOK-AIR-64GB-Laptop/754986'),
('11-inch MacBook Air', 10, 995.00, 'Yes', 'http://www.ebay.com/itm/Apple-MC969LL-A-11-6-MacBook-Air-dual-core-Intel-Core-i5-1-6GHz-4GB-RAM-/\n221006350725?pt=Apple_Laptops&hash=item3375014985'),
('13-inch MacBook Air', 2, 1059.00, 'Yes', 'http://www.amazon.co.uk/Apple-MacBook-Dual-Core-1-7GHz-Graphics/dp/B005DYB9GC/ref=sr_1_1?ie=UTF8&qid\n=1335020219&sr=8-1'),
('13-inch MacBook Air', 5, 1349.00, 'Yes', 'http://www.currys.co.uk/gbuk/apple-mc966b-a-macbook-air-13-3-laptop-11096985-pdt.html'),
('13-inch MacBook Air', 6, 1159.00, 'Yes', 'http://www.pcworld.co.uk/gbuk/apple-macbook-air-mc966b-a-refurbished-13-3-laptop-12290841-pdt.html'),
('13-inch MacBook Air', 7, 1099.00, 'Yes', 'http://www.comet.co.uk/p/Laptops/buy-APPLE-13.3-INCH-MACBOOK-AIR-128GB-Laptop/755010'),
('13-inch MacBook Air', 10, 1209.94, 'Yes', 'http://www.ebay.com/ctg/Apple-MacBook-Air-133-Laptop-MC965LL-A-July-2011-Latest-Model-/108849307?_refkw\n=13-inch+MacBook+Air&_pcatid=529&_pcategid=58058&_from=R40&_dmpt=Apple_Laptops#'),
('13-inch MacBook Pro', 2, 989.00, 'Yes', 'http://www.amazon.co.uk/Apple-Macbook-Laptop-2-3GHz-battery/dp/B004P8JCY8/ref=sr_1_1?s\n=computers&ie=UTF8&qid=1336692690&sr=1-1'),
('13-inch MacBook Pro', 6, 999.00, 'Yes', 'http://www.pcworld.co.uk/gbuk/apple-macbook-pro-md313b-a-13-3-laptop-silver-11627380-pdt.html\n?intcmpid=display~RR~~11627380'),
('13-inch MacBook Pro', 7, 1299.00, 'Yes', 'http://www.comet.co.uk/p/Laptops/buy-APPLE-13-INCH-MACBOOK-PRO-750GB-Laptop/777404'),
('13-inch MacBook Pro', 10, 1119.94, 'Yes', 'http://www.ebay.com/itm/Apple-MD313LL-A-13-3-MacBook-Pro-dual-core-Intel-Core-i5-2-\n4GHz-4GB-RAM-/260998362909?pt=Apple_Laptops&hash=item3cc4b6f71d'),
('15-inch MacBook Pro', 2, 1388.00, 'Yes', 'http://www.amazon.co.uk/Apple-Macbook-Laptop-2-0GHz-battery/dp/B004P8JD0G/ref=\nsr_1_1?s=computers&ie=UTF8&qid=1336693135&sr=1-1'),
('15-inch MacBook Pro', 5, 1289.00, 'Yes', 'http://www.currys.co.uk/gbuk/apple-macbook-pro-md318b-a-refurbished-15-4-laptop-12290876-pdt.html'),
('15-inch MacBook Pro', 6, 1289.00, 'Yes', 'http://www.pcworld.co.uk/gbuk/apple-macbook-pro-md318b-a-refurbished-15-4-laptop-12290876-pdt.html'),
('15-inch MacBook Pro', 7, 1549.00, 'Yes', 'http://www.comet.co.uk/p/Laptops/buy-APPLE-15-INCH-MACBOOK-PRO-500GB-Laptop/777412'),
('15-inch MacBook Pro', 10, 1549.99, 'Yes', 'http://www.ebay.com/ctg/Apple-MacBook-Pro-154-Laptop-MC721LL-A-February-2011-/99700122?_refkw=\n15-inch+MacBook+Pro&_pcatid=529&_pcategid=58058&_from=R40&_dmpt=Apple_Laptops'),
('17-inch MacBook Pro', 5, 2099.00, 'Yes', 'http://www.currys.co.uk/gbuk/apple-macbook-pro-md311b-a-17-laptop-silver-11627374-pdt.html'),
('17-inch MacBook Pro', 6, 2099.00, 'Yes', 'http://www.pcworld.co.uk/gbuk/apple-macbook-pro-md311b-a-17-laptop-silver-11627374-pdt.html'),
('17-inch MacBook Pro', 7, 2099.00, 'Yes', 'http://www.comet.co.uk/p/Laptops/buy-APPLE-17-INCH-MACBOOK-PRO-750GB-Laptop/777390'),
('17-inch MacBook Pro', 10, 2086.99, 'Yes', 'http://www.ebay.com/itm/Apple-MC725LL-A-17-MacBook-Pro-quad-core-Intel-Core-i7-2-2GHz-4GB\n-RAM-75-/261014861299?pt=Apple_Laptops&hash=item3cc5b2b5f3'),
('21.5-inch iMac', 2, 933.80, 'Yes', 'http://www.amazon.co.uk/Apple-All-In-One-Quad-Core-Processor-graphics/dp/B004Z139FS/ref=\nsr_1_1?ie=UTF8&qid=1336694254&sr=8-1'),
('21.5-inch iMac', 5, 999.00, 'Yes', 'http://www.currys.co.uk/gbuk/apple-imac-mc309-21-5-all-in-one-10478077-pdt.html'),
('21.5-inch iMac', 6, 999.00, 'Yes', 'http://www.pcworld.co.uk/gbuk/apple-imac-mc309-21-5-all-in-one-10478077-pdt.html'),
('27-inch iMac', 2, 1302.80, 'Yes', 'http://www.amazon.co.uk/Apple-All-In-One-Quad-Core-Processor-graphics/dp/B004Z139QC/ref\n=sr_1_1?s=computers&ie=UTF8&qid=1336694528&sr=1-1'),
('27-inch iMac', 5, 1219.99, 'Yes', 'http://www.currys.co.uk/gbuk/apple-imac-mc511-refurbished-27-all-in-one-08909141-pdt.html'),
('27-inch iMac', 6, 1219.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/apple-imac-mc511-refurbished-27-all-in-one-08909141-pdt.html'),
('27-inch iMac', 10, 1259.99, 'Yes', 'http://www.ebay.com/itm/Apple-iMac-Quad-Intel-Core-i5-2-66GHz-2GB-DDR3-RAM-27-Inch-2009-\nMB953LL-A-FS-/261018922166?pt=Apple_Desktops&hash=item3cc5f0acb6'),
('300E5A 15.6" Essential Notebook', 2, 329.94, 'Yes', 'http://www.amazon.co.uk/Lenovo-Notebook-Pentium-Windows-Premium/dp/B0056PDKUQ/ref=sr_1_fkmr0_1?s\n=computers&ie=UTF8&qid=1336695497&sr=1-1-fkmr0'),
('300E5A 15.6" Essential Notebook', 5, 399.00, 'Yes', 'http://www.currys.co.uk/gbuk/samsung-series-3-300e5a-15-6-laptop-silver-11884730-pdt.html'),
('300E5A 15.6" Essential Notebook', 6, 499.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/samsung-series-3-np300e5a-15-6-laptop-silver-13212978-pdt.html'),
('300V4A 14.0" Essential Notebook" Essential Notebook', 5, 399.99, 'Yes', 'http://www.currys.co.uk/gbuk/samsung-300v5a-series-3-15-6-laptop-blue-11884724-pdt.html'),
('300V4A 14.0" Essential Notebook" Essential Notebook', 6, 429.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/samsung-series-3-np300v5a-a04dx-15-6-laptop-blue-11296515-pdt.html'),
('900X1B 11.6" Ultra Portable Notebook', 2, 783.60, 'Yes', 'http://www.amazon.co.uk/Samsung-900X1B-Laptop-Windows-Premium/dp/B005X4UA2Q/ref=\nsr_1_1?s=computers&ie=UTF8&qid=1336767293&sr=1-1'),
('ASHA201', 10, 99.00, 'Yes', 'http://www.ebay.com/ctg/Nokia-Asha-201-Graphite-Unlocked-Smartphone--/111037213?\n_refkw=ASHA201&_pcatid=801&_pcategid=9355&_from=R40&_dmpt=Cell_Phones'),
('ASHA201', 14, 57.90, 'Yes', 'http://www.ebuyer.com/340535-nokia-201-nokia-201-rm-799-cv-gb-graphite-a00004279'),
('ASHA300', 10, 124.70, 'Yes', 'http://www.ebay.com/ctg/Nokia-Asha-300-Graphite-Unlocked-Smartphone--/\n111040467?_refkw=ASHA300&_pcatid=801&_pcategid=9355&_from=R40&_dmpt=Cell_Phones'),
('ASHA300', 14, 88.11, 'Yes', 'http://www.ebuyer.com/341931-nokia-300-rm-781-cv-gb-graphite-a00004627'),
('c601', 2, 199.99, 'Yes', 'http://www.amazon.co.uk/Nokia-C6-01-Free-Mobile-Phone/dp/B004OBZQ9G/ref=sr_1_1?s=electronics&ie=UTF8&qid\n=1336232803&sr=1-1'),
('c601', 10, 180.00, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-C6-01-Silver-grey-Unlocked-Smartphone-/101800878?_dmpt=UK_Mobile_Phones&_pcategid\n=9355&_pcatid=810&_refkw=Nokia+C6-01&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003&_trksid=\np3286.c0.m14'),
('c700', 2, 218.99, 'Yes', 'http://www.amazon.co.uk/Nokia-Sim-Free-Mobile-Phone/dp/B0049MOF6A/ref=sr_1_1?ie=UTF8&qid=1336232406&sr=8-1'),
('c700', 10, 259.99, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-C7-00-8GB-Frosty-metal-Unlocked-Smartphone-/101797677?_dmpt=UK_Mobile_Phones\n&_pcategid=9355&_pcatid=810&_refkw=Nokia+C7&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003&_trksid\n=p3286.c0.m14'),
('ChaCha', 2, 133.30, 'Yes', 'http://www.amazon.co.uk/HTC-ChaCha-Free-Mobile-Phone/dp/B0050GXLAU/ref=sr_1_1?s\n=electronics&ie=UTF8&qid=1336250551&sr=1-1'),
('ChaCha', 10, 129.99, 'Yes', 'http://www.ebay.co.uk/ctg/HTC-ChaCha-Silver-Unlocked-Smartphone-/101819719?_dmpt\n=UK_Mobile_Phones&_npmv=3&_pcategid=9355&_pcatid=810&_refkw=ChaCha&_trkparms=65%\n253A12%257C66%253A2%257C39%253A1%257C72%253A6003&_trksid=p3286.c0.m14'),
('Desire S', 2, 233.14, 'Yes', 'http://www.amazon.co.uk/HTC-Desire-Free-Mobile-Phone/dp/B004NNU9YM/ref=sr_1_1?s=electronics&ie\n=UTF8&qid=1336234767&sr=1-1'),
('Desire S', 10, 234.99, 'Yes', 'http://www.ebay.co.uk/ctg/HTC-Desire-S-1-1GB-Black-Unlocked-Smartphone-/101882748?_dmpt=UK_Mobile\n_Phones&_npmv=3&_pcategid=9355&_pcatid=810&_refkw=Desire+S&_trkparms=65%253A12%257C66%253A2%257C39\n%253A1%257C72%253A6003&_trksid=p3286.c0.m14'),
('Desire Z', 2, 189.99, 'Yes', 'http://www.amazon.co.uk/HTC-Desire-Free-Mobile-Phone/dp/B003ZDP5YU/ref=sr_1_1?s=electronics&ie=\nUTF8&qid=1336248004&sr=1-1'),
('Desire Z', 10, 359.99, 'Yes', 'http://www.ebay.co.uk/ctg/HTC-Desire-Z-1-5GB-Grey-Unlocked-Smartphone-/102956752?_dmpt=UK_Mobile\n_Phones&_npmv=3&_pcategid=9355&_pcatid=810&_refkw=Desire+Z&_trkparms=65%253A12%257C66%253A2%257C39\n%253A1%257C72%253A6003&_trksid=p3286.c0.m14'),
('E500', 2, 139.99, 'Yes', 'http://www.amazon.co.uk/Nokia-E5-00-Free-Mobile-Phone/dp/B00422L0TW/ref=sr_1_1?ie=UTF8&qid=1336230167&sr=8-1'),
('E500', 10, 154.10, 'Yes', 'http://www.ebay.co.uk/itm/NEW-NOKIA-E5-3G-GPS-WIFI-FM-5MPix-LED-FLASH-TEXTER-QWERT-SMARTPH-/180815428207?\npt=Cell_Phones&hash=item2a19707a6f'),
('E600', 2, 245.00, 'Yes', 'http://www.amazon.co.uk/gp/aag/main?ie=UTF8&asin=B0053BGFYG&isAmazonFulfilled=0&isCBA=\n&marketplaceID=A1F83G8C2ARO7P&seller=A2MVWTK1H8F5F8'),
('E600', 10, 387.22, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-E6-00-8GB-Black-Unlocked-Smartphone-/102311954?_dmpt=UK_Mobile_Phones&_npmv\n=3&_pcategid=9355&_pcatid=810&_refkw=Nokia+E6-00&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%\n253A6003&_trksid=p3286.c0.m14'),
('E700', 10, 429.00, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-E7-00-16GB-Dark-grey-Unlocked-Smartphone-/102394170?_dmpt=UK_Mobile_Phones\n&_pcategid=9355&_pcatid=810&_refkw=nokia+E7&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003\n&_trksid=p3286.c0.m14'),
('E700', 14, 387.22, 'Yes', 'http://www.ebuyer.com/290945-e7-00-rm-626-uk-cv-dark-grey-in-002v9r7'),
('EVO 3D', 2, 279.00, 'Yes', 'http://www.amazon.co.uk/HTC-Evo-Sim-Free-Smartphone/dp/B0058FQL4Q/ref=sr_1_1?s=\nelectronics&ie=UTF8&qid=1336250038&sr=1-1'),
('EVO 3D', 10, 349.00, 'Yes', 'http://www.ebay.co.uk/ctg/HTC-EVO-3D-1GB-Black-Unlocked-Smartphone-/101823535?_dmpt\n=UK_Mobile_Phones&_pcategid=9355&_pcatid=810&_refkw=EVO+3D&_trkparms=65%253A12%257C66\n%253A2%257C39%253A1%257C72%253A6003&_trksid=p3286.c0.m14'),
('Explorer', 2, 99.99, 'Yes', 'http://www.amazon.co.uk/HTC-Explorer-Sim-Free-Smartphone/dp/B005JC48OS/ref=sr_1_1?s=\nelectronics&ie=UTF8&qid=1336249832&sr=1-1'),
('Explorer', 10, 105.91, 'Yes', 'http://www.ebay.co.uk/itm/HTC-Explorer-Android-Wi-Fi-3G-3-15-MP-Sim-Free-Unlocked-\nMobile-Phone-Black-/330694290685?pt=UK_Mobile_Phones&hash=item4cfeea6cfd'),
('HD7', 2, 299.89, 'Yes', 'http://www.amazon.co.uk/HTC-Windows-Unlocked-Mobile-Phone/dp/B0049NQE0O/ref=\nsr_1_1?s=electronics&ie=UTF8&qid=1336250684&sr=1-1'),
('HD7', 10, 256.97, 'Yes', 'http://www.ebay.co.uk/ctg/HTC-HD7-16GB-Black-O2-Smartphone-/111363911?_dmpt=\nUK_Mobile_Phones&_npmv=3&_pcategid=9355&_pcatid=810&_refkw=HD7&_trkparms=65%\n253A12%257C66%253A2%257C39%253A1%257C72%253A6003&_trksid=p3286.c0.m14'),
('HTC Desire HD', 2, 244.99, 'Yes', 'http://www.amazon.co.uk/HTC-Desire-Free-Mobile-Phone/dp/B003ZDP5YK/ref=sr_1_1?s=electronics&ie\n=UTF8&qid=1336234336&sr=1-1'),
('HTC Desire HD', 10, 230.00, 'Yes', 'http://www.ebay.co.uk/ctg/HTC-Desire-HD-1-5GB-Mocha-Unlocked-Smartphone-/101740741?_dmpt=\nUK_Mobile_Phones&_pcategid=9355&_pcatid=810&_refkw=HTC+Desire+HD&_trkparms=\n65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003&_trksid=p3286.c0.m14'),
('Incredible S', 2, 275.96, 'Yes', 'http://www.amazon.co.uk/HTC-Incredible-Free-Mobile-Phone/dp/B004NNW0O4/ref=sr_1_1?s\n=electronics&ie=UTF8&qid=1336250194&sr=1-1'),
('Incredible S', 10, 258.00, 'Yes', 'http://www.ebay.co.uk/ctg/HTC-Incredible-S-1-126MB-Black-Unlocked-Smartphone-/103127286\n?_dmpt=UK_Mobile_Phones&_npmv=3&_pcategid=9355&_pcatid=810&_refkw=Incredible+S&_trkparms\n=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003&_trksid=p3286.c0.m14'),
('INSP15A', 2, 450.00, 'Yes', 'http://www.amazon.co.uk/Dell-Inspiron-Touchscreen-Netbook-Windows/dp/B004VRONS8/ref\n=sr_1_2?ie=UTF8&qid=1336255641&sr=8-2'),
('INSP15A', 6, 598.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/dell-inspiron-one-2320-22-5-all-in-one-pc-11236941-pdt.html'),
('INSP15B', 5, 899.99, 'No', 'http://www.currys.co.uk/gbuk/sony-vpcj21l0e-b-cek-21-5-all-in-one-pc-09885808-pdt.html'),
('INSP15B', 6, 1199.99, 'No', 'http://www.pcworld.co.uk/gbuk/sony-vaio-vpcl22s1e-b-cek-24-all-in-one-pc-11290925-pdt.html'),
('INSP15C', 5, 1399.99, 'No', 'http://www.currys.co.uk/gbuk/asus-et2700ints-b036c-27-all-in-one-pc-11361487-pdt.html'),
('INSP15C', 6, 749.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/asus-et2410iuts-b030c-24-all-in-one-pc-11361554-pdt.html'),
('INSP15D', 2, 450.00, 'Yes', 'http://www.amazon.co.uk/Dell-Inspiron-Touchscreen-Netbook-Windows/dp/B004VRONS8/ref=sr_1_1?s=\ncomputers&ie=UTF8&qid=1336691590&sr=1-1'),
('INSP15R', 2, 749.99, 'Yes', 'http://www.amazon.co.uk/Dell-Inspiron-Q15R-15-6-640GB/dp/B005JCFH5M/ref=sr_1_1?\nie=UTF8&qid=1336690794&sr=8-1'),
('iPhone4', 2, 385.00, 'Yes', 'http://www.amazon.co.uk/Apple-iPhone-4/dp/B003TQ3NCY/ref=sr_1_1?ie=UTF8&qid=1336926189&sr=8-1'),
('iPhone4', 3, 454.00, 'Yes', 'http://www.play.com/Mobiles/Mobile/4-/15573497/Apple-iPhone-4-16GB-Sim-Free-5-0-Megapixel-Unlocked\n-Mobile-Phone-Black/Product.html?searchstring=iPhone4&searchsource=0&searchtype=allproducts&urlrefer=search'),
('iPhone4S', 2, 495.00, 'Yes', 'http://www.amazon.co.uk/Apple-iPhone-4S-Unlocked-White/dp/B005TVINRM/ref=sr_1_1?s=\nelectronics&ie=UTF8&qid=1336926661&sr=1-1'),
('LUMIA800', 2, 329.01, 'Yes', 'http://www.amazon.co.uk/Nokia-Lumia-Free-Windows-Smartphone/dp/B0065VOIB0/ref=sr_1_1?s=electronics&ie=UTF8&qid\n=1336233133&sr=1-1'),
('LUMIA800', 10, 309.99, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-Lumia-800-16GB-Black-Unlocked-Smartphone-/111027030?_dmpt=UK_Mobile_Phones&_npmv=\n3&_pcategid=9355&_pcatid=810&_refkw=nokia+LUMIA800&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003\n&_trksid=p3286.c0.m14'),
('LUMIA800', 14, 329.01, 'Yes', 'http://www.ebuyer.com/290160-nokia-lumia-800-black-002z541'),
('M71z All in one', 2, 662.85, 'Yes', 'http://www.amazon.co.uk/Lenovo-ThinkCentre-All-In-One-Desktop-Professional/dp/B0060F4P5A/ref\n=sr_1_5?s=computers&ie=UTF8&qid=1336769480&sr=1-5'),
('M71z All in one', 10, 299.99, 'Yes', 'http://www.ebay.co.uk/itm/Lenovo-ThinkCentre-M71z-All-In-One-PC-320GB-HDD-2GB-Ram-Intel-\nDual-Core-G620-/251031320480?pt=UK_Computing_DesktopPCs&hash=item3a72a1f7a0'),
('Moterola DEFY MINI', 2, 154.99, 'Yes', 'http://www.amazon.co.uk/Motorola-DEFY-Mini-Free-Smartphone/dp/B006Z37ZOU/ref=sr_1_sc_1?s=electronics&ie=\nUTF8&qid\n=1336233825&sr=1-1-spell'),
('Moterola DEFY MINI', 10, 155.79, 'Yes', 'http://www.ebay.co.uk/itm/Motorola-Defy-Mini-Sim-Free-Unlocked-Android-Mobile-Phone-XT320-Genuine-Boxed-\n/280857900388?pt=UK_Mobile_Phones&hash=item41646f7564'),
('MOTOLUXE', 2, 189.99, 'Yes', 'http://www.amazon.co.uk/Motorola-MOTOLUXE-Sim-Free-Smartphone/dp/B006Z3D29M/ref=sr_1_1?s=electronics&ie\n=UTF8&qid=1336234096&sr=1-1'),
('MOTOLUXE', 10, 149.99, 'Yes', 'http://www.ebay.co.uk/itm/Motorola-MOTOLUXE-Smartphone-/230782967513?pt=UK_Mobile_Phones&hash=\nitem35bbbc9ed9'),
('N800', 10, 209.95, 'Yes', 'http://www.ebay.co.uk/itm/Nokia-N8-16GB-Black-Unlocked-/270970400747?pt=UK_Mobile_Phones&hash=item3f17182feb'),
('N900', 10, 212.00, 'Yes', 'http://www.ebay.com/ctg/Nokia-N-Series-N900-32GB-Black-Unlocked-Smartphone--/\n99985605?_refkw=N900&_pcatid=801&_odkw=N900+mobile&_pcategid=9355&_osacat=0&_from=R40&_dmpt=Cell_Phones'),
('NOKIA500', 2, 124.99, 'Yes', 'http://www.amazon.co.uk/Nokia-500-Free-Mobile-Phone/dp/B005TOAMQY/ref=sr_1_1?ie=UTF8&qid=1334273623&sr=8-1'),
('NOKIA5228', 2, 119.99, 'Yes', 'http://www.amazon.co.uk/Nokia-5228-Smartphone-touch-Symbian/dp/B003TJO7F8/ref=sr_1_1?\nie=UTF8&qid=1335015114&sr=8-1'),
('NOKIA5230', 2, 124.00, 'Yes', 'http://www.amazon.com/Nokia-Unlocked-Touchscreen\n-NFC--U-S-Warranty/dp/B005MOW7NM/ref=sr_1_1?s=wireless&ie=UTF8&qid=1336214207&sr=1-1'),
('NOKIA5230', 10, 101.99, 'Yes', 'http://www.ebay.com/ctg/Nokia-5230-Nuron-Latest-Model-White-TMobile-Smartphone--/102661979?_refkw=\nNOKIA5230&_pcatid=801&_pcategid=9355&_from=R40&_dmpt=Cell_Phones'),
('NOKIA700', 2, 229.99, 'Yes', 'http://www.amazon.com/Nokia-Unlocked-Touchscreen-NFC--U-S-Warranty/\ndp/B005MOW7NM/ref=sr_1_1?s=wireless&ie=UTF8&qid=1336214207&sr=1-1'),
('NOKIA700', 10, 245.00, 'Yes', 'http://www.ebay.com/ctg/Nokia-700-Latest-Model-2GB-Cool-gray-Unlocked-Smartphone--/109494780?_refkw\n=NOKIA700&_pcatid=801&_pcategid=9355&_from=R40&_dmpt=Cell_Phones'),
('NOKIA700', 14, 237.55, 'Yes', 'http://www.ebuyer.com/290944-nokia-700-sim-free-unlocked-mobile-phone-cool-grey-002z1r0'),
('Notebook Series 9', 2, 1129.00, 'Yes', 'http://www.amazon.co.uk/Samsung-Series-NP900X3B-Windows-Premium/dp/B007PENK9C/ref=sr_1_1?s=\ncomputers&ie=UTF8&qid=1336695160&sr=1-1'),
('Notebook Series 9', 6, 1199.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/samsung-series-9-900x3b-13-3-ultrabook-black-12231248-pdt.html'),
('Notebook Series 9', 10, 1031.15, 'Yes', 'http://www.ebay.com/itm/Samsung-Series-9-Ultra-Thin-Notebook-PC-/320899542279?pt=Laptops_Nov05\n&hash=item4ab71a6d07'),
('Radar', 2, 239.99, 'Yes', 'http://www.amazon.co.uk/HTC-Radar-Free-Windows-Smartphone/dp/B005JC48NY/ref=sr_1_1?s=electronics&ie\n=UTF8&qid=1336249688&sr=1-1'),
('Rhyme', 2, 373.28, 'Yes', 'http://www.amazon.co.uk/HTC-Rhyme-Free-Android-Smartphone/dp/B005KP1MFM/ref=sr_1_6?s=electronics&\nie=UTF8&qid=1336249290&sr=1-6'),
('Rhyme', 10, 319.00, 'Yes', 'http://www.ebay.co.uk/itm/HTC-Rhyme-S510B-4GB-Plum-Unlocked-Smartphone-/251051793782?pt=UK_Mobile\n_Phones&hash=item3a73da5d76'),
('Series 5 Ultrabook', 2, 778.91, 'Yes', 'http://www.amazon.co.uk/Samsung-Series-Ultrabook-Windows-Premium/dp/B007G9G75U/ref=sr_1_2?\ns=computers&ie=UTF8&qid=1336694947&sr=1-2'),
('Series 5 Ultrabook', 5, 791.99, 'Yes', 'http://www.currys.co.uk/gbuk/samsung-series-5-np530u3b-a01uk-13-3-ultrabook-silver-12086456-pdt.html'),
('Series 5 Ultrabook', 6, 1199.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/samsung-series-9-900x3b-13-3-ultrabook-black-12231248-pdt.html'),
('Series 7 CHRONOS', 2, 953.11, 'Yes', 'http://www.amazon.co.uk/Samsung-Series-Bluetooth-Windows-Premium/dp/B0065O85UM/ref=\nsr_1_1?s=computers&ie=UTF8&qid=1336767072&sr=1-1'),
('Series 7 CHRONOS', 10, 899.99, 'Yes', 'http://www.ebay.com/itm/Samsung-Series-7-Chronos-Laptop-Notebook-700Z3A-S03-/\n140750590695?pt=Laptops_Nov05&hash=item20c56392e7'),
('Series 7 Gamer', 2, 1334.57, 'Yes', 'http://www.amazon.co.uk/Samsung-Series-Gamer-700G7A-Laptop/dp/B006TAKNB6/ref=sr_1_1?\nie=UTF8&qid=1336766874&sr=8-1'),
('Series 7 Gamer', 5, 791.33, 'Yes', 'http://www.currys.co.uk/gbuk/samsung-series-7-np700z5a-a01dx-15-6-laptop-11296512-pdt.html'),
('Series 7 Gamer', 6, 791.33, 'Yes', 'http://www.pcworld.co.uk/gbuk/samsung-series-7-np700z5a-a01dx-15-6-laptop-11296512-pdt.html'),
('ThinkCentre M90z', 16, 774.06, 'Yes', 'http://shop.lenovo.com/gbweb/gb/en/desktops/thinkcentre/m-series-all-in-one?cid=uk|semd|\nse|google|UK5079|ThinkCentre_M90z|IIP_NE_ThinkCentre_AIO|600017&'),
('ThinkCentre M91/M91p', 2, 806.72, 'Yes', 'http://www.amazon.co.uk/Lenovo-ThinkCentre-Desktop-Windows-Professional/dp/B005DKVFTW/ref\n=sr_1_2?s=computers&ie=UTF8&qid=1336768873&sr=1-2'),
('ThinkPad E420s', 2, 723.76, 'Yes', 'http://www.amazon.co.uk/LENOVO-NWD7SUK-ThinkPad-Notebook-Windows/dp/B006YMZS8W/ref=\nsr_1_4?s=computers&ie=UTF8&qid=1336767736&sr=1-4'),
('ThinkPad E525', 2, 459.99, 'Yes', 'http://www.amazon.co.uk/Lenovo-ThinkPad-Edge-E525-Laptop/dp/B005DKVFO2/ref=sr_1_1?s\n=computers&ie=UTF8&qid=1336767944&sr=1-1'),
('ThinkPad E525', 10, 344.97, 'Yes', 'http://www.ebay.co.uk/itm/Lenovo-ThinkPad-Edge-E525-Windows-7-Laptop-NZ63HUK-/\n160773710248?pt=UK_Computing_Laptops_EH&hash=item256edc21a8'),
('ThinkPad Edge E520', 2, 699.99, 'Yes', 'http://www.amazon.co.uk/Lenovo-Thinkpad-15-6-inch-i5-2410M-Professional/dp/B004WNAYFW/ref=\nsr_1_1?s=computers&ie=UTF8&qid=1336767443&sr=1-1'),
('ThinkPad Edge E520', 5, 549.99, 'Yes', 'http://www.currys.co.uk/gbuk/lenovo-thinkpad-edge-e520-15-6-laptop-11342052-pdt.html'),
('ThinkPad Edge E520', 6, 549.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/lenovo-thinkpad-edge-e520-15-6-laptop-11342052-pdt.html'),
('ThinkPad Edge E520', 10, 447.95, 'Yes', 'http://www.ebay.co.uk/itm/Lenovo-ThinkPad-Edge-E520-15-6-Core-i3-2350M-Win7-64-bit-\n4GB-RAM-/330723260096?pt=UK_Computing_Laptops_EH&hash=item4d00a476c0'),
('ThinkPad X1', 2, 1289.14, 'Yes', 'http://www.amazon.co.uk/Lenovo-Thinkpad-13-3-inch-i5-2520M-Professional/dp/B004WNAXHG/ref\n=sr_1_1?s=computers&ie=UTF8&qid=1336768403&sr=1-1'),
('ThinkPad X1', 10, 1039.98, 'Yes', 'http://www.ebay.co.uk/itm/Open-Box-Lenovo-ThinkPad-X1-Intel-Core-i5-2520M-Dual-Core-\nProcessor-4GB-RAM-/280877942787?pt=UK_Computing_Laptops_EH&hash=item4165a14803'),
('ThinkPad X121e Intel', 2, 420.55, 'Yes', 'http://www.amazon.co.uk/Lenovo-ThinkPad-Laptop-Windows-Professional/dp/B0063CV99U/\nref=sr_1_1?s=computers&ie=UTF8&qid=1336768246&sr=1-1'),
('ThinkPad X121e Intel', 10, 545.98, 'Yes', 'http://www.ebay.co.uk/itm/Lenovo-ThinkPad-X121e-Intel-Core-i3-2367M-Dual-Core-\nProcessor-320GB-HDD-Laptop-/110873665044?pt=UK_Computing_Laptops_EH&hash=item19d095de14'),
('ThinkPad X220', 2, 1275.00, 'Yes', 'http://www.amazon.co.uk/Thinkpad-CI3-2310M-2-1G-i5-2520M-Window-Professional/\ndp/B004WNAYFC/ref=sr_1_1?s=computers&ie=UTF8&qid=1336768132&sr=1-1'),
('TITAN', 2, 269.99, 'Yes', 'http://www.amazon.co.uk/HTC-TITAN-Free-Windows-Smartphone/dp/B005JC48OI/ref=sr_1_1?s=electronics&\nie=UTF8&qid=1336249058&sr=1-1'),
('Wildfire S', 2, 145.00, 'Yes', 'http://www.amazon.co.uk/HTC-Wildfire-Free-Mobile-Phone/dp/B004WBIDH0/ref=sr_1_1?s=\nelectronics&ie=UTF8&qid=1336250392&sr=1-1'),
('Wildfire S', 10, 144.99, 'Yes', 'http://www.ebay.co.uk/ctg/HTC-Wildfire-S-Black-Unlocked-Smartphone-/102956542?_dmpt\n=UK_Mobile_Phones&_npmv=3&_pcategid=9355&_pcatid=810&_refkw=Wildfire+S&_trkparms=\n65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003&_trksid=p3286.c0.m14'),
('x200', 2, 79.99, 'Yes', 'http://www.amazon.co.uk/Nokia-X2-00-Free-Mobile-Phone/dp/B004FLL7NO/ref=sr_1_1?s=electronics&ie=\nUTF8&qid=1336231449&sr=1-1'),
('x200', 10, 77.95, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-X2-Black-red-Unlocked-Mobile-Phone-/103110371?_dmpt=UK_Mobile_Phones&_npmv=\n3&_pcategid=9355&_pcatid=810&_refkw=Nokia+X2-00&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003&\n_trksid=p3286.c0.m14'),
('x300', 2, 109.99, 'Yes', 'http://www.amazon.co.uk/Nokia-X3-Free-Mobile-Phone/dp/B00383DJ9K/ref=sr_1_1?s=electronics&ie\n=UTF8&qid=1336231161&sr=1-1'),
('x300', 10, 129.99, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-X3-00-Black-red-Unlocked-Mobile-Phone-/100013091?_dmpt=UK_Mobile_Phones&_npmv=\n3&_pcategid=9355&_pcatid=810&_refkw=Nokia+X3-00&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003\n&_trksid=p3286.c0.m14'),
('x302', 2, 109.99, 'Yes', 'http://www.amazon.co.uk/Nokia-X3-02-Free-Mobile-Phone/dp/B004OBZQ9Q/ref=sr_1_1?s=electronics&ie\n=UTF8&qid=1336230907&sr=1-1'),
('x302', 10, 119.99, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-X3-02-Dark-Metal-Unlocked-Mobile-Phone-/102562012?_dmpt=UK_Mobile_Phones&_npmv=\n3&_pcategid=9355&_pcatid=810&_refkw=Nokia+X3-02&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003\n&_trksid=p3286.c0.m14'),
('x700', 2, 270.42, 'Yes', 'http://www.amazon.co.uk/Nokia-mobile-phone-sim-free-unbranded/dp/B0050HJMFC/ref=\nsr_1_1?s=electronics&ie=UTF8&qid=1336230786&sr=1-1'),
('x700', 10, 324.99, 'Yes', 'http://www.ebay.co.uk/ctg/Nokia-X7-00-Steel-black-Unlocked-Smartphone-/102358495?_dmpt=UK_Mobile_Phones&_\npcategid=9355&_pcatid=810&_refkw=nokia+x7&_trkparms=65%253A12%257C66%253A2%257C39%253A1%257C72%253A6003&\n_trksid=p3286.c0.m14'),
('XPS15A', 2, 700.00, 'Yes', 'http://www.amazon.co.uk/Dell-L502X-I7-2630QM-Windows-Premium/dp/B005MHMEH8/ref=\nsr_1_4?s=computers&ie=UTF8&qid=1336691005&sr=1-4'),
('XPS15A', 5, 599.99, 'Yes', 'http://www.currys.co.uk/gbuk/dell-xps-15z-refurbished-15-6-laptop-silver-11284377-pdt.html'),
('XPS15A', 6, 749.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/dell-xps-l502x-refurbished-15-6-laptop-aluminium-10991840-pdt.html'),
('XPS17A', 2, 1110.00, 'Yes', 'http://www.amazon.co.uk/Dell-NX7M06UKEN-Channel-i7-2670QM-Professional/dp/B007DH9NFG/ref=sr_1_7?s\n=computers&ie=UTF8&qid=1336691331&sr=1-7'),
('XPS17A', 5, 1229.99, 'Yes', 'http://www.currys.co.uk/gbuk/dell-xps-l702x-refurbished-17-3-laptop-aluminium-11102604-pdt.html'),
('XPS17A', 6, 1229.99, 'Yes', 'http://www.pcworld.co.uk/gbuk/dell-xps-l702x-refurbished-17-3-laptop-aluminium-11102604-pdt.html');

-- --------------------------------------------------------

--
-- 表的结构 `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `password` char(40) NOT NULL,
  `securityquestion` varchar(40) NOT NULL,
  `securityquestionanswer` varchar(20) NOT NULL,
  `supervisorstaffid` int(10) unsigned NOT NULL,
  `position` varchar(15) NOT NULL,
  `salary` float(6,1) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `address` varchar(35) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`staffid`),
  KEY `supervisorstaffid` (`supervisorstaffid`),
  KEY `lname` (`lname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `staff`
--

INSERT INTO `staff` (`staffid`, `fname`, `lname`, `password`, `securityquestion`, `securityquestionanswer`, `supervisorstaffid`, `position`, `salary`, `e_mail`, `address`, `gender`) VALUES
(1, 'Atkinson', 'Katie', 'cc7550b35ed886be8222b5ff04cc601a6a4fa15b', 'which is my favourite football team', 'liverpool', 1000, 'staff', 20000.0, 'K.Atkinson@liv.ac.uk', 'd01 211london road, liverpool', 'male'),
(2, 'Ball', 'Caroline', '35eb8e445e70519374a9ad13217fde1a2bc7a1d3', 'my favourite food', 'cake', 2000, 'staff', 20000.0, 'Cball@liv.ac.uk', 'd02 211london road, liverpool', 'male'),
(3, 'Bench', 'Trevor', '45459112c92dbcf3a2a3ca5f2b61e115f87789a8', 'the name of my best friend', 'Atkinson Katie', 3000, 'manager', 40000.0, 'tbc@liv.ac.uk', 'd03 211london road, liverpool', 'female'),
(4, 'Kenneth', 'Chan', 'b04c85737acdfb6b4d9741ca761d694fc041bd44', 'my favourite film', 'titanic', 4000, 'staff', 20000.0, 'Kenneth@liv.ac.uk', 'd04 211london road, liverpool', 'male'),
(5, 'Giorgios', 'Christodoulou', '41115ca0bb3d9c5ce6daf11fb5dd14b2d724ccd6', 'the name of my high school teacher', 'David', 5000, 'staff', 20000.0, 'Giorgios@liv.ac.uk', 'd05 211london road, liverpool', 'male');

-- --------------------------------------------------------

--
-- 表的结构 `staffphone`
--

CREATE TABLE IF NOT EXISTS `staffphone` (
  `phoneno` varchar(13) NOT NULL,
  `staffid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`phoneno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `staffphone`
--

INSERT INTO `staffphone` (`phoneno`, `staffid`) VALUES
('+445721920749', 2),
('+447721920759', 1),
('+447722486768', 3),
('07721920755', 2),
('07721920758', 1);

-- --------------------------------------------------------

--
-- 表的结构 `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplierid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `suppliername` varchar(15) NOT NULL,
  `password` char(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `e_mail` varchar(35) NOT NULL,
  `securityquestion` varchar(40) NOT NULL,
  `securityquestionanswer` varchar(20) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`supplierid`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `supplier`
--

INSERT INTO `supplier` (`supplierid`, `suppliername`, `password`, `address`, `e_mail`, `securityquestion`, `securityquestionanswer`, `rating`) VALUES
(1, 'Argos', '25957d65bc10d161b4d3671eec7eac46d4df7fff', 'www.argos.co.uk', 'Argos@hotmail.com', 'The name of company', 'Argos', 4),
(2, 'Amazon', '550fc8bc72f3a9e870bd2bbfa77c6edbe5d51969', 'www.amazon.co.uk', 'Amazon@hotmail.com', 'The name of company', 'Amazon', 4),
(3, 'Play', '72ed3fc4e2f18a8879ef7766d673534f2fb63b61', 'www.play.com', 'Play@hotmail.com', 'The name of company', 'Play', 4),
(4, 'Johnlewis', '9dbd5a9e216041ea927442bd77026aabadc3ef7f', 'www.johnlewis.com', 'Johnlewis@hotmail.com', 'The name of company', 'Johnlewis', 4),
(5, 'Currys', '54ade9934311164e0d8d7b097c610a1a639311a6', 'www.currys.co.uk', 'Currys@hotmail.com', 'The name of company', 'Currys', 3),
(6, 'Pcworld', '000f7ac63d1675a6f05d2ebbcf2771ebfc97920a', 'www.pcworld.co.uk', 'Pcworld@hotmail.com', 'The name of company', 'Pcworld', 3),
(7, 'Comet', 'b0dfc18bba0dab4cb13a06be0414a363dd902b4e', 'www.comet.co.uk', 'Comet@hotmail.com', 'The name of company', 'Comet', 4),
(8, 'Dixons', '7e75198f335240b0754f3d41025b889d593db1d3', 'www.dixons.co.uk', 'Dixons@hotmail.com', 'The name of company', 'Dixons', 3),
(9, 'Viking', '9207c460a43e9f3c94a24a8d0b57a8f0ab12772d', 'www.viking-direct.co.uk', 'Viking@hotmail.com', 'The name of company', 'Viking', 4),
(10, 'eBay-e_cell', 'db42477df6e4530883fb4c1ed02cd24e929d2c18', 'compare.ebay.co.uk', 'eBay-e_cell@hotmail.com', 'The name of company', 'eBay', 5),
(11, 'Laskys', 'fcb63c36895b733e27474b69889be2111f2bd7a5', 'www.laskys.com', 'Laskys@hotmail.com', 'The name of company', 'Laskys', 4),
(12, 'BTshop', '6700ac836cee58071b9d997d546f7f9471829bb0', 'www.shop.bt.com', 'BTshop@hotmail.com', 'The name of company', 'BTshop', 4),
(13, 'Saverstore', 'd683c166a9eeed7b9f185abb59d2ecb2b0c9a8bb', 'www.saverstore.com', 'Saverstore@hotmail.com', 'The name of company', 'Saverstore', 4),
(14, 'Ebuyer', 'b888ffd2e9905ff26829c463c8c17230709eff7f', 'www.ebuyer.com', 'Ebuyer@hotmail.com', 'The name of company', 'Ebuyer', 5),
(15, 'Lambda-tek', '87ec205648c593452541e8156f99d2f8bcefec17', 'www.lambda-tek.com', 'Lambda-tek@hotmail.com', 'The name of company', 'Lambda-tek', 4),
(16, 'lenovo', '97509149df2026b563ab254354474ae797e84d75', 'shop.lenovo.com', 'lenovo@gmail.com', 'The name of company', 'lenovo', 4);

-- --------------------------------------------------------

--
-- 表的结构 `suppliertelephone`
--

CREATE TABLE IF NOT EXISTS `suppliertelephone` (
  `telno` char(11) NOT NULL,
  `supplierid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`telno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `suppliertelephone`
--

INSERT INTO `suppliertelephone` (`telno`, `supplierid`) VALUES
('03722486768', 3),
('05728928749', 2),
('07721727758', 1),
('07789019241', 1),
('07791930755', 2);

-- --------------------------------------------------------

--
-- 表的结构 `web`
--

CREATE TABLE IF NOT EXISTS `web` (
  `ipaddress` varchar(16) NOT NULL,
  `webname` varchar(20) NOT NULL,
  PRIMARY KEY (`ipaddress`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `zipcodeaddress`
--

CREATE TABLE IF NOT EXISTS `zipcodeaddress` (
  `zipcode` varchar(12) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `street` varchar(30) NOT NULL,
  PRIMARY KEY (`zipcode`),
  KEY `country` (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `zipcodeaddress`
--

INSERT INTO `zipcodeaddress` (`zipcode`, `nation`, `country`, `city`, `street`) VALUES
('L3 8JD', 'UK', 'England', 'Liverpool', '211 London Road'),
('OR 97117', 'USA', 'America', 'Portland', '89 Redmond Rd'),
('OR 97201', 'USA', 'America', 'Portland', '22 W.Capital Way'),
('WA 98105', 'USA', 'America', 'Seattle', '57-11th Avenue'),
('WA 98117', 'USA', 'America', 'Seattle', '123 Suffolk Lane');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
