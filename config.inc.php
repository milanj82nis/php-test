<?php
session_start();
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
$config['db_host']					= 'localhost';
$config['db_name']					= 'quantox';
$config['db_user']					= 'root';
$config['db_password']				= '';



foreach ($config as $value => $param ){
define ( strtoupper($value) , $param) ;	
}

try {
	
$db = new PDO ('mysql:host='.DB_HOST.';dbname='.DB_NAME.'' , DB_USER , DB_PASSWORD);
$db -> setAttribute ( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );	
	
	
	
}
catch ( PDOException $exception ){
echo $exception -> getMessage();	
}
date_default_timezone_set("Europe/Belgrade");
$query = $db -> query ( 'set names utf8 ' );


?>

