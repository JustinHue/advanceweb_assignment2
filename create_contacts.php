CREATE TABLE `contacts` (
`id` int(4) NOT NULL auto_increment,
`contact_name` varchar(65) NOT NULL default '',
`contact_number` varchar(65) NOT NULL default '',
`address` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
);


-- 
-- Dumping data for table `members`
-- 

INSERT INTO `contacts` VALUES (1, 'Tom Tsiliopoulos', '1-705-555-5555', '5555 Tsiliopoulos Street');

