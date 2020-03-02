<?php


//$nom =isset($_GET['nom']) ? $_GET['nom'] :"pas de prenom";



sleep(2);
echo "Bonjour " .$nom;

//$nom = $_POST['nom'];
//$prenom = $_POST['prenom'];
//$mail = $_POST['email'];

$nom =isset($_POST['nom']) ? $_POST['nom'] :"pas de nom";
$nom =isset($_POST['prenom']) ? $_POST['prenom'] :"pas de prenom";
$nom =isset($_POST['email']) ? $_POST['email'] :"pas de email";

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {

    echo 'vos coordonnées : '.$_POST['nom']. .$_POST['prenom']. "et votre mail est :" .$_POST['email']; 
}