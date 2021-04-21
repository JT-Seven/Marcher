<?php
   require_once("traitement.php");
   //$panier = panier();
?>

<style>
        .formu {
            position:absolute;
            top:30%;
            left:30%;
        }

        .title {
            position:absolute;
            top:15%;
            left:20%;
        }

        .forecast {
            margin: 10px;
            padding: 0.3rem;
            background-color: #eee;
            font: 1rem 'Fira Sans', sans-serif;
            display:flex;
            flex-wrap: nowrap;
        }

        .forecast > h1,
        .day-forecast {
            margin: .5rem;
            padding: .3rem;
            font-size: 1.2rem;
        }

        .day-forecast {
            background: right/contain content-box border-box no-repeat
                url('/media/examples/rain.svg') white;
        }

        .day-forecast > h2,
        .day-forecast > p {
            margin: .2rem;
            font-size: 1rem;
        }

    </style>
    <h2 class="title">Votre Panier, enregistré sous le nom de <?php // echo $_SESSION['user']. " " ; ?> .</h2>
    <form class="formu" method="GET">
        <article class="forecast">
            <h1><a href="index.php?action=fruit">Les Fruits :</a></h1>
            <article class="day-forecast">
            <?php //foreach($panier as $product) { ?>
                    <h2><?php echo ""; ?></h2>
                    <p><?php $cerise = 3.29; ?></p>
                    <!--<input type="number" min ="0" max="10" name="quantiter" value="0">-->
                </article>
                <article class="day-forecast">
                    <h2><?php  ?></h2>
                    <p><?php //$papaye = 1.69; ?></p>
                    <!--<input type="number" min ="0" max="10" name="quantiter" value="0">-->
                </article>
                <article class="day-forecast">
                    <h2><?php  ?></h2>
                    <p><?php //$pasteque = 2.50; ?></p>
                    <!--<input type="number" min ="0" max="10" name="quantiter" value="0">-->
                </article>
            <?php //} ?>
        </article>
        <!--
        <article class="forecast">
            <h1><a href="index.php?action=legume">Les Légumes :</a></h1>
            <article class="day-forecast">
                <h2>Lot de 12 Radis</h2>
                <p><?php //$radis = 4.50; ?></p>
                <input type="number" min ="0" max="10" name="quantiter" value="0">
            </article>
            <article class="day-forecast">
                <h2>Lot de 6 Rhubarbe</h2>
                <p><?php //$rhubarbe = 3.29; ?></p>
                <input type="number" min ="0" max="10" name="quantiter" value="0">
            </article>
            <article class="day-forecast">
                <h2>Lot de 20 Carotte</h2>
                <p><?php  //$carotte = 7.50; ?></p>
                <input type="number" min ="0" max="10" name="quantiter" value="0">
            </article>
        </article>
        -->
        <article class="forecast">
            <article class="day-forecast">
               <button><a href="index.php?action=commander">Commander</a></button><button><a href="index.php?action=supprimer">Supprimer</a></button>
            </article>
        </article>
        <article class="forecast">
        <h1>Montant Totale :</h1>
            <article class="day-forecast">
                <h2><?php // echo $fonction; ?></h2>
            </article>
        </article>
    </form>

<!--
<table border="2">
    <tr>
        <th colspan="2">BackMarket</th>
    </tr>
    <tr>
        <td>
            Rubriques :
        </td>
        <td>
            Intitulé de la Rubriques :
        </td>
    </tr>
    <td>
        <tr>
           <td><a href="index.php?action=ajouter">Pomme :</a><br></td>
           <td><?php  ?></td>
        </tr>
        <tr>
            <td><a href="index.php?action=ajouter">Raisin</a><br></td>
            <td><?php  ?></td>
        </tr>
        <tr>
            <td><a href="index.php?action=ajouter">Framboise</a><br></td>
            <td><?php  ?></td>
        </tr>
    </td> 
    <tr>
        <td><a href="index.php?action=ajouter">Facturation :</a></td>
        <td colspan="3"></td>
    </tr> 
    <td>

    </td> 
</table>
-->
