<?php
session_start();
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
    <link href="./assets/css/cs.style.css" rel="stylesheet" type="text/css" media="all">
</head>
<?PHP
include "../core/commandeC.php";
include "../entities/commande.php";
//include "../config.php";
    $db = new PDO('mysql:host=localhost;dbname=oxygym++', 'root', '');
    
    //$listeCommandes= $db->querry("SELECT * from commande");
if(isset($_GET['id_commande']) AND !empty($GET_['id_commande']))
   {
   //$id_commande= htmlspecialchars($GET_['id_commande']);
    $commandeC=new CommandeC();
    $result=$commandeC->rechercherListeCommande($_GET['id_commande']);
    var_dump($result);
    
    //$listeCommandes= $db->querry('SELECT * from commande where id_commande LIKE "%'.$id_commande.'%" ');

   }

//var_dump($listeEmployes->fetchAll());
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
                <a class="navbar-brand" href="back.php">Oxygym +</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="./logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                 <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="back.php"><i class="fa fa-dashboard fa-3x"></i> Inscription </a>
                    </li>
                     <li>
                        <a  href="activite.html"><i class="fa fa-desktop fa-3x"></i> Activité</a>
                    </li>
                    <li>
                        <a  href="produits.html"><i class="fa fa-qrcode fa-3x"></i> Produits </a>
                    </li>
						   <li  >
                        <a  class="active-menu" href="commandeetpanier.php"><i class="fa fa-bar-chart-o fa-3x"></i> Commandes & Panier </a>
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
                       <h5>Welcome <?php echo $_SESSION['l'];?> </h5> 
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                        <div class="top-search">
						<form id="header-search" class="search-form"  method="get">
							<input type="hidden" name="type" value="product">
							<input type="text" class="input-block-level" name="id_commande" value="" accesskey="4" autocomplete="off" placeholder="search commande by user">
							<button type="submit" class="search-submit" title="Search">
								<i class="fa fa-search"></i>
							</button>
						</form>
					</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" border="1">
                                    <br> 
                                    <br> 
<tr>
<td>id commande</td>
<td>Nom Produit</td>
<td>prix</td>
<td>quantite</td>
<td>prix total</td>
<td>user name</td>
</tr>

                                
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


<?PHP
     
    $commandeC=new CommandeC();
    $result=$commandeC->rechercherListeCommande($_GET['id_commande']);
foreach($result as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_commande']; ?></td>
    <td><?PHP echo $row['nom_produit']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['total']; ?></td>
    <td><?PHP echo $row['user_name']; ?></td>
    
    <td><form method="POST" action="supprimerCommande.php">
	<button type="submit" name="supprimer" value="supprimer" class="btn btn-danger"><i class="fa fa-pencil"></i> Supprimer</button>
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
</html>