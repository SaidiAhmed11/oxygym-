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
</head>
<?PHP
include "../core/paiementC.php";
$paiement1C=new PaiementC();
$listePaiments=$paiement1C->afficherPaiement();

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
font-size: 16px;"> &nbsp; <a href="./logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                               <a href="commandeetpanier.php"> <a  class="active-menu" href="commandeetpanier.html"><i class="fa fa-bar-chart-o fa-3x"></i> Commandes & Panier </a> </a>
                               <ul class="nav nav-second-level">
                            <li>
                                <a href="afficherCommande.php">Gérer les Commandes </a>
                            </li>
                            <li>
                                <a href="afficherPaiement.php">Gérer les Paiements</a>
                            </li>
                                   <li>
                                <a href="stat.php">Stat Paiements</a>
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

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" border="1">
                                    <tr>
                                        <td>idpaiement</td>
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

                                
                        </div>
                            
                                
                        </div>
                            <form> 
        <select name="sortBy"> 
            <option value="nom">Nom</option>
            <option value="prenom">Prenom</option> 
        </select> 
        <button type="submit" formaction="?" formmethod="post">Trier</button> 
    </form>
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
    <button type="submit" name="supprimer" value="supprimer" class="btn btn-danger"><i class="fa fa-pencil"></i> Supprimer</button>
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
</html>