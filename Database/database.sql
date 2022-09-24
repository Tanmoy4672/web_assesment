create database mid;

use mid;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100),
  `filename` varchar(100),
  PRIMARY KEY  (`id`)
);