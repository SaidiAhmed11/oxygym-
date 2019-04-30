<?php
include "../core/produitC.php";
session_start();


if(isset($_GET['id']))
{
     if(isset($_SESSION['panier']))
        {
            $item_array_id = array_column($_SESSION['panier'], "item_id");
         if(!array($_GET["id"], $item_array_id))
         {
             
              $count = count($_SESSION['panier']);
             $item_array = array(
            'item_id'     => $_GET["id"],
            'item_nom'    => $_POST["nom"],
            'item_poids'  => $_POST["poids"],
            'item_saveur' => $_POST["saveur"],
            'item_prix'   => $_POST["prix"],
            'item_quantite'=> $_POST["quantite"]
          );
             $_SESSION['panier'] [$count] = $item_array;
             
         }
         else {
             
             echo '<script> alert("produit déja en panier , vous pouvez accéder a votre panier pour modifier la quantité") </script> '; 
             echo '<script> window.location="index.php" </script> ';
            
         }
         
        }
    else
    {
        $item_array = array(
            'item_id'     => $_GET["id"],
            'item_nom'    => $_POST["nom"],
            'item_poids'  => $_POST["poids"],
            'item_saveur' => $_POST["saveur"],
            'item_prix'   => $_POST["prix"],
            'item_quantite'=> $_POST["quantite"]
          );
        $_SESSION['panier'] [0] = $item_array;
        
    }
}

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project</title>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link href="assets/css/cs.global.css" rel="stylesheet" type="text/css" media="all">
  <link href="assets/css/cs.style.css" rel="stylesheet" type="text/css" media="all">
  <link href="assets/css/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
      
      <link href="css/products.css" rel="stylesheet">     
        
        <link rel="stylesheet" href="css/animate.css">  

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Oxygym++ <hr> </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            
             
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#Products">Produits</a>
              </li>
                 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Inscription">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#Recrutement">Recrutement</a>
              </li> <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#SAV">SAV</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#panier">Panier</a>
                </li> 
              
              <?php
              if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="./logout.php">logout</a>
                </li>';
              }
              else {
                  echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#login">login</a>
                </li>';
              }
              ?>
              
          </ul>
        </div>
      </div>
    </nav>
     

    <!-- Header -->
    <header class="masthead">
        <br>
        <br>
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            
          <h1 class="mx-auto my-0 text-uppercase">Oxygym++</h1>
            <br>
            
          <h2 class="text-white-50 mx-auto mt-2 mb-12">Premier espace de Fitness et achat des produits sportifs en Tunisie </h2>
            <br>
            
          <a href="#about" class="btn btn-primary js-scroll-trigger">start your journey</a>
        </div>
      </div>
    </header>
      
       <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Enjoy the difference</h2>
                <h3 class="text-white mb-4">Bienvenue à OXYGYM++</h3>
            <p class="text-white-50">Join our community
              <a href="../template/formulaire/form.html">here </a></p>
          </div>
        </div>
           
      </div>
    </section>
<br>

    <!-- Panier Section -->
    <section id="panier" class="about-section text-center">
     <div id="col-main" >
            <div id="page-header">
               <center><h4 id="page-title" class="text-white">Shopping Cart</h4></center>
            </div>
            <form name="cartform" action="ajouterCommande.php" method="post" id="cartform" class="clearfix">
              <div class="row-fluid">
                <div class="wrap-table">
                  <table class="cart-items haft-border">
                    <colgroup>
                      <col class="checkout-image">
                      <col class="checkout-info">
                      <col class="checkout-price">
                      <col class="checkout-quantity">
                      <col class="checkout-totals">
                      <col class="checkout-delete">
                    </colgroup>
                    <thead>
                      <tr class="top-labels">
                        <th></th>
                        <th class="text-left">Product name</th>
                        <th>Unit Price</th>
                        <th class="qty">Qty</th>
                        <th>SubTotal</th>
                        <th></th>
                      </tr>
                    </thead>
                      <?php
                      
                      if(!empty($_SESSION['panier']))
                            {
                                $total=0;
                                foreach($_SESSION['panier'] as $keys => $values)
                                {
                           
                      ?>
                      
                      
                    <tbody>
                      <tr class="item curabitur-mattis-tellus-rutrum-enim-facilisis">
                        <td>
                          <img src="./screen/demos/demo_60x85.png" alt="Curabitur mattis tellus rutrum enim facilisis">
                        </td>
                        <td class="title">
                            <a class="link" href="#"> </a>
                            <span class="block">Curabitur mattis tellus rutrum enim facilisis</span>
                            <input type="hidden" name="nom_produit" value="Curabitur "></input>
                            <span class="variant_title">Ferrari / Modern</span>
                        </td>
                        <td class="title-1"><span class="text-white">€59.00</span></td>
                        <input type="hidden" name="prix" value="59.00"></input>
                        <td class="qty">
                          <input class="form-control input-1" type="number" maxlength="5" size="5" id="updates_455695609" name="quantite" value="1">
                        </td>
                        <td class="total title-1"><span class="text-white">59.00</span></td>
                        <input type="hidden" name="total" value="59.00"></input>
                        <td class="action">
                          <button class="btn-7 btooltip" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i>
                          </button>
                        </td>
                      </tr>
                      <tr class="item nam-at-lectus-eget-mi-vista-hendrerit-tincidunt">
                        <td>
                          <img src="./screen/demos/demo_60x85.png" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                        </td>
                        <td class="title">
                          <a class="link" href="./product.html">
                            <span class="block">Nam at lectus eget mi vista hendrerit tincidunt</span>
                            <input type="hidden" name="productName1" value="am at lectus eget mi vista hendrerit tincidunt"></input>
                          </a>
                        </td>
                        <td class="title-1"><span class="text-white">€59.00</span></td>
                        <input type="hidden" name="unitPrice1" value="€59.00"></input>
                        <td class="qty">
                          <input class="form-control input-1" type="number" maxlength="5" size="5" id="updates_455695573" name="quantity1" value="1">
                        </td>
                        <td class="total title-1"><span class="text-white">€59.00</span></td>
                        <input type="hidden" name="subTotal1" value="€59.00"></input>
                        <td class="action">
                          <button class="btn-7 btooltip" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr class="bottom-summary">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="update-quantities">
                          <button type="submit" id="update-cart" class="btn btn-1" name="update">Update Qty</button>
                        </td>
                        <td class="subtotal title-1"><span class="text-white">€118.00</span></td>
                        <td>&nbsp;</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="row-fluid">
                <div id="checkout-proceed" class="last1 text-right">


                  <button class="btn btn-2 large" type="submit" id="update-cart" name="checkout"  > Paiement <i class="fa fa-chevron-right"></i></button>
                  
                </div>
              </div>
<?php } ?>
<?php } ?>
</form>
    
