<?php
require_once("analyse.php");


function utilisateur($prenom, $nom, $adresse)
{
    $prenom2 = $_GET['prenom'];
    if (!isset($_COOKIE["user"]) && !isset($_COOKIE["user2"]))
    {
        setCookie("user",$prenom,time()+ 3600 * 24 * 365);
        setCookie("nom",$nom,time()+ 3600 * 24 * 365);
        setCookie("adresse",$adresse,time()+ 3600 * 24 * 365);
        setCookie("visite",0,time()+ 3600 * 24 * 365);
        $_COOKIE["user"] = strval($prenom);
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

if(!isset($_COOKIE['prix']))
{
    setCookie("prix[Pomme]",3.50, time()+ 3600 * 24 * 365);
    setCookie("prix[framboise]",2.70, time()+ 3600 * 24 * 365);
    setCookie("prix[raisin]",2.50, time()+ 3600 * 24 * 365);
    setCookie("prix[carotte]",5.50, time()+ 3600 * 24 * 365);
    setCookie("prix[tomate]",4.50, time()+ 3600 * 24 * 365);
    setCookie("prix[salade]",6.70, time()+ 3600 * 24 * 365);
}


if(isset($_GET["nom"]))
{
    $panier = $_COOKIE['panier'];
    $prix = $_COOKIE['prix'];
	switch ($_GET["nom"])
	{
		case "Pomme":
			$panier["Pomme"]++;
			setCookie("panier[Pomme]",$panier["Pomme"], time()+ 3600 * 24 * 365);
            $_COOKIE['panier[Pomme]'] = intval($panier["Pomme"]);
            $prix['Pomme'] = floatval(3.50);
            setCookie("prix[Pomme]",$prix["Pomme"] * $panier["Pomme"], time()+ 3600 * 24 * 365);
            $_COOKIE['prix[Pomme]'] = floatval($prix['Pomme']);
            header("Location: index.php?action=ajoutercart");
		break;
		case "Framboise":
			$panier["framboise"]++;
			setCookie("panier[framboise]",$panier["framboise"], time()+ 3600 * 24 * 365);
            $_COOKIE['panier[framboise]'] = intval($panier["framboise"]);
            $prix['framboise'] = floatval(2.70);
            setCookie("prix[framboise]",$prix["framboise"] * $panier["framboise"], time()+ 3600 * 24 * 365);
            $_COOKIE['prix[framboise]'] = floatval($prix['Pomme']);
            header("Location: index.php?action=ajoutercart");
		break;
		case "Raisin":
			$panier["raisin"]++;
			setCookie("panier[raisin]",$panier["raisin"], time()+ 3600 * 24 * 365);
            $_COOKIE['panier[raisin]'] = intval($panier["raisin"]);
            $prix['raisin'] = floatval(2.50);
            setCookie("prix[raisin]",$prix["raisin"] * $panier["raisin"], time()+ 3600 * 24 * 365);
            $_COOKIE['prix[raisin]'] = floatval($prix['raisin']);
            header("Location: index.php?action=ajoutercart");
		break;
        case "Tomate":
			$panier["tomate"]++;
			setCookie("panier[tomate]",$panier["tomate"], time()+ 3600 * 24 * 365);
            $_COOKIE['panier[tomate]'] = intval($panier["tomate"]);
            $prix['tomate'] = floatval(4.50);
            setCookie("prix[tomate]",$prix["tomate"] * $panier["tomate"], time()+ 3600 * 24 * 365);
            $_COOKIE['prix[tomate]'] = floatval($prix['tomate']);
            header("Location: index.php?action=ajoutercart");
		break;
		case "Carotte":
			$panier["carotte"]++;
			setCookie("panier[carotte]",$panier["carotte"], time()+ 3600 * 24 * 365);
            $_COOKIE['panier[carotte]'] = intval($panier["carotte"]);
            $prix['carotte'] = floatval(5.50);
            setCookie("prix[carotte]",$prix["carotte"] * $panier["carotte"], time()+ 3600 * 24 * 365);
            $_COOKIE['prix[carotte]'] = floatval($prix['carotte']);
            header("Location: index.php?action=ajoutercart");
		break;
		case "Salade":
			$panier["salade"]++;
			setCookie("panier[salade]",$panier["salade"], time()+ 3600 * 24 * 365);
            $_COOKIE['panier[salade]'] = intval($panier["salade"]);
            $prix['salade'] = floatval(6.50);
            setCookie("prix[salade]",$prix["salade"] * $panier["salade"], time()+ 3600 * 24 * 365);
            $_COOKIE['prix[salade]'] = floatval($prix['salade']);
            header("Location: index.php?action=ajoutercart");
		break;
	}
}


if(!isset($_COOKIE["total"]))
{
    if(isset($_COOKIE['panier']) && isset($_COOKIE['prix']))
    {
        $prix = $_COOKIE['prix'];
        setCookie("total",$prix['Pomme'] + $prix['framboise'] + $prix['tomate'] + $prix['carotte'] + $prix['raisin'] + $prix['salade'], time()+ 3600 * 24 * 365);
        $_COOKIE["total"];
    }
}


function supprimer()
{
    @$panier = $_COOKIE['panier'];
    @$prix = $_COOKIE['prix'];

    if (isset($_GET['supp']))
    {
        if(isset($_COOKIE['panier']) && isset($_COOKIE['prix']))
        {
            switch ($_GET["supp"])
            {
                case "click":
                    $panier = 0;
                    $prix = 0;
                    setCookie("panier[Pomme]",$panier, time()-1);
                    setCookie("panier[framboise]",$panier, time()-1);
                    setCookie("panier[tomate]",$panier, time()-1);
                    setCookie("panier[salade]",$panier, time()-1);
                    setCookie("panier[raisin]",$panier, time()-1);
                    setCookie("panier[carotte]",$panier, time()-1);
                    setCookie("prix[Pomme]",$prix, time()-1);
                    setCookie("prix[framboise]",$prix, time()-1);
                    setCookie("prix[tomate]",$prix, time()-1);
                    setCookie("prix[salade]",$prix, time()-1);
                    setCookie("prix[raisin]",$prix, time()-1);
                    setCookie("prix[carotte]",$prix, time()-1);
                    unset($panier, $prix);
                    header("Location: index.php?action=supprimer");
                    break;
            }
        }
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

