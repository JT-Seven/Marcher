<?php
    require_once("traitement.php");
    require_once("analyse.php");
    $stock = allproduct();
?> 
    <table class="container-table" border="2" cellspacing="20" cellpadding="0">  
        <td colspan="2">FRUITS :</td>
            <div class="element1">
                <?php for($i = 0; $i < count($stock); $i++) { ?>
                    <?php if ($stock[$i]['id'] == 4) { break; } else { ?>
                        <tr class="tablemarch">
                            <td><img src="<?php echo "img\\".$stock[$i]["image_url"]; ?>"/></td><!-- Cette ligne dit que j'affiche toutes les images qui provienne de la fonction findAllBooks -->
                            <td><h2 style="margin: 0px;padding:0px"><?php echo strtoupper($stock[$i]["nom"]) ?></h2></td> <!-- Cette ligne affiche tout les tritres 
                            provenant de la fonction finAllBooks en majuscules-->
                        </tr>
                        <tr class="tablemarch">
                            <td><b><?php echo $stock[$i]["price"] ?>�</b>&nbsp<a href="index.php?action=ajouter&nom=<?php echo $stock[$i]["nom"] ?>">Ajouter au panier</a></td> <!-- Affiche en gras le prix  et ajoute
                            un lien qui redirige vers le fichier 'inconstruction.php' mais sous le nom de 'addtocart' + son id personnel ajouter via la fonction findAllBooks -->
                        </tr>
                   <?php } ?>
                <?php }  ?>
            </div>
	</table>
    <table class="container-table2" border="2" cellspacing="20" cellpadding="0">  
        <td colspan="2">LEGUMES :</td>
            <div class="element1">
                <?php for($i = 3; $i < count($stock); $i++) { ?>
                        <tr class="tablemarch">
                            <td><img src="<?php echo "img\\".$stock[$i]["image_url"]; ?>"/></td><!-- Cette ligne dit que j'affiche toutes les images qui provienne de la fonction findAllBooks -->
                            <td><h2 style="margin: 0px;padding:0px"><?php echo strtoupper($stock[$i]["nom"]) ?></h2></td> <!-- Cette ligne affiche tout les tritres 
                            provenant de la fonction finAllBooks en majuscules-->
                        </tr>
                        <tr class="tablemarch">
                            <td><b><?php echo $stock[$i]["price"] ?>�</b>&nbsp<a href="index.php?action=ajouter&nom=<?php echo $stock[$i]["nom"] ?>">Ajouter au panier</a></td> <!-- Affiche en gras le prix  et ajoute
                            un lien qui redirige vers le fichier 'inconstruction.php' mais sous le nom de 'addtocart' + son id personnel ajouter via la fonction findAllBooks -->
                        </tr>
                <?php }  ?>
            </div>
	</table>
    <style>
        img {
            width:170px;
            height:170px;
            object-fit:cover;
        }
        .element1 {
        }
        .container-table {
            text-align:center;
            border-collapse: collapse;
            height: 0%;
            border-collapse: separate;
            top:60%;
            left:30%;
        }
        .container-table {
            text-align:center;
            border-collapse: collapse;
            height: 0%;
            border-collapse: separate;
            position:absolute;
            top:138px;
            left:27%;
        }
    </style>