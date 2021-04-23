<?php
require_once('traitement.php');


if (isset($_GET['envoyer']))
{
    if (!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['adresse']))
    {
        $prenom2 = $_GET['prenom'];
        utilisateur($_GET['prenom'], $_GET['nom'], $_GET['adresse']);
        $msgsucces = "Connexion établi ! ". $_COOKIE["user"];
        if ($prenom2 != $_COOKIE["user"])
        {
            setCookie("user",$prenom2,time()+ 3600 * 24 * 365);
            $_COOKIE["user"] = strval($prenom2);
            $msgsucces = "Connexion établi ! ". $_COOKIE["user"];
            header("refresh:3;url=index.php?action=marcher.php");
        }
        else 
        {
          header("refresh:3;url=index.php?action=marcher.php");
        }
    }
    else
    {
        $msgerror = "remplir tout les champs !";
    }
}

?>

<div id="container-2">
    <div class="message">
      <?php if (isset($msgsucces)) { echo $msgsucces; } ?>
    </div>
    <div class="formname">
        Connexion  
    </div>
        <form method="GET" action="connexion.php">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prénom" required>
            <input type="text" name="adresse" placeholder="Adresse" required>
            <input type="submit" value="Envoyer" name="envoyer">
        </form>
        <a href="">Help</a>
    </div>
</div>
<style>
  .formname { 
    text-align:center;
    font-size: 1.5em;
    font-weight:bold;
    -webkit-margin-before: 0.67em;
    -webkit-margin-after: 0.67em;
    font-family:sans-serif;
    color:#666;
    border-bottom: 1px solid lightgray;
    padding-bottom:20px;
  }

  *:focus {
      outline: 0;
  }

  form {
  display: block;
  margin-top: 0em;
    
  }

  input, textarea {
    font-weight: 300;
    width: 100%;
    margin: 8px 0;
    text-indent: 1em;
    padding: 10px 0;
    border-radius: 3px;
    border: 1px solid lightgray;
  }

  input[type="submit"] {
    font-weight: bold;
    
    background-color:#177ecc;
    color: white;
    border: 0px solid #3079ed;
    transition:all 0.5s;
  }

  input[type="submit"]:hover {
    background-color: #222;
    color: white;
  }

  #container-2{  
    width:250px;
    border: 1px solid lightgray;
    padding:10px;
    background-color:#fff;
    position:absolute;
    top:40%;
    left:40%;
    transform:translate(-50%,-50%);
  }

  a{
    color: #427fed;
      cursor: pointer;  
    text-decoration:none;
    
  }
  .souvenir_2 {
      position:absolute;
      left:40px;
  }
</style>




