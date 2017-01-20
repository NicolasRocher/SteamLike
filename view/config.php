<?php

$host = 'localhost';
$db = 'Database_SteamLike';
$user = 'root';
$pass = 'root';


try{
	$db = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch(Exception $e)
{
	echo 'Erreur : '.$e->getMessage().'<br />';
	echo 'N° : '.$e->getCode();
}
