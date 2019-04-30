<?PHP
include "../core/paiementC.php";
$paiement1C=new PaiementC();
$listePaiments=$paiement1C->afficherPaiement();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id_paiement</td>
<td>Nom</td>
<td>Prenom</td>
<td>mail</td>
<td>type_paiement</td>
<td>pays</td>
<td>num carte</td>
<td>date expirations</td>
<td>code de sécurité</td>
<td>adreese</td>
<td>code postal</td>
<td>num tel</td>
    
</tr>

<?PHP
foreach($listePaiments as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_paiement']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['type_paiement']; ?></td>
    <td><?PHP echo $row['pays']; ?></td>
	<td><?PHP echo $row['num_carte']; ?></td>
	<td><?PHP echo $row['date_exp']; ?></td>
	<td><?PHP echo $row['code_sec']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
    <td><?PHP echo $row['code_postal']; ?></td>
    <td><?PHP echo $row['num_tel']; ?></td>
    <td><form method="POST" action="supprimerPaiement.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_paiement']; ?>" name="id_paiement">
	</form>
	</td>
	<td><a href="modifierPaiement.php?id_paiement=<?PHP echo $row['id_paiement']; ?>">
	Modifier</a></td>
	</tr>

	<?PHP
}
?>
</table>