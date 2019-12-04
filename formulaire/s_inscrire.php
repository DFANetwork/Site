<?php
    if (isset($_POST['prenom']))
    {
        $prenom = $_POST['prenom'];
    }

    if (isset($_POST['nom']))
    {
        $nom = $_POST['nom'];
    }

    if (isset($_POST['email']))
    {
        $email = $_POST['email'];
    }

    if (isset($_POST['entreprise']))
    {
        $entreprise = $_POST['entreprise'];
    }
    else
    {
        $entreprise = "";
    }

    if (isset($_POST['mdp']))
    {
        $mdp = sha1($_POST['mdp']);
    }

    /* Connexion à la BDD */
    include 'bdd.php';

    /* Préparation de la commande d'insertion */
    $requete = "INSERT INTO personne (nom_pers, prenom_pers, mail_pers, mdp_pers) VALUES (:nom,:prenom,:mail,:mdp)";
    $req = $bdd->prepare($requete);
    $req->execute(array(
    	'nom' => $nom,
    	'prenom' => $prenom,
    	'mail' => $email,
        'mdp' => $mdp
	));
?>
