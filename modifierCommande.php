<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['id_commande'])){
	$commandeC=new CommandeC();
    $result=$commandeC->recupererCommande($_GET['id_commande']);
	foreach($result as $row){

     $id_commande=$row['id_commande']; 
	 $nom_produit=$row['nom_produit']; 
	 $prix=$row['prix']; 
     $quantite=$row['quantite']; 
	 $total=$row['total']; 
     
?>
<form method="POST" >
    <table>
      <caption>Modifier Commande</caption>
      <tr>
        <td>id commande</td>
        <td><input disabled type="number" name="id_commande" value=<?PHP echo '"'.$id_commande.'"' ?>></td>
      </tr>
      <tr>
        <td> nom du produit </td>
        <td><input type="text" name="nom_produit" value="<?PHP echo $nom_produit ?>"></td>
      </tr>
      <tr>
        <td>  Prix </td>
        <td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
      </tr>
      <tr>
        <td>Quantite</td>
        <td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
      </tr>
      <tr>
        <td>Prix Total </td>
        <td><input disabled type="text" name="total" value="<?PHP echo $total ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="modifier" value="modifier"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="hidden" name="id_commande_ini" value="<?PHP echo $_GET['id_commande'];?>"></td>
      </tr>
    </table>
  </form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new Commande($_POST['nom_produit'],$_POST['prix'],$_POST['quantite'],$_POST['total']);
	$commandeC->modifierCommande($commande,$_POST['id_commande_ini']);
	echo $_POST['id_commande_ini'];
	header('Location: afficherCommande.php');
}
?>
</body>
</HTMl>