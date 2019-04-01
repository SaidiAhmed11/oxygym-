<?PHP
class Commande
{
    private $id_commande;
    private $nom_produit;
    private $prix;
    private $quantite;
    private $total;

  
  function __construct($nom_produit,$prix,$quantite,$total)
  {
    $this->nom_produit=$nom_produit;
    $this->prix=$prix;
    $this->quantite=$quantite;
    $this->total=$quantite*$prix;
    

  }
  public function getid_commande()
  {
    return $this->id_commande;
  }
  public function getnom_produit()
  {
    return $this->nom_produit;
  }
  public function getprix()
  {
    return $this->prix;
  }
  public function getquantite()
  {
    return $this->quantite;
  }
  public function gettotal()
  {
    return $this->total;
  }
  public function setID($ID)
  {
    return $this->ID=$ID;
  }

  public function setnom_produit($nom_produit)
  {
    return $this->nom_produit=$nom_produit;
  }
  public function setprix($prix)
  {
    return $this->prix=$prix;
  }
  public function setquantite($quantite)
  {
    return $this->quantite=$quantite;
  }
  public function updatetotal($total)
  {
    return $this->total=$total;
  }
}
?>