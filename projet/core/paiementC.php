<?PHP
include "../config.php";
class PaiementC {
    
    
function ajouterPaiement($Paiement){
		$sql="insert into paiement (nom,prenom,mail,type_paiement,pays,num_carte,date_exp,code_sec,adresse,code_postal,num_tel) values (:nom,:prenom,:email,:type_paiement,:pays,:num_carte,:date_exp,:Code_sec,:adresse,:code_postal,:num_tel)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $nom=$Paiement->getnom();
        $prenom=$Paiement->getprenom();
        $email=$Paiement->getemail();
        $type_paiement=$Paiement->gettypepaiement();
        $pays=$Paiement->getpays();
        $num_carte=$Paiement->getnumcarte();
        $date_exp=$Paiement->getdate_exp();
        $Code_sec=$Paiement->getcodesec();
        $adresse=$Paiement->getadresse();
        $code_postal=$Paiement->getcodepostal();
        $num_tel=$Paiement->getnumtel();
            
            
        
        $req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':type_paiement',$type_paiement);
        $req->bindValue(':pays',$pays);
		$req->bindValue(':num_carte',$num_carte);
		$req->bindValue(':date_exp',$date_exp);
		$req->bindValue(':Code_sec',$Code_sec);
		$req->bindValue(':adresse',$adresse);
        $req->bindValue(':code_postal',$code_postal);
		$req->bindValue(':num_tel',$num_tel);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
    
    function afficherPaiement(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From paiement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    
    
    function supprimerPaiement($id_paiement){
		$sql="DELETE FROM paiement where id_paiement= :id_paiement";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_paiement',$id_paiement);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
    
    function modifierPaiement($Paiement,$id_paiement){
		$sql="UPDATE paiement SET nom=:nom,prenom=:prenom,mail=:email,type_paiement=:type_paiement,pays=:pays,num_carte=:num_carte,date_exp=:date_exp,code_sec=:Code_sec,adresse=:adresse,code_postal=:code_postal,num_tel=:num_tel WHERE id_paiement=:id_paiement";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        
        
		$nom=$Paiement->getnom();
        $prenom=$Paiement->getprenom();
        $email=$Paiement->getemail();
        $type_paiement=$Paiement->gettypepaiement();
        $pays=$Paiement->getpays();
        $num_carte=$Paiement->getnumcarte();
        $date_exp=$Paiement->getdate_exp();
        $Code_sec=$Paiement->getcodesec();
        $adresse=$Paiement->getadresse();
        $code_postal=$Paiement->getcodepostal();
        $num_tel=$Paiement->getnumtel();
    
		$datas = array(':nom'=>$nom,':prenom'=>$prenom,':mail'=>$email,':type_paiement'=>$type_paiement,':pays'=>$pays,':num_carte'=>$num_carte,':date_exp'=>$date_exp,':code_sec'=>$Code_sec,':adresse'=>$adresse,':code_postal'=>$code_postal,':num_tel'=>$num_tel);
        $req->bindValue(':id_paiement',$id_paiement);
	    $req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':type_paiement',$type_paiement);
        $req->bindValue(':pays',$pays);
		$req->bindValue(':num_carte',$num_carte);
		$req->bindValue(':date_exp',$date_exp);
		$req->bindValue(':Code_sec',$Code_sec);
		$req->bindValue(':adresse',$adresse);
        $req->bindValue(':code_postal',$code_postal);
		$req->bindValue(':num_tel',$num_tel);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
    
    
    
    function recupererPaiement($id_paiement){
		$sql="SELECT * from paiement where id_paiement=$id_paiement";
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
?>



