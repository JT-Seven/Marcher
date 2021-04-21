<?php

function allproduct()
{
    $stock = array(); //Crée une variable '$stock' qui contient un tableau vide;
		
		$file = fopen("stock.txt", "r"); //On ouvere le fichier 'stock.txt' avec 'r' qui signifie lecture tout simplement;
		if($file) {		//Si le fichier existe on fait :
			while (!feof($file)) {  //Tant que qu'il ne test pas la fin du fichier 
				 //lecture d�une ligne
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


?>
