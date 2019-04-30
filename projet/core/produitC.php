<?PHP
include "../config.php";
/*------------------------ Les fonctions -------------------*/  
class ProduitC { 
    
/*----------------fonction afficher ---------------------*/    
function afficherProduit ($produit)
{
		
		echo "reference: ".$produit->getReference()."<br>";
		echo "nom: ".$produit->getNom()."<br>";
        echo "poids:".$produit->getPoids()."<br>"; 
		echo "saveur: ".$produit->getSaveur()."<br>";
		echo "prix: ".$produit->getPrix()."<br>"; 
        echo "type: ".$produit->getType()."<br>";
        echo "stock: ".$produit->getStock()."<br>";
        echo "expir: ".$produit->getExpir()."<br>";
        echo "produit: ".$produit->getProduit()."<br>";

}
      
 
/*----------------fonction : ajouter employer ----------------------*/    
	function ajouterProduit($produitproduit)
    {
        
		/*requete sql : */ 
		$sql="insert into produit (Reference,Nom,Poids,Saveur,Prix,Type,Expiration,Produit) values (:reference,:nom,:poids,:saveur,:prix,:type,:expir,:produit)";
		$db = config::getConnexion();
		try
        {
        $req=$db->prepare($sql); 
         
        
        $refe=$produitproduit->getReference();
        $nom=$produitproduit->getNom();
        $poids=$produitproduit->getPoids();    
        $saveur=$produitproduit->getSaveur();
        $prix=$produitproduit->getPrix();
        $type=$produitproduit->getType();
    /*     $stock=$produitproduit->getStock();     */ 
        $expir=$produitproduit->getExpir();  
          $produit=$produitproduit->getProduit();      
		
		
		$req->bindValue(':reference',$refe);
		$req->bindValue(':nom',$nom);
        $req->bindValue(':poids',$poids);    
		$req->bindValue(':saveur',$saveur);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':type',$type);
       /*   $req->bindValue(':stock',$stock); */ 
         $req->bindValue(':expir',$expir);
            $req->bindValue(':produit',$produit);


        $req->execute();   
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
	}



        function getProduitByID($reference) {

        $sql = "SElECT * From produit where Reference=".$reference;
        $db = Config::getConnexion();
        try{
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
        } catch ( Exception $e ) {
            die( 'Erreur: ' . $e->getMessage() );
        }
    }
       function getElementByDate($expir) {

        $sql = "SElECT * From produit where Expiration=".$expir;
        $db = Config::getConnexion();
        try{
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
        } catch ( Exception $e ) {
            die( 'Erreur: ' . $e->getMessage() );
        }
    }





        function likeProduct($idu,$idp){

        // opreparation d'une requete
        $query = "insert into favoris(id_user,id_produit) values($idu,$idp)";

        /// execution d'une reqquete sql
        $db  = config::getConnexion();
        $req = $db->prepare( $query );
        try {
            $req->execute();
            return true;
        } catch ( Exception $e ) {
            return $e->getMessage() ;
        }

    }

    function dislikeProduct($idu,$idp){

        // opreparation d'une requete
        $query = "Delete from favoris where id_user = $idu and id_produit = $idp";

        /// execution d'une reqquete sql
        $db  = config::getConnexion();
        $req = $db->prepare( $query );
        try {
            $req->execute();
            return true;
        } catch ( Exception $e ) {
            return $e->getMessage() ;
        }

    }

    function isLikedProduct($idu,$idp){

        // opreparation d'une requete
        $query = "select * from favoris where id_user = $idu and id_produit = $idp";
        /// execution d'une reqquete sql
        $db  = config::getConnexion();
        $list = $db->query( $query );
        if($list->rowCount()>0)
            return true;
        else
            return false;

    }

	/*--------------fonction: afficher employe--------------------*/
    
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function afficherProduitsselect($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where id_produit = $id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    
    /*-------------------------------supprimer employe-------------------------------*/
	function supprimerProduit($reference){
        $sql="DELETE FROM produit where Reference= :reference";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':reference',$reference);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    /*------------------------modifier employe----------------*/
	function modifierProduit($produit,$reference){
    $sql="UPDATE produit SET  Nom=:nom,Poids=:poids,Saveur=:saveur,Prix=:prix,Type=:type ,Expiration=:expir ,Produit=:produit,Stock=:stock WHERE reference=:reference";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{        
        $req=$db->prepare($sql);
        
        
        $nom=$produit->getNom();
        $poids=$produit->getPoids();    
        $saveur=$produit->getSaveur();
        $prix=$produit->getPrix();
        $type=$produit->getType(); 
       $stock=$produit->getStock(); 
         $expir=$produit->getExpir()  ; 
           $produit=$produit->getProduit()  ; 

      /*  $req->bindValue(':referencee',$referencee);*/
        $req->bindValue(':reference',$reference);
        $req->bindValue(':nom',$nom);
        
        $req->bindValue(':poids',$poids);    
        $req->bindValue(':saveur',$saveur);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':type',$type);
         
         $req->bindValue(':expir',$expir);
          $req->bindValue(':produit',$produit);
          $req->bindValue(':stock',$stock);

  
        $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
        
    }
    
    
    /*------------------------fonction recuperer employer----------------*/
	function recupererProduit($reference){
		$sql="SELECT * from produit where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





function afficheProduits($choix)
    {
        
        $db = config::getConnexion();

        if ($choix=="Expiration")
        {    
        $sql="SElECT * From produit";
    
        }
        if ($choix=="Nom") 
        {
        $sql="SElECT * From produit order by Nom";
    
        }
        if ($choix=="Poids") 
        {
        $sql="SElECT * From produit order by Poids ";
        }
            
        try
        {
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }




function rechercherProduit($produit,$date_1,$date_2){
        $sql="SELECT * from produit where  Produit='$produit'    AND Expiration  between '$date_1' AND '$date_2'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        
        }






    /*------------------------fonction rechercher employer----------------*/
    function rechercherListeProduit($reference){
        $sql="SELECT * from produit where Reference='$reference'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }}

?>