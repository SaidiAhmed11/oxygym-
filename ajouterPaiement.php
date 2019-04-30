<?PHP
session_start();
include "../entities/paiement.php";
include "../core/paiementC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['type_paiement']) and isset($_POST['pays']) and isset($_POST['num_carte']) and isset($_POST['date_exp']) and isset($_POST['Code_sec']) and isset($_POST['adresse']) and isset($_POST['code_postal']) and isset($_POST['num_tel']))
{

    $paiement1=new Paiement($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['type_paiement'],$_POST['pays'],$_POST['num_carte'],$_POST['date_exp'],$_POST['Code_sec'],$_POST['adresse'],$_POST['code_postal'],$_POST['num_tel']);
$paiement1C=new PaiementC();
$paiement1C->ajouterPaiement($paiement1);
//header('Location: afficherPaiement.php');
	
}
else{
	echo "vérifier les champs";
}


?>