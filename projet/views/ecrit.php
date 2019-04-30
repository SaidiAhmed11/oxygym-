<?php
session_start();
$write = fopen('facture.txt', "w");
$data=""; 
foreach($_SESSION['panier'] as $keys => $values)
{
    
    $data = $values["item_nom"]. ';' . $values["item_prix"]. ';' . $values["item_quantite"]. ';' . $values["item_prix"] ;
    $write = fopen('facture.txt', "a+");
    fputs($write,$data);
    fputs($write,"\n");
    echo $data;
    
}
?>