CREATE TABLE `viewtest11` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(45) NULL DEFAULT NULL,
	`city` VARCHAR(45) NULL DEFAULT NULL,
	`test` VARCHAR(45) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
CREATE TABLE `viewtest12` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(45) NULL DEFAULT NULL,
	`city` VARCHAR(45) NULL DEFAULT NULL,
	`test` VARCHAR(45) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
CREATE  PROCEDURE `proteen1554`()
begin
        select * from child;
end