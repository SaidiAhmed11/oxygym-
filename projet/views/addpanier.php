<?php 
include "../core/produitC.php";
include 'panier.php';
$c=new Database();
$conn=$c->connexion();
$panier=new Panier();
$prod = new ProduitC();


if(isset($_GET['id']))
{
     $id = $_GET["id"];
     $list = $prod->afficherProduitsselect($id);
}
else {
    die("vous n'avez pas ajouter un produit");
}


?>