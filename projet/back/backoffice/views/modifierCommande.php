<HTML>
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
    
    <html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Oxygym +</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                 <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="index.html"><i class="fa fa-dashboard fa-3x"></i> Inscription </a>
                    </li>
                     <li>
                        <a  href="activite.html"><i class="fa fa-desktop fa-3x"></i> Activité</a>
                    </li>
                    <li>
                        <a  href="produits.html"><i class="fa fa-qrcode fa-3x"></i> Produits </a>
                    </li>
						   <li  >
                        <a  class="active-menu" href="commandeetpanier.html"><i class="fa fa-bar-chart-o fa-3x"></i> Commandes & Panier </a>
                               <ul class="nav nav-second-level">
                            <li>
                                <a href="afficherCommande.php">Gérer les Commandes </a>
                            </li>
                            <li>
                                <a href="afficherPaiement.php">Gérer les Paiements</a>
                            </li>
                               </ul>
                    </li>	
                      <li  >
                        <a  href="employers.html"><i class="fa fa-table fa-3x"></i> Employers </a>
                    </li>
                    <li  >
                        <a  href="sav.html"><i class="fa fa-edit fa-3x"></i> Services Aprés vente </a>
                    </li>				
					
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Commande et Panier </h2>   
                        <h5>Welcome Saidi Ahmed </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

                        <div class="panel-body">
                            <div class="table-responsive">
                                <form method="POST" >
    <table>
      <caption>Modifier Commande</caption>
      <tr>
        <td>id commande</td>
        <td><input class="form-control" disabled type="number" name="id_commande" value=<?PHP echo '"'.$id_commande.'"' ?>></td>
      </tr>
      <tr>
        <td> nom du produit </td>
        <td><input class="form-control" type="text" name="nom_produit" value="<?PHP echo $nom_produit ?>"></td>
      </tr>
      <tr>
        <td>  Prix </td>
        <td><input class="form-control"  type="text" name="prix" value="<?PHP echo $prix ?>"></td>
      </tr>
      <tr>
        <td>Quantite</td>
        <td><input class="form-control" type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
      </tr>
      <tr>
        <td>Prix Total </td>
        <td><input class="form-control" disabled type="text" name="total" value="<?PHP echo $total ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input class="btn btn-default" type="submit" name="modifier" value="modifier"></td>
        <td><input  type="reset" class="btn btn-primary" name="reset" value="Reset" ></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="hidden" name="id_commande_ini" value="<?PHP echo $_GET['id_commande'];?>"></td>
      </tr>
    </table>
  </form>
                                
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                 
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

    

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