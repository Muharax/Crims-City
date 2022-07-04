<?php

$config = require_once 'db-config.php';

try{
	
	$db = new PDO("mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8", $config['db_user'], $config['db_password'], [
	
		PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //SQL INJ
		
		]);
		
	} catch (PDOException $error){
	// echo $error->getMessage(); - SPRAWDZANIE BŁĘDÓW (JAKI BŁAD, co jest źle)
	exit('Database error');
	}
	
?>