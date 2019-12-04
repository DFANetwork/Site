<?php
    session_start();
    if (isset($_POST['email']))
    {
        $email = $_POST['email'];
    }
    if (isset($_POST['mdp']))
    {
        $mdp = $_POST['mdp'];
    }

    /* Connexion à la BDD */
    include 'bdd.php';

    /* Preparation de la requete pour recuperer les info du  */
    $requete = "SELECT code_pers, nom_pers, prenom_pers, mail_pers, mdp_pers FROM personne WHERE mail_pers LIKE '".$email."'";
    $reponse = $bdd->query($requete);

    while ($donnees = $reponse->fetch())
    {
        if ($donnees['mdp_pers'] == sha1($mdp)) // Acces OK !
        {
            $_SESSION['code'] = $donnees['code_pers'];
            $_SESSION['nom'] = $donnees['nom_pers'];
            $_SESSION['prenom'] = $donnees['prenom_pers'];
            $_SESSION['mail'] = $donnees['mail_pers'];

            echo $message = '<p>Bienvenue '.$_SESSION['nom'].',
                vous êtes maintenant connecté!</p>
                <p>Cliquez <a href="../index.php">ici</a>
                pour revenir à la page d accueil</p>';
        }
        else // Acces pas OK !
        {
            echo $message = '<p>Une erreur s\'est produite
            pendant votre identification.<br /> Le mot de passe ou le pseudo
                entré n\'est pas correcte.</p><p>Cliquez <a href="../connexion.php">ici</a>
            pour revenir à la page précédente
            <br /><br />Cliquez <a href="./index.php">ici</a>
            pour revenir à la page d accueil</p>';
        }
    }

$query->CloseCursor();

?>