<script>
	$(document).ready(function(){
	  $('#slippry-slider').slippry(
		defaults = {
			transition: 'vertical',
			useCSS: true,
			speed: 5000,
			pause: 3000,
			initSingle: false,
			auto: true,
			preload: 'visible',
			pager: false,		
		} 
	  
	  )
	});
</script>
    </section>



    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Commande</h4>
              <p class="text-black-50 mb-0">Passer votre commande et demander une livraison</p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Produits</h4>
                  <p class="mb-0 text-white-50">achat en ligne.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Activité</h4>
                  <p class="mb-0 text-white-50">Suivez notre programme ou  .</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>





    <!-- Signup Section -->
    <section id="login" class="signup-section">
      <div class="container">
       <div class="app">
	
	
	<form id="form1" name="form1" method="POST" action="connexion.php">
		<h2 class="text-white">Login</h2>
	
		<input type="text" name="login" id="login" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" />
        <br>
		<input type="password" name="pwd" id="pwd" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" />
        <br>
		<button class="btn btn-primary mx-auto" type="submit" name="button" id="button" value="Valider">
		<i class="fa fa-lock"></i>
		Login
	</button>
		<p class="text-white">Forgot your password?</p>
	</form>
           
           
           
	<h2 class="text-white">Or</h2>
	<form>
		<h2 class="text-white">Sign Up</h2>
		<input id="name" type="text" placeholder="first name"  class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0">
        <br>
		<input id="lname" type="text" placeholder="last name"  class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0">
        <br>
		<input id="email" type="text" placeholder="email address"  class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0">
        <br>
		<input id="password" type="password" placeholder="password"  class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0">
        <br>
		<button for="signup"  class="btn btn-primary mx-auto">
		<i class="fa fa-user-plus"></i>
		Create Account
	</button>
		<p class="text-white">Already a Member?</p>
	</form>
</div>
      </div>
        <script src="js/main.js"></script>
    </section>







<!-- product section -->
  <?php
$prod = new ProduitC();
$list = $prod->afficherProduits();
?>

<section id="Products" class="signup-section">
  
      <div class="container">
 <div class="col-md-12"><h1 class="text-center wow pulse"><span class="text-white">  <strong> Our Products </strong> </span> </h1>
    			 

     
                <div class="speciality wow fadeIn" data-wow-delay="0.6s">

                    <?php
	                    foreach ( $list as $row ) {
		                    
		             ?>
                    
                    <div class="spe-prods">
					<div class="mainbox">
						<h3><a><?php echo $row["Nom"] ?></a></h3>
                        <h3><a><?php echo $row["Poids"] ?></a>Kg</h3>
                        <h3><a><?php echo $row["Saveur"] ?></a></h3>
					</div>
					<div class="price-big">
						<div>
							<div class="floatting-price">
								<h3><a><?php echo $row["Prix"] ?></a></h3>
							</div>
							<div class="month">
								<p>dt</p>
							</div>
						</div>
                        <?php
                         if (isset($_SESSION['l']) && isset($_SESSION['p'])) {
                             ?>
                    <a>  Quantité <input class="form-control input-1" type="number" maxlength="5" size="5" id="updates_455695609" name="quantite" value="1"> </a> 
                        <input  type="hidden" name="nom" value="<?php echo $row["Nom"] ?>">
                        <input  type="hidden" name="poids" value="<?php echo $row["Poids"] ?>">
                        <input  type="hidden" name="saveur" value="<?php echo $row["Saveur"] ?>">
                        <input  type="hidden" name="prix" value="<?php echo $row["Prix"] ?>">
						<div class="ordersection">
								<a href="index.php?id=<?PHP echo $row['id_produit']; ?>" class="buybtn" value="addcart">Add to Cart</a>
						</div>
                        <?php 
                         }
                            ?>
					</div>
				</div>
                       <?php
	                    }
                    ?>

              </div> 
    
           </div>   
      </div>
        <script src="js/main.js"></script>
    </section>








    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

         <!--  <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">Ariana,Tunisia</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">vixens2a8@gmail.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">+216 23 567 004</div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="social d-flex justify-content-center">
          <a href="https://twitter.com/GGa_x?https:/twitter.com/CCa_Q&gclid=Cj0KCQjw77TbBRDtARIsAC4l83lJqtZ9Td_t8x0wCBETujUc-Onb_EXMdaV9XJ9cjRtDbtC9M8fIDgEaAh-PEALw_wcB" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/oxygymplusfitness/" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

          </div> </div>
    </section> 

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
