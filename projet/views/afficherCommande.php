<?PHP
include "../core/commandeC.php";
$commande1C=new CommandeC();
$listeCommandes=$commande1C->afficherCommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id commande</td>
<td>Nom Produit</td>
<td>prix</td>
<td>quantite</td>
<td>prix total</td>
</tr>

<?PHP
foreach($listeCommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_commande']; ?></td>
	<td><?PHP echo $row['nom_produit']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['total']; ?></td>
    
    <td><form method="POST" action="supprimerCommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="id_commande">
	</form>
	</td>
	<td><a href="modifierCommande.php?id_commande=<?PHP echo $row['id_commande']; ?>">
	Modifier</a></td>
	</tr>

	<?PHP
}
?>
</table>