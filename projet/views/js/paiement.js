
function test()
{
    var nom = f.nom.value;
    var prenom = f.prenom.value;
    var mail = f.email.value;
    var numcarte = f.num_carte.value;
    var codesec = f.Code_sec.value;
    var adresse = f.adresse.value;
    var codePostal = f.code_postal.value;  
    var numtel = f.num_tel.value;
    
    if( mail.length== 0 || nom.length== 0 || prenom.length== 0 || numcarte.length== 0 || codesec.length== 0 || adresse.length== 0 || codePostal.length== 0 || numtel.length== 0)
       
{
    alert("Remplir les champs obligatoire (Nom,Prenom,Mail,Num carte,Code de scéurité,Adresse,Code Postal,Num Tel)");
    
}
              
else if ((f.type_paiement[0].checked==0)&&(f.type_paiement[1].checked==0)&&(f.type_paiement[2].checked==0)&&(f.type_paiement[3].checked==0))
{
alert("il faut cocher un type de paiement");
}
  
    else if ((numcarte.length != 10)&&(isNaN(numcarte.value)==true))
{
alert ("le Num Carte doit contenir 10 caractères et doit être numérique");
}
    
    else if ((codesec.length != 4)&&(isNaN(codesec.value)==true))
{
alert ("le code de sécurité doit contenir 4 caractères et doit être numérique ");
}

     else if ((numtel.length != 8)&&(isNaN(numtel.value)==true))
{
alert ("le numtel doit contenir 8 caractères et doit être numérique ");
}
      
 else if (f.pays.options.selectedIndex==-1)
{
alert("sélectionner un pays");
}

    
   else if ((mail.indexOf("@")>=0)&&(mail.indexOf(".")>=0))
    {  
       
        alert('Bienvenue' );
        return true 
    }
else { 
    alert("Mail invalide !"); 
    return false 
     }

    
    }


