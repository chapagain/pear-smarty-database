
CREATE DATABASE test;

CREATE TABLE `basic` (
  `id` int(9) NOT NULL auto_increment,
  `firstname` varchar(50) default NULL,
  `lastname` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
);

INSERT INTO `basic` VALUES (1,'ram','sharma'),(2,'sita','sharma'),(3,'krishna','thapa'),(4,'meera','thapa'),(5,'shiva','shrestha'),(6,'parvati','shrestha'),(7,'bishnu','jha'),(8,'laxmi','jha'),(9,'maya','agrawal'),(10,'prem','agrawal'),(11,'tom','hanks'),(12,'norah','jones'),(13,'angelina','jolie'),(14,'brad','pitt');

