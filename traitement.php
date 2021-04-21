<?php
require_once("analyse.php");


// function user($user, $prenom, $nom, $adresse)
// {
//     if (!isset($_COOKIE["user"]))
//     {
//         setCookie("user",$prenom,time()+ 3600 * 24 * 365);
//         setCookie("nom",$nom,time()+ 3600 * 24 * 365);
//         setCookie("adresse",$adresse,time()+ 3600 * 24 * 365);
//         setCookie("visite",0,time()+ 3600 * 24 * 365);
//     }
//     return $_COOKIE["user"];
// }

// function ajouternewprod($idproduct)
// {
//     setCookie("lignes","",time()+ 3600 * 24 * 365);
//     setCookie("quantiter","",time()+ 3600 * 24 * 365);
//     $_COOKIE['lignes'] = array("lineitems" => array());
//     $_COOKIE['quantiter'] = intval(1);
//     $_COOKIE['nom_fruit'] = strval($idproduct[0]);
//     $_COOKIE['prix_fruit'] = floatval($idproduct[1]);
//     $_COOKIE['id_fruit'] = intval($idproduct[2]);
//     $_COOKIE['nom_legume'] = strval($idproduct[3]);
//     $_COOKIE['prix_legume'] = floatval($idproduct[4]);
//     $_COOKIE['id_legume'] = intval($idproduct[5]);
//     $tab = $_COOKIE['lignes'];
//     array_push(
//         $tab['lineitems'], 
//         array(
//             'nom_fruit' => $_COOKIE['nom_fruit'],
//             'prix_fruit' =>$_COOKIE['prix_fruit'],
//             'id_fruit' =>$_COOKIE['id_fruit'],
//             'quantiter' =>$_COOKIE['quantiter'],
//             'nom_legume' =>$_COOKIE['nom_legume'],
//             'prix_legume' =>$_COOKIE['prix_legume'],
//             'id_legume' =>$_COOKIE['id_legume'],
// 			)
// 		);
//         $tableau_serialize = serialize($tab);
//         setCookie("panier",$tableau_serialize,time()+ 3600 * 24 * 365);
//         $tab_cookies = unserialize($_COOKIE['panier']);
//         var_dump($tab_cookies);
// }
    
// function ajouterproduit($idproduct)
// {
//     if($_COOKIE['lignes']['lineitems']['nom_fruit'] == $idproduct[0] || $_COOKIE['lignes']['lineitems']['nom_legume'] == $idproduct[3])
//     {
//         $_COOKIE['quantiter']++;
//         return;
//     }
//     ajouternewprod($idproduct);
// }

// function ajouter($idproduct)
// {
//     $produit = findproduct($idproduct);
//     ajouterproduit($produit);
// }

