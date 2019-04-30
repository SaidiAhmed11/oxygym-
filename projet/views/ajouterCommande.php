<?PHP
session_start();
include "../entities/commande.php";
include "../core/commandeC.php";
//echo "quantiti= ".$_POST['quantite'];
//echo "test= ".$_POST['quantite'][0];
//echo "test1= ".$_POST['quantite'][1];
$count = count($_SESSION['panier']);
for ($i=0 ; $i<$count ; $i++) {
    //echo "test1= ".$_POST['quantite'][$i];

$Commande=new Commande($_POST['nom_produit'][$i],$_POST['prix'][$i],$_POST['quantite'][$i],$_POST['total'][$i]);
$CommandeController=new CommandeC();
$CommandeController->AjouterCommande($Commande);
}
header('Location: ../views/AjouterPaiements.php');

?>