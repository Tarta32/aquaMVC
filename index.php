<?php

    ob_start();
    include("Autoloader.php");
    Autoloader::start();
    session_start();

$chemin = $_GET['chemin'];

$partiesChemin = explode("/", $chemin);

if (isset($partiesChemin[0]) && $partiesChemin[0] != "") {
    $nomControleur = 'controleur\\' . ucfirst($partiesChemin[0]) . "Controleur";
} else {
    $nomControleur = "controleur\\AccueilControleur";
}

if (isset($partiesChemin[1]) && $partiesChemin[1] != "") {
    $nomAction = $partiesChemin[1];
} else {
    $nomAction = 'onload';
}

// Si l'url comporte un parametre, et que celui-ci ne fini pas par un slash.

if (isset($partiesChemin[2]) && $partiesChemin[2] != "") {
    $parametre = $partiesChemin[2];
} else {
    $parametre = null;
}


if (!method_exists($nomControleur, $nomAction)) {
    $nomControleur = "controleur\\ErreurControleur";
    $nomAction = "pageNonTrouve";
}

$controleur = new $nomControleur();
$controleur->$nomAction($parametre);
ob_flush();
?>
