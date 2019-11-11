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
$query = "INSERT INTO personne (nom_pers, prenom_pers, mail_pers, mdp_pers) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($link, $query);

/* Attribution des paramètres */
mysqli_stmt_bind_param($stmt, 'ssss', $nom, $prenom, $email, $mdp);

/* Exécution de la requête */
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
?>
