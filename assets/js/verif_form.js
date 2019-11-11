$(document).ready(function(){

    var
        $nom = $('#nom'),
        $prenom = $('#prenom'),
        $mdp = $('#mdp'),
        $confirmation = $('#confirmation'),
        $mail = $('#email'),
        $chk = $('#chk'),
        $envoi = $('#envoi'),
        $reset = $('#rafraichir'),
        $erreur = $('#erreur'),
        $champ = $('.form-control');
        $bonMail = false;
        $bonMdp = false;
        $bonNom = false;
        $bonPrenom = false;
        $bonCondition = false;
        verifForm();

    function verifForm(){
        if(!$bonMail || !$bonMdp || !$bonNom || !$bonPrenom || !$bonCondition)
        {
             $('#envoi').attr("disabled", true);
        }
        else
        {
             $('#envoi').attr("disabled", false);
        }// on annule la fonction par défaut du bouton d'envoi
    };

    $mdp.keyup(function(){
        if($(this).val().length < 8){ // si la chaîne de caractères est inférieure à 5
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
	        color : 'red'
            });
         }
         else{
             $(this).css({ // si tout est bon, on le rend vert
	         borderColor : 'green',
	         color : 'green'
	         });
         }
         verifForm();
    });

    $confirmation.keyup(function(){
        if($(this).val() != $mdp.val()){ // si la confirmation est différente du mot de passe
            $(this).css({ // on rend le champ rouge
     	        borderColor : 'red',
        	       color : 'red'
            });
            $bonMdp = false;
        }
        else{
	    $(this).css({ // si tout est bon, on le rend vert
	        borderColor : 'green',
	        color : 'green'
	       });
           $bonMdp = true;
        }
        verifForm();
    });



    $nom.keyup(function(){
        if($nom.val() == "" || !bonText($nom.val())){
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
                color : 'red'
            });
            $bonNom = false;
        }
        else {
            $(this).css({ // on rend le champ vert
                borderColor : 'green',
                color : 'green'
            });
            $bonNom = true;
        }
        verifForm();
    });

    $prenom.keyup(function(){
        if($prenom.val() == "" || !bonText($prenom.val())){
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
                color : 'red'
            });
            $bonPrenom = false;
        }
        else {
            $(this).css({ // on rend le champ vert
                borderColor : 'green',
                color : 'green'
            });
            $bonPrenom = true;
        }
        verifForm();
    });

    $chk.click(function(){
        if(!$(this).is(":checked")){
            $bonCondition = false;
        }
        else {
            $bonCondition = true;
        }
        verifForm();
    });

    $mail.keyup(function mail(){
        if(!bonmail($(this).val())) {
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
                color : 'red'
            });
            $bonMail = false;
        }
        else {
            $(this).css({ // on rend le champ vert
                borderColor : 'green',
                color : 'green'
            });
            $bonMail = true;
        }
        verifForm();
    });

    function bonText(texte){
        var reg = new RegExp('^[a-zA-Z0-9 _-]+$', 'i');
        if(reg.test(texte))
        {
            return(true);
        }
        else
        {
            return(false);
        }
    }

    function bonmail(mailteste) {
        var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
        if(reg.test(mailteste))
        {
            return(true);
        }
        else
        {
            return(false);
        }
    }
});
