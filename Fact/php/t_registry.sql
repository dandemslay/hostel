CREATE TABLE `hostel-reg`.`t_registry` (
`id` INT NOT NULL AUTO_INCREMENT,
`datetime` DATETIME NOT NULL,
`num` INT NOT NULL,
`identification` VARCHAR(15) NOT NULL,
`client_fname` VARCHAR(45) NOT NULL,
`client_lname` VARCHAR(45) NOT NULL,
`room` VARCHAR(5) NOT NULL,
`amount` DECIMAL(2) NOT NULL,
`commments` VARCHAR(500) NOT NULL,
PRIMARY KEY (`id`));

Select id,datetime,num,identification,client_fname,client_lname,room,amount,commments hostel-reg`.`t_registry;