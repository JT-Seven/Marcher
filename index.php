<?php

if (isset($_GET["action"])) 
{ //Si la superglobal '$_GET["action"]' est definie on execute tous ca;
    switch ($_GET["action"]) 
    { //On vas switcher entre les requetes qui se font via la superglobal '$_GET';
        case "connexion.php":
            $page ="marcher.php";
            break;
        case "ajouter":
            $page ="panier.php";
            break;
        case "marcher":
            $page ="marcher.php";
            break;
        case "panier":
            $page ="panier.php";
            break;
        case "index.php":
            $page = "connexion.php";
            break;
        case "connexion":
            $page = "connexion.php";
            break;
        case "debug.php":
            $page = "debug.php";
            break;
        default: 
            $page = "marcher.php";
    }
    $exe = "catalogue.php";
} 
else 
{ // Sinon si elle n'est pas definie;
    $page = "connexion.php";
    $exe = "catalogue.php";
}	

include($exe); //Par default dans tout les cas on affiche la naviguation


?>