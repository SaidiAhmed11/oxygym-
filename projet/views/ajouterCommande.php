<?PHP

include "../entities/commande.php";
include "../core/commandeC.php";
echo "quantiti= ".$_POST['quantite'];
$Commande=new Commande($_POST['nom_produit'],$_POST['prix'],$_POST['quantite'],$_POST['total']);
$CommandeController=new CommandeC();
$CommandeController->AjouterCommande($Commande);
header('Location: ../views/AjouterPaiement.html');

?>