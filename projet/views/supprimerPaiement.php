<?PHP
include "../core/paiementC.php";
$paiementC=new PaiementC();
if (isset($_POST["id_paiement"])){
	$paiementC->supprimerPaiement($_POST["id_paiement"]);
	header('Location: afficherPaiement.php');
}

?>