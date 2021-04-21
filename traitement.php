<?php
require_once("analyse.php");


function utilisateur($prenom, $nom, $adresse)
{
    if (!isset($_COOKIE["user"]))
    {
        setCookie("user",$prenom,time()+ 3600 * 24 * 365);
        setCookie("nom",$nom,time()+ 3600 * 24 * 365);
        setCookie("adresse",$adresse,time()+ 3600 * 24 * 365);
        setCookie("visite",0,time()+ 3600 * 24 * 365);
    }
    return $_COOKIE["user"];
}


if (isset($_GET['supp']))
{
    $panier = $_COOKIE['panier'];
    switch ($_GET["supp"])
    {
        case "click":
            $panier = 0;
            setCookie("panier[carotte]",$panier, time()-1);
            setCookie("panier[Pomme]",$panier, time()-1);
            setCookie("panier[framboise]",$panier, time()-1);
            setCookie("panier[tomate]",$panier, time()-1);
            setCookie("panier[salade]",$panier, time()-1);
            setCookie("panier[raisin]",$panier, time()-1);
            unset($panier);
            break;
    }
}

if(!isset($_COOKIE['panier']))
{
    setCookie("panier[Pomme]",0, time()+ 3600 * 24 * 365);
    setCookie("panier[framboise]",0, time()+ 3600 * 24 * 365);
    setCookie("panier[raisin]",0, time()+ 3600 * 24 * 365);
    setCookie("panier[carotte]",0, time()+ 3600 * 24 * 365);
    setCookie("panier[tomate]",0, time()+ 3600 * 24 * 365);
    setCookie("panier[salade]",0, time()+ 3600 * 24 * 365);
}


if(isset($_GET["nom"]))
{
	$panier = $_COOKIE['panier'];
	switch ($_GET["nom"])
	{
		case "Pomme":
			$panier["Pomme"]++;
			setCookie("panier[Pomme]",$panier["Pomme"], time()+ 3600 * 24 * 365);
			echo 'bien bon';
		break;
		case "Framboise":
			$panier["framboise"]++;
			setCookie("panier[framboise]",$panier["framboise"], time()+ 3600 * 24 * 365);
		break;
		case "Raisin":
			$panier["raisin"]++;
			setCookie("panier[raisin]",$panier["raisin"], time()+ 3600 * 24 * 365);
		break;
        case "Tomate":
			$panier["tomate"]++;
			setCookie("panier[tomate]",$panier["tomate"], time()+ 3600 * 24 * 365);
		break;
		case "Carotte":
			$panier["carotte"]++;
			setCookie("panier[carotte]",$panier["carotte"], time()+ 3600 * 24 * 365);
		break;
		case "Salade":
			$panier["salade"]++;
			setCookie("panier[salade]",$panier["salade"], time()+ 3600 * 24 * 365);
		break;
	}
}


// function findproduct($idproduct) //On vas trouver toutes les informations necessaire
// {
// 	$product = allproduct();
// 	foreach($product as $val)
// 	{
// 		if ($idproduct == $val['id'] && !isset($_COOKIE['produit']))
// 		{
// 			setCookie("produit[id]",$idproduct,time()+ 3600 * 24 * 365);
// 			setCookie("produit[nom]",$val['nom'],time()+ 3600 * 24 * 365);
// 			setCookie("produit[prix]",$val['price'],time()+ 3600 * 24 * 365);
// 		}
// 	}
// }


// function ajouternewprod()
// {
//     if (!isset($_COOKIE['panier']))
//     { 
//         setCookie("panier[lignes]","",time()+ 3600 * 24 * 365);
//         $_COOKIE['panier[lignes]'] = array("lineitems" => array());
//         setCookie("panier[quantiter]","",time()+ 3600 * 24 * 365);
//         $_COOKIE['panier[quantiter]'] = intval(1);
//         array_push(
//             $_COOKIE['lignes']['lineitems'], 
//             array(
//                     'nom' => $_COOKIE['produit[nom]'],
//                     'id' => $_COOKIE['produit[id]'],
//                     'quantiter' => $_COOKIE['panier[quantiter]'],
//                     'prix' => $_COOKIE['produit[prix]'],
//                 )
//         );
//         print_r($_COOKIE['produit[nom]'], time()+ 3600 * 24 * 365);
//     }
//     if (!isset($_COOKIE['panier']))
//     {    
//         $tableau_serialize = serialize($_COOKIE['lignes'], time()+ 3600 * 24 * 365);
//         setCookie("panier[lignes]",$tableau_serialize,time()+ 3600 * 24 * 365);
//         $tab_cookies = unserialize($_COOKIE['panier[lignes]'], time()+ 3600 * 24 * 365);
//     }
// }

