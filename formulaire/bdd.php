<?php
$link = mysqli_connect("localhost", "root", "root", "dfa");

if (!$link) {
    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    exit;
}

?>
