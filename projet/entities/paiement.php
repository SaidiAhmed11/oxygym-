<?PHP
class Paiement
{
    private $id_paiement;
    private $nom;
	private $prenom;
    private $adresse;
	private $pays;
	private $email;
	private $code_postal;
	private $num_tel;
	private $num_carte;
	private $code_sec;
	private $date_exp;
	private $type_paiement;
	function __construct($nom,$prenom,$email,$type_paiement,$pays,$num_carte,$date_exp,$code_sec,$adresse,$code_postal,$num_tel)
  {
    
   
    $this->nom=$nom;
	$this->prenom=$prenom;
    $this->adresse=$adresse;
	$this->pays=$pays;
	$this->email=$email;
	$this->code_postal=$code_postal;
	$this->num_tel=$num_tel;
	$this->num_carte=$num_carte;
	$this->code_sec=$code_sec;
	$this->date_exp=$date_exp;
	$this->type_paiement=$type_paiement;
  }
  public function getid_paiement()
  {
    return $this->id_paiement;
  }
  public function getnom()
  {
    return $this->nom;
  }
  public function getprenom()
  {
    return $this->prenom;
  }
  public function getpays()
  {
    return $this->pays;
  }
    public function getemail()
  {
    return $this->email;
  }  
    public function getadresse()
  {
    return $this->adresse;
  } 
    
    public function getcodepostal()
  {
    return $this->code_postal;
  }
      public function getnumtel()
  {
    return $this->num_tel;
  }
    
    public function getnumcarte()
  {
    return $this->num_carte;
  }
    
     public function getcodesec()
  {
    return $this->code_sec;
  }
    
     public function getdate_exp()
  {
    return $this->date_exp;
  }
    
     public function gettypepaiement()
  {
    return $this->type_paiement;
  } 
    
    
    
    function setid_paiement($id_paiement){
		$this->id_paiement=$id_paiement;
	}

    function setPrenom($prenom){
		$this->prenom;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setadresse($adresse){
		$this->adresse=$adresse;
	}
    function setpays($pays){
		$this->pays=$pays;
	}
    function setemail($email){
		$this->email=$email;
	}
    function setcode_postal($code_postal){
		$this->code_postal=$code_postal;
	} 
    function setnum_tel($num_tel){
		$this->num_tel=$num_tel;
	} 
    function setnum_carte($num_carte){
		$this->num_carte=$num_carte;
	} 
    function setcode_sec($code_sec){
		$this->code_sec=$code_sec;
	}
    function setdate_exp($date_exp){
		$this->date_exp=$date_exp;
	}
    function settype_paiement($type_paiement){
		$this->type_paiement=$type_paiement;
	}
    
}
?>