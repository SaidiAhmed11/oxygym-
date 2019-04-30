<?php 
include 'dbconfig.php';
class Panier{	
	public function __construct()
	{
		if(!isset($_SESSION))
        {
            
           
        }
        if(!isset($_SESSION['panier']))
        {
            
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