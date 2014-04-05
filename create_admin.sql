CREATE TABLE `admin` (
`id` int(4) NOT NULL auto_increment,
`username` varchar(65) NOT NULL default '',
`password` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
);

-- 
-- Dumping data for table `members`
-- 

INSERT INTO `admin` VALUES (1, 'justin', 'hellsten');
INSERT INTO `admin` VALUES (2, 'tom', 'tsiliopoulos');
