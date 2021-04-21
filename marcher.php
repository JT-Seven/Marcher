<?php
    require_once("analyse.php");
    $stock = fruit();
    $stock_2 = legume();
?>
    <table class="tablefru" border="2" cellspacing="20" cellpadding="0">  
        <td colspan="2">Fruit :</td>
        <?php foreach($stock as $product) { ?>
            <tr>
                <td><img src="<?php echo "img\\".$product["image_url"]; ?>"/></td><!-- Cette ligne dit que j'affiche toutes les images qui provienne de la fonction findAllBooks -->
                <td><h2 style="margin: 0px;padding:0px"><?php echo strtoupper($product["nom"]) ?></h2></td> <!-- Cette ligne affiche tout les tritres 
                provenant de la fonction finAllBooks en majuscules-->
            </tr>
            <tr>
                <td><b><?php echo $product["price"] ?>�</b>&nbsp<a href="index.php?action=ajouter&id=<?php echo $product["id"] ?>">Ajouter au panier</a></td> <!-- Affiche en gras le prix  et ajoute
                un lien qui redirige vers le fichier 'inconstruction.php' mais sous le nom de 'addtocart' + son id personnel ajouter via la fonction findAllBooks -->
            </tr>
        <?php }  ?>
	</table>
    <table class="tableleg" border="2" cellspacing="20" cellpadding="0">  
        <td colspan="2">Legume :</td>
        <?php foreach($stock_2 as $product_2) { ?>
            <tr>
                <td><img src="<?php echo "img_2\\".$product_2["image_url"]; ?>"/></td><!-- Cette ligne dit que j'affiche toutes les images qui provienne de la fonction findAllBooks -->
                <td><h2 style="margin: 0px;padding:0px"><?php echo strtoupper($product_2["nom"]) ?></h2></td> <!-- Cette ligne affiche tout les tritres 
                provenant de la fonction finAllBooks en majuscules-->
            </tr>
            <tr>
                <td><b><?php echo $product_2["price"] ?>�</b>&nbsp<a href="index.php?action=ajouter&id=<?php echo $product_2["id"] ?>">Ajouter au panier</a></td> <!-- Affiche en gras le prix  et ajoute
                un lien qui redirige vers le fichier 'inconstruction.php' mais sous le nom de 'addtocart' + son id personnel ajouter via la fonction findAllBooks -->
            </tr>
        <?php }  ?>
	</table>
    
<style>
    img {
        width:170px;
        height:170px;
        object-fit:cover;
    }
    .tableleg {
        position:absolute;
        left:28%;
        top:140px;
    }
</style>