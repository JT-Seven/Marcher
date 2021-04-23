<?php
    require_once("traitement.php");
   
    @$panier = $_COOKIE['panier'];
    $_COOKIE['panier[Pomme]'] = intval($panier["Pomme"]);
    $_COOKIE['panier[framboise]'] = intval($panier["framboise"]);
    $_COOKIE['panier[raisin]'] = intval($panier["raisin"]);
    $_COOKIE['panier[tomate]'] = intval($panier["tomate"]);
    $_COOKIE['panier[carotte]'] = intval($panier["carotte"]);
    $_COOKIE['panier[salade]'] = intval($panier["salade"]);

    @$prix = $_COOKIE['prix'];
    $_COOKIE['prix[Pomme]'] = $prix["Pomme"];
    $_COOKIE['prix[framboise]'] = $prix["framboise"];
    $_COOKIE['prix[raisin]'] = $prix["raisin"];
    $_COOKIE['prix[tomate]'] = $prix["tomate"];
    $_COOKIE['prix[carotte]'] = $prix["carotte"];
    $_COOKIE['prix[salade]'] = $prix["salade"];

    if($_GET['action'] == 'supprimer')
    {
        supprimer();
    }

?>

<style>
    .formu {
        position:absolute;
        top:30%;
        left:45%;
    }
    .title {
        position:absolute;
        top:15%;
        left:20%;
    }
    .title-pan {
        text-align:center;
    }
    .title-fru {
        text-align:center;
    }
    .title-leg {
        text-align:center;
    }
    
</style>
<h2 class="title">Votre Panier, est enregistré sous le nom de <?php echo $_COOKIE['user']; ?> .</h2>
<form class="formu" method="GET">
    <table class="container-table2" border="2" cellspacing="20" cellpadding="0">  
        <td class="title-pan" colspan="2">PANIER :</td>
            <div class="element1">
                <tr class="tablemarch">
                    <td class="title-fru" width="50%" colspan="1">Fruits :</td><td class="title-fru" colspan="1">Quantiter :</td><td class="title-fru" colspan="1">Prix :</td>
                </tr>
                <tr>
                    <td><a href="index.php?action=ajoutercart&nom=<?php echo 'Pomme'; ?>">Pomme</a></td> <td><p><?php echo $_COOKIE['panier[Pomme]']; ?></p></td><td><p><?php echo @$_COOKIE['prix[Pomme]']. " $"; ?></p></td><!-- Cette ligne dit que jaffiche toutes les images qui provienne de la fonction findAllBooks -->
                </tr>
                <tr>
                    <td><a href="index.php?action=ajoutercart&nom=<?php echo 'Raisin'; ?>">Raisin</a></td> <td><p><?php echo $_COOKIE['panier[raisin]']; ?></p></td><td><p><?php echo @$_COOKIE['prix[raisin]']. " $"; ?></p></td>
                </tr>
                <tr>
                    <td><a href="index.php?action=ajoutercart&nom=<?php echo 'Framboise'; ?>">Framboise</a></td> <td><p><?php echo $_COOKIE['panier[framboise]']; ?></p></td><td><p><?php echo @$_COOKIE['prix[framboise]']. " $"; ?></p></td>
                </tr>
                <tr>
                    <td class="title-leg" colspan="1">Legumes :</td><td class="title-fru" colspan="1">Quantiter :</td><td class="title-fru" colspan="1">Prix :</td>
                </tr>
                <tr>
                    <td><a href="index.php?action=ajoutercart&nom=<?php echo 'Carotte'; ?>">Carotte</a></td> <td><p><?php echo $_COOKIE['panier[carotte]']; ?></p></td><td><p><?php echo @$_COOKIE['prix[carotte]']. " $"; ?></p></td>
                </tr>
                <tr>
                    <td><a href="index.php?action=ajoutercart&nom=<?php echo 'Tomate'; ?>">Tomate</a></td> <td><p><?php echo $_COOKIE['panier[tomate]']; ?></p></td><td><p><?php echo @$_COOKIE['prix[tomate]']. " $"; ?></p></td>
                </tr>
                <tr>
                    <td><a href="index.php?action=ajoutercart&nom=<?php echo 'Salade'; ?>">Salade</a></td> <td><p><?php echo $_COOKIE['panier[salade]']; ?></p></td><td><p><?php echo @$_COOKIE['prix[salade]']. " $"; ?></p></td>
                </tr>
                <tr>
                    <td>TOTAL :</td><td colspan="2"><?php echo $_COOKIE["total"]. " $"; ?></td>
                </tr>
                <td><button><a href="index.php?action=commander">Commander</a></button></td><td><button><a href="index.php?     action=supprimer&supp=click">Supprimer</a></button></td>
                </tr>
            </div>
	</table>
</form>