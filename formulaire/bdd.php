<?php
try
{
    $bdd = new PDO('mysql:host=localhost; dbname=dfa', 'root', 'root');
}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
