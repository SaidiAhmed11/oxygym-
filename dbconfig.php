<?php
class Database
{   
   
   public function connexion()
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO('mysql:host=localhost;dbname=oxygym++', 'root', '');
		return $conn;
	}
}
?>