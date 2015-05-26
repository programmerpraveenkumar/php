<?php
$file ='sql.sql';
if(file_exists($file)){
$SQL_file = file_get_contents($file);	
}
$local= 'localhost';
$user = 'root';
$pass= '';
$db= 'test';
//$mysql = new mysqli($local,$user,'',$db`);
$db = new PDO("mysql:host=$local;dbname=$db", $user, $pass);
if($stmt = $db->prepare($SQL_file)){
	if($stmt->execute()){
		echo 'executed';	
	}
	else{
		echo 'some error '.$mysql->error;
	}
}
//echo $SQL_file;
?>
<!-- CREATE TABLE `viewtest2` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(45) NULL DEFAULT NULL,
	`city` VARCHAR(45) NULL DEFAULT NULL,
	`test` VARCHAR(45) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
 -->