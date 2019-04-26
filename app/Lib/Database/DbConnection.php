<?php  

$dbn = 'mysql://hostname=localhost;dbname=students';
$username = 'root';
$password = 'root';
$connection = null;
try{
	$connection = new PDO( $dbn,$username,$password,array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8',
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	));
}catch(PDOException $e){
	echo $e->getmessage();
}