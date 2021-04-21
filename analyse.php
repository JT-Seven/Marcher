<?php

function fruit()
{
    $stock = array(); //Crée une variable '$stock' qui contient un tableau vide;
		
		$file = fopen("stock.txt", "r");// On ouvere le fichier 'stock.txt' avec 'r' qui signifie lecture tout simplement;
		if($file) {		//Si le fichier existe on fait :
			while (!feof($file)) { // Tant que qu'il ne test pas la fin du fichier 
				// lecture d�une ligne
	 			$id=fgets($file);/* On lit les lignes une par une et on les assignes a une variable la prmeiere correspondra l'id ; la deuxieme au titre ; 3eme a l'auteur etc... */
	 			$nom=fgets($file);
	 			$price=fgets($file);
	 			
	 			$image_url = $id.".png";
	 			
	 			$stock[] = array("id" => intval($id), "nom" => strval($nom), "image_url" => $image_url, "price" => floatval($price));
				
				fgets($file);		
			}
	    	fclose($file);
		}	
		return $stock;
}

// function legume()
// {
//     $stock = array(); //Crée une variable '$stock' qui contient un tableau vide;
		
// 		$file = fopen("stock_2.txt", "r");// On ouvere le fichier 'stock.txt' avec 'r' qui signifie lecture tout simplement;
// 		if($file) {		//Si le fichier existe on fait :
// 			while (!feof($file)) { // Tant que qu'il ne test pas la fin du fichier 
// 				// lecture d�une ligne
// 	 			$id=fgets($file);/* On lit les lignes une par une et on les assignes a une variable la prmeiere correspondra l'id ; la deuxieme au titre ; 3eme a l'auteur etc... */
// 	 			$nom=fgets($file);
// 	 			$price=fgets($file);
	 			
// 	 			$image_url = $id.".png";
	 			
// 	 			$stock[] = array("id" => intval($id), "nom" => strval($nom), "image_url" => $image_url, "price" => floatval($price));
				
// 				fgets($file);		
// 			}
// 	    	fclose($file);
// 		}	
// 		return $stock;
// }


function findproduct($idproduct)
{
	$fruit = fruit();
	$legume = legume();
	foreach($fruit as $val)
	{
		if ($idproduct == $val['id'])
		{
			setCookie("nom_fruit","",time()+ 3600 * 24 * 365);
			$_COOKIE['nom_fruit'] = strval($val["nom"]);
			setCookie("prix_fruit","",time()+ 3600 * 24 * 365);
			$_COOKIE['prix_fruit'] = floatval($val["price"]);
			setCookie("id_fruit","",time()+ 3600 * 24 * 365);
			$_COOKIE['id_fruit'] = intval($val['id']);
		}
	}
	foreach($legume as $value)
	{
		if ($idproduct == $value['id'])
		{
			setCookie("nom_legume","",time()+ 3600 * 24 * 365);
			$_COOKIE['nom_legume'] = strval($value["nom"]);
			setCookie("prix_legume","",time()+ 3600 * 24 * 365);
			$_COOKIE['prix_legume'] = floatval($value["price"]);
			setCookie("id_legume","",time()+ 3600 * 24 * 365);
			$_COOKIE['id_legume'] = intval($value['id']);
		}
	}
	$data = array($_COOKIE['nom_fruit'], $_COOKIE['prix_fruit'], $_COOKIE['id_fruit'], $_COOKIE['nom_legume'], $_COOKIE['prix_legume'], $_COOKIE['id_legume']);
	return $data;
}

?>
