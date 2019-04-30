function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
} 



function verifNom (champ)
{
    var letters = /^[A-Za-z]+$/;
     if(!champ.value.match(letters)&&(champ.length== 0))
     {
      surligne(champ, true);
      return false;
     }
     else
     {
      surligne(champ, false);
      return true;
    }
} 


function verifPrenom (champ)
{
    var letters = /^[A-Za-z]+$/;
     if(!champ.value.match(letters)&&(champ.length== 0))
     {
      surligne(champ, true);
      return false;
     }
     else
     {
      surligne(champ, false);
      return true;
    }
} 

function verifNumTel (champ)
{   
     if((champ.value.substr(0,4)!="+216") || (champ.value.length !=12)&&(isNaN(champ.value)==true)) 
     {
      surligne(champ, true);
      return false;
     }
     else
     {
      surligne(champ, false);
      return true;
    }
}

function verifTypePaiement(champ)
{
    
   if ((champ[0].checked==0)&&(champ[1].checked==0)&&(champ[2].checked==0)&&(champ[3].checked==0))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}  

function verifPays(champ)
{
    
   if (champ.options.selectedIndex==-1)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}  

function verifNumCarte(champ)
{
    
   if ((champ.length != 10)&&(isNaN(champ.value)==true)) 
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}   

function verifEmail(champ)
{

   if ((champ.indexOf("@")>=0)&&(champ.indexOf(".")>=0))
   {
      surligne(champ, false);
      return true;
   }
   else
   {
      surligne(champ, true);
      return false;
   }
}

function verifDate(champ)
{ 
            var date_now=new Date () ; 		 
            var date_saisie = champ.value;
            var date_jour=new Date(date_now.getFullYear(),date_now.getMonth(),date_now.getDate()) ; 
            date_saisie=date_saisie.replace(/-/g,"");
            Date_Saisie=new Date(date_saisie.substr(0,4),date_saisie.substr(4,2)-1,date_saisie.substr(6,2));
		 
    
    
	if (Date_Saisie >= date_jour)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}



function verifCodeSec(champ)
{
     
   if((champ.length != 4)&&(isNaN(champ.value)==true))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifForm(form)
{
    
    var nomOk=verifNom(form.nom); 
    var prenomOk=verifPrenom(form.prenom); 
    var telOk=verifNumTel(form.num_tel); 
    var TypePaiementOk=verifTypePaiement(form.type_paiement); 
    var paysOk=verifPays(form.pays); 
    var emailOk=verifEmail(form.email); 
    var dateOk=verifDate(form.date_exp); 
    var NumCarteOk=verifNumCarte(form.num_carte); 
    var CodeSecOk=verifCodeSec(form.Code_sec); 
    
   
   if((nomOk)&&(prenomOk)&&(telOk)&&(TypePaiementOk)&&(paysOk)&&(emailOk)&&(dateOk)&&(NumCarteOk)&&(CodeSecOk)) 
       {
            alert("Paiement avec succes"); 
            return true;
       }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   } 
}