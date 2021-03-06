<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Project</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>

  <body>
    <script src="js/verification.js">
    </script>
   
   <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Oxygym++ <hr> </a>
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
                <a class="nav-link js-scroll-trigger" href="index.php#Products">Produits</a>
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
                  <a class="nav-link js-scroll-trigger" href="index.php#panier">Panier</a>
                </li>
               <?php
              if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
                echo '<ul class="nav-item">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> Notifications </a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>';
                  echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="./logout1.php">logout</a>
                </li>';
              }
              else {
                  echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="index.php#login">login</a>
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
      </header>
      <br>
      <br>
      <form name="f1" action="test.php" method="POST" id="facture_form" >
        
      <input type="submit" name="generate_pdf" class="btn btn-success" value=" voir la facture" />  
                    
      </form> 
    <form name="f" method="POST" id="ajout_form">
 <fieldset>
			<div > 
                <br> 
                <br> 
                <br> 
                <br> 
               <center> <p style="text-align: center"> Payer ce Commande  </p> </center>
   
                
                <table style="margin-top: 15px;">
                    <tr>
                        <td><label> Nom : </label> </td> 
                        <td> <input type="text" name="nom" id="nom" placeholder="Entrer Votre nom" value="<?php echo $_SESSION['l'];?>" onblur="verifNom(this)" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> </td>
                    </tr>
               <tr> 
                   <td> 
                       <label> Prenom : </label>
                   </td>
                   <td>
                       <input type="text" name="prenom" id="prenomn" onblur="verifPrenom(this)" placeholder="Entrer Votre prenom" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                   </td>
                </tr>
                  <tr>
                        <td><label> E-Mail : </label> </td> <td> <input type="email" name="email" onblur="verifEmail(this)" placeholder="Nom.Prenom@gmail.com" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> </td>
                    </tr>
               <tr> 
                   <td> 
                       <label> Type de paiement : </label>
                   </td>
                    </tr>
                 <tr>
                  <td>
                       <input type="radio" name="type_paiement" value="visa" onblur="verifTypePaiement(this)" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                   </td>
                        <td>
                        <img src="img/visa.png" alt="visa" width="40" height="40"/>
                        </td>
                        
                         <td>
                       <input type="radio" name="type_paiement" value="mastercard" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                        </td>
                        <td>
                        <img src="img/mastercard.png" alt="masterCard" width="40" height="30"/>
                        </td>
                        
                          
                </tr>
                    <tr>
                    
                     <td>
                       <input type="radio" name="type_paiement" value="edinar" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                           </td>
                        <td>
                       <label></label> <img src="img/E-dinar.jpg" alt="Edinar" width="40" height="30"/>
                        </td>
                         
                     <td>
                       <input type="radio" name="type_paiement" value="carteBancaire" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                           </td>
                        <td>
                        <img src="img/Carte%20Bancaire.jpg" alt="CarteBancaire" width="40" height="30"/>
                        </td>
                  </tr>  
                    
                      <tr>
                        <td>
                            <label>     Pays : </label>
                          </td> 
                          <td>
           <select name="pays" onblur="verifPays(this)" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                    <option value="0" selected disabled> … </option>
                    <option value="Afghanistan" >Afghanistan </option>
                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                    <option value="Afrique_du_sud">Afrique_du_Sud </option> 
                    <option value="Albanie">Albanie </option>
                    <option value="Algerie">Algerie </option>
                    <option value="Allemagne">Allemagne </option>
                    <option value="Andorre">Andorre </option>
                    <option value="Angola">Angola </option>
                    <option value="Anguilla">Anguilla </option>
                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                    <option value="Argentine">Argentine </option>
                    <option value="Armenie">Armenie </option> 
                    <option value="Australie">Australie </option>
                    <option value="Autriche">Autriche </option>
                    <option value="Azerbaidjan">Azerbaidjan </option>

                    <option value="Bahamas">Bahamas </option>
                    <option value="Bangladesh">Bangladesh </option>
                    <option value="Barbade">Barbade </option>
                    <option value="Bahrein">Bahrein </option>
                    <option value="Belgique">Belgique </option>
                    <option value="Belize">Belize </option>
                    <option value="Benin">Benin </option>
                    <option value="Bermudes">Bermudes </option>
                    <option value="Bielorussie">Bielorussie </option>
                    <option value="Bolivie">Bolivie </option>
                    <option value="Botswana">Botswana </option>
                    <option value="Bhoutan">Bhoutan </option>
                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                    <option value="Bresil">Bresil </option>
                    <option value="Brunei">Brunei </option>
                    <option value="Bulgarie">Bulgarie </option>
                    <option value="Burkina_Faso">Burkina_Faso </option>
                    <option value="Burundi">Burundi </option>

                    <option value="Caiman">Caiman </option>
                    <option value="Cambodge">Cambodge </option>
                    <option value="Cameroun">Cameroun </option>
                    <option value="Canada">Canada </option>
                    <option value="Canaries">Canaries </option>
                    <option value="Cap_vert">Cap_Vert </option>
                    <option value="Chili">Chili </option>
                    <option value="Chine">Chine </option> 
                    <option value="Chypre">Chypre </option> 
                    <option value="Colombie">Colombie </option>
                    <option value="Comores">Colombie </option>
                    <option value="Congo">Congo </option>
                    <option value="Congo_democratique">Congo_democratique </option>
                    <option value="Cook">Cook </option>
                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                    <option value="Costa_Rica">Costa_Rica </option>
                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                    <option value="Croatie">Croatie </option>
                    <option value="Cuba">Cuba </option>

                    <option value="Danemark">Danemark </option>
                    <option value="Djibouti">Djibouti </option>
                    <option value="Dominique">Dominique </option>

                    <option value="Egypte">Egypte </option> 
                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                    <option value="Equateur">Equateur </option>
                    <option value="Erythree">Erythree </option>
                    <option value="Espagne">Espagne </option>
                    <option value="Estonie">Estonie </option>
                    <option value="Etats_Unis">Etats_Unis </option>
                    <option value="Ethiopie">Ethiopie </option>

                    <option value="Falkland">Falkland </option>
                    <option value="Feroe">Feroe </option>
                    <option value="Fidji">Fidji </option>
                    <option value="Finlande">Finlande </option>
                    <option value="France">France </option>

                    <option value="Gabon">Gabon </option>
                    <option value="Gambie">Gambie </option>
                    <option value="Georgie">Georgie </option>
                    <option value="Ghana">Ghana </option>
                    <option value="Gibraltar">Gibraltar </option>
                    <option value="Grece">Grece </option>
                    <option value="Grenade">Grenade </option>
                    <option value="Groenland">Groenland </option>
                    <option value="Guadeloupe">Guadeloupe </option>
                    <option value="Guam">Guam </option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernesey">Guernesey </option>
                    <option value="Guinee">Guinee </option>
                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                    <option value="Guyana">Guyana </option>
                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                    <option value="Haiti">Haiti </option>
                    <option value="Hawaii">Hawaii </option> 
                    <option value="Honduras">Honduras </option>
                    <option value="Hong_Kong">Hong_Kong </option>
                    <option value="Hongrie">Hongrie </option>

                    <option value="Inde">Inde </option>
                    <option value="Indonesie">Indonesie </option>
                    <option value="Iran">Iran </option>
                    <option value="Iraq">Iraq </option>
                    <option value="Irlande">Irlande </option>
                    <option value="Islande">Islande </option>
                    <option value="Israel">Israel </option>
                    <option value="Italie">italie </option>

                    <option value="Jamaique">Jamaique </option>
                    <option value="Jan Mayen">Jan Mayen </option>
                    <option value="Japon">Japon </option>
                    <option value="Jersey">Jersey </option>
                    <option value="Jordanie">Jordanie </option>

                    <option value="Kazakhstan">Kazakhstan </option>
                    <option value="Kenya">Kenya </option>
                    <option value="Kirghizstan">Kirghizistan </option>
                    <option value="Kiribati">Kiribati </option>
                    <option value="Koweit">Koweit </option>

                    <option value="Laos">Laos </option>
                    <option value="Lesotho">Lesotho </option>
                    <option value="Lettonie">Lettonie </option>
                    <option value="Liban">Liban </option>
                    <option value="Liberia">Liberia </option>
                    <option value="Liechtenstein">Liechtenstein </option>
                    <option value="Lituanie">Lituanie </option> 
                    <option value="Luxembourg">Luxembourg </option>
                    <option value="Lybie">Lybie </option>

                    <option value="Macao">Macao </option>
                    <option value="Macedoine">Macedoine </option>
                    <option value="Madagascar">Madagascar </option>
                    <option value="Madère">Madère </option>
                    <option value="Malaisie">Malaisie </option>
                    <option value="Malawi">Malawi </option>
                    <option value="Maldives">Maldives </option>
                    <option value="Mali">Mali </option>
                    <option value="Malte">Malte </option>
                    <option value="Man">Man </option>
                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                    <option value="Maroc">Maroc </option>
                    <option value="Marshall">Marshall </option>
                    <option value="Martinique">Martinique </option>
                    <option value="Maurice">Maurice </option>
                    <option value="Mauritanie">Mauritanie </option>
                    <option value="Mayotte">Mayotte </option>
                    <option value="Mexique">Mexique </option>
                    <option value="Micronesie">Micronesie </option>
                    <option value="Midway">Midway </option>
                    <option value="Moldavie">Moldavie </option>
                    <option value="Monaco">Monaco </option>
                    <option value="Mongolie">Mongolie </option>
                    <option value="Montserrat">Montserrat </option>
                    <option value="Mozambique">Mozambique </option>

                    <option value="Namibie">Namibie </option>
                    <option value="Nauru">Nauru </option>
                    <option value="Nepal">Nepal </option>
                    <option value="Nicaragua">Nicaragua </option>
                    <option value="Niger">Niger </option>
                    <option value="Nigeria">Nigeria </option>
                    <option value="Niue">Niue </option>
                    <option value="Norfolk">Norfolk </option>
                    <option value="Norvege">Norvege </option>
                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                    <option value="Oman">Oman </option>
                    <option value="Ouganda">Ouganda </option>
                    <option value="Ouzbekistan">Ouzbekistan </option>

                    <option value="Pakistan">Pakistan </option>
                    <option value="Palau">Palau </option>
                    <option value="Palestine">Palestine </option>
                    <option value="Panama">Panama </option>
                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                    <option value="Paraguay">Paraguay </option>
                    <option value="Pays_Bas">Pays_Bas </option>
                    <option value="Perou">Perou </option>
                    <option value="Philippines">Philippines </option> 
                    <option value="Pologne">Pologne </option>
                    <option value="Polynesie">Polynesie </option>
                    <option value="Porto_Rico">Porto_Rico </option>
                    <option value="Portugal">Portugal </option>

                    <option value="Qatar">Qatar </option>

                    <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                    <option value="Reunion">Reunion </option>
                    <option value="Roumanie">Roumanie </option>
                    <option value="Royaume_Uni">Royaume_Uni </option>
                    <option value="Russie">Russie </option>
                    <option value="Rwanda">Rwanda </option>

                    <option value="Sahara Occidental">Sahara Occidental </option>
                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                    <option value="Saint_Marin">Saint_Marin </option>
                    <option value="Salomon">Salomon </option>
                    <option value="Salvador">Salvador </option>
                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
                    <option value="Senegal">Senegal </option> 
                    <option value="Seychelles">Seychelles </option>
                    <option value="Sierra Leone">Sierra Leone </option>
                    <option value="Singapour">Singapour </option>
                    <option value="Slovaquie">Slovaquie </option>
                    <option value="Slovenie">Slovenie</option>
                    <option value="Somalie">Somalie </option>
                    <option value="Soudan">Soudan </option> 
                    <option value="Sri_Lanka">Sri_Lanka </option> 
                    <option value="Suede">Suede </option>
                    <option value="Suisse">Suisse </option>
                    <option value="Surinam">Surinam </option>
                    <option value="Swaziland">Swaziland </option>
                    <option value="Syrie">Syrie </option>

                    <option value="Tadjikistan">Tadjikistan </option>
                    <option value="Taiwan">Taiwan </option>
                    <option value="Tonga">Tonga </option>
                    <option value="Tanzanie">Tanzanie </option>
                    <option value="Tchad">Tchad </option>
                    <option value="Thailande">Thailande </option>
                    <option value="Tibet">Tibet </option>
                    <option value="Timor_Oriental">Timor_Oriental </option>
                    <option value="Togo">Togo </option> 
                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                    <option value="Tristan da cunha">Tristan de cuncha </option>
                    <option value="Tunisie" >Tunisie </option>
                    <option value="Turkmenistan">Turmenistan </option> 
                    <option value="Turquie">Turquie </option>

                    <option value="Ukraine">Ukraine </option>
                    <option value="Uruguay">Uruguay </option>

                    <option value="Vanuatu">Vanuatu </option>
                    <option value="Vatican">Vatican </option>
                    <option value="Venezuela">Venezuela </option>
                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                    <option value="Vietnam">Vietnam </option>

                    <option value="Wake">Wake </option>
                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                    <option value="Yemen">Yemen </option>
                    <option value="Yougoslavie">Yougoslavie </option>

                    <option value="Zambie">Zambie </option>
                    <option value="Zimbabwe">Zimbabwe </option>

        </select>   
                          </td>
                    </tr>
                    
                      <tr> 
                   <td> 
                       <label> Numéro de Carte : </label>
                   </td>
                   <td>
                       <input type="text" name="num_carte" placeholder="Exp: 6562 7452 7520 74 8" onblur="verifNumCarte(this)" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                   </td>
                </tr>
                    
                           <tr> 
                   <td> 
                       <label> Date D'expiration : </label>
                   </td>
                   <td>
                       <input type="date" name="date_exp" onblur="verifDate(this)" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                   </td>
                </tr>
        
                           <tr> 
                   <td> 
                       <label> Code de scéurité : </label>
                   </td>
                   <td>
                       <input type="password" name="Code_sec"  minlength="4" maxlength="4" placeholder="Exp: 1234" oncopy="return false" onpaste="return false" oncut="return false" onblur="verifCodeSecthis)" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required > 
                   </td>
                </tr>
  
                          <tr> 
                   <td> 
                       <label> Adresse : </label>
                   </td>
                   <td>
                       <input type="text" name="adresse" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                   </td>
                </tr> 
                            <tr> 
                   <td> 
                       <label> Code Postal : </label>
                   </td>
                   <td>
                       <input type="text" name="code_postal" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                   </td>
                </tr>
                                              <tr> 
                   <td> 
                       <label> Num Tel : </label>
                   </td>
                   <td>
                       <input type="text" name="num_tel" onblur="verifNumTel(this)" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" required> 
                   </td>
                </tr>             
     
     
     </table>
     
     
     
     </div>
     <div style="margin-left:20%">
         <br>
         <br>
				 <input  type="submit" name="ajouter" value="Payer" class="btn btn-primary mx-auto" Onclick="test()" />
				 <input   type="reset" class="btn btn-primary mx-auto" value="Reset" />
				</div>
     
     
     
     
     
     
				
 </fieldset>

 </form> 
     


<script>
$(document).ready(function(){
function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#ajout_form').on('submit', function(event){
  event.preventDefault();
  if($('#nom').val() != '' && $('#prenom').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"ajouterPaiement.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#ajout_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
  

    
<br>
<br>
<br>
<br>
<br>
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

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
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
        </div>

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

      </div>
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
