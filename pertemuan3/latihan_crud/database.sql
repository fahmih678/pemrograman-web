/* Create Database and Table */
create database elektro_store;
 
use elektro_store;
 
CREATE TABLE `customers` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `phone` varchar(15),
  `created` DATETIME NULL DEFAULT NULL,
  `updated` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY  (`id`)
);