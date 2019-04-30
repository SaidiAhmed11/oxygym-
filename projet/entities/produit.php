<?PHP
/*--------------Declaration de la classe : --------------*/
class Produit
{
    /*Declaration des variables */
 
	
	private $reference;
    private $nom;
    private $poids;
	private $saveur;
    private $prix;
    private $type; 
  
    private $expir ; 
    private $Produit ; 
      private $stock; 


    
    /*------------------Constructeur----------*/
	function __construct($reference,$nom,$poid,$sav,$pri,$typ,$ex,$produit,$stoc){
		 
		
		$this->reference=$reference;
        $this->nom=$nom;
        $this->poids=$poid;
		$this->saveur=$sav;
        $this->prix=$pri;
        $this->type=$typ;
         
         $this->expir=$ex ;
           $this->produit=$produit ; 
           $this->stock=$stoc;
	}
	  /*---------- Getters -----------------------*/
	
	function getReference(){
		return $this->reference;
	}

    function getNom(){
        return $this->nom;
    }
    function getPoids() 
    {
        return $this->poids; 
    }
	function getSaveur(){
		return $this->saveur;
	}
    function getPrix() 
    {
        return $this->prix;
    }
    function getType() 
    {
        return $this->type; 
    }
   
    function getExpir() 
    {
        return $this->expir; 
    }
     function getProduit() 
    {
        return $this->produit; 
    }
     function getStock() 
    {
        return $this->stock ; 
    }
    /*-------------Setters-----------------*/
   
	
	function setReference($reference){
		$this->reference=$reference;
	}
    function setNom($nom)
    {
        $this->nom=$nom;
    }
    function setPoids($poids) 
    {
        $this->poids=$poids;
    }
	function setSaveur($saveur){
		$this->saveur=$saveur;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
    function setType($type){
		$this->type=$type;
	}
   
	function setExpir($expir)
    {
        $this->expir=$expir; 
    }
	
    function setProduit($produit)
    {
        $this->produit=$produit; 
    }
     function setStock($stock)
    {
        $this->stock=$stock; 
    }
}

?>