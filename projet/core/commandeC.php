<?PHP
session_start();
include "../config.php";
class CommandeC
{
	function AjouterCommande($Commande){
		$sql="insert into commande(nom_produit,prix,quantite,total,user_name) values (:nom_produit,:prix,:quantite,:total,:user_name)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        
        $nom_produit=$Commande->getnom_produit();
        $prix=$Commande->getprix();
        $quantite=$Commande->getquantite();
        $total=$Commande->gettotal();
        $user_name= $_SESSION['l'];
            
        $req->bindValue(':user_name',$user_name);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue('prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':total',$total);
		$req->execute();  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherCommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande order by id_commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCommande($id_commande){
		$sql="DELETE FROM commande where id_commande= :id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCommande($Commande,$id_commande){
		$sql="UPDATE commande SET nom_produit=:nom_produit,prix=:prix,quantite=:quantite,total=:total WHERE id_commande=:id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		echo $sql;
try{		
        $req=$db->prepare($sql);
		//$IDD=$Commande->getid_commande();
        $nom_produit=$Commande->getnom_produit();
        $prix=$Commande->getprix();
        $quantite=$Commande->getquantite();
        $total=$Commande->gettotal();
        //$IDD--;
        $req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue('prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':total',$total);
        $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }

    }
	function recupererCommande($id_commande){
		$sql="SELECT * from Commande where id_commande=$id_commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}



