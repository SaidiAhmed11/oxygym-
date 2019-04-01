<?PHP
include "../core/CommandeC.php";
$CommandeController=new CommandeC();
if (isset($_POST["id_commande"])){
	$CommandeController->supprimerCommande($_POST["id_commande"]);
	header('Location: afficherCommande.php');
}

?>