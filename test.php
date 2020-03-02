<?php


$nom =isset($_GET['nom']) ? $_GET['nom'] :"pas de prenom";
    


sleep(2);
echo "Bonjour " .$nom;