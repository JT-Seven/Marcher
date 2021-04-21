<style>
    .main {
        height: 88vh;
    }
</style>

<table border="1" cellspacing="0" cellpadding="5px" width="100%">
	<tr>
		<td colspan="2" align="center" style="background-color: #cccccc">
			<h1 style="background-color: #cccccc; margin: 0px;padding:0px">Bienvenu sur le site Power !</h1>
			<p>
				Nous sommes le <?php echo date("d/m/y"); ?> et il est <?php echo strftime("%H:%M:%S"); ?><br/>				
			</p>
		</td>
	</tr>
	<tr class="main">
		<td valign="top" style="background-color:#081e84" width="100px">
            <a href="index.php?action=panier"><?php echo ucfirst("Panier"); ?></a><br />
            <a href="index.php?action=marcher"><?php echo ucfirst("Marché"); ?></a><br />
            <a href="index.php?action=debug.php"><?php echo ucfirst("Debug"); ?></a><br />
			<a href="index.php?action=connexion"><?php echo ucfirst("Connexion"); ?></a><br />
		</td>
		<td>
			<?php 
				include($page);
			?>	
		</td>
	</tr>
</table>




