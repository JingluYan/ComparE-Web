-- --------------------------------------------------------

--
-- ???? `computer`
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
-- ??????? `computer`
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
-- ???? `mobile`
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
-- ??????? `mobile`
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