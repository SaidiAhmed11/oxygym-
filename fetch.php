<?php
session_start();
include "../config.php";


if(isset($_POST['view']))
{
    $db = config::getConnexion();
    $output = (string) "";
    $name = $_SESSION['l'];
    
    if(!empty($_POST['view']))
    {
         //$db->insert("UPDATE paiement SET status = 1 WHERE status=0");
        	$sql="UPDATE paiement SET status = 1 WHERE status=0";
		
	
		echo $sql;
try{		
        $req=$db->prepare($sql);
        $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
       
    }
    $query = $db->query("SELECT id_paiement,nom,prenom FROM paiement WHERE user_name = '$name'");
$result = $query->fetchAll();

if(count($result) > 0)
{
 foreach($result as $row) 
 {
   $output .= '
   <li>
   <a href="#">
   Paiement :<strong>'.$row["id_paiement"].'</strong> Effectué <br />
   <small><em>'.$row["nom"].'</em></small>
   <small><em>'.$row["prenom"].'</em></small>
   </a>
   </li>
   ';

 }
}
else
{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
    
    $status_query = $db->query("SELECT nom,prenom FROM paiement WHERE status = 0 AND user_name = '$name'");
     //array(0, $_SESSION['l']));
$result_query = $status_query->fetchAll();
$count = count($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}
    
?>