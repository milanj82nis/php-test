<?php require_once 'config.inc.php';


if(isset($_SESSION['logged'])){
session_destroy();
header('Location:index.php');
die();	
	}









?>
