<?php 
include 'dbconfig.php';
class Panier{	
	public function __construct()
	{
		if(!isset($_SESSION))
        {
            
            session_start();
        }
        if(!isset($_SESSION['panier']))
        {
            $_SESSION['panier'] = array();
        }
		
	}
	

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from users where user_name='$login' && user_pass='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>