<!-- Creation du formulaire de navigation -->
<?php include("menu.php") ;?>
<div id="mon_formulaire">
    <link rel="stylesheet" href="style.css">
<form method="post" action="script.php">
    <h1 class="form">
        Bienvenue sur le formulaire d'authentification
    </h1>
    <p class="form_p">
        Avant de pouvoir passer s'il vous plait veuillez entrer le code fournit par l'administrateur
    </p>
    <fieldset>
        <label for="mot_de_passe"> Mot de Passe</label>
        <input type="password" autofocus name="mot_de_passe" id="mot_de_passe" maxlength="10" size="20" required> <input id="button" type="submit" value="Valider">
    </fieldset>
</form>
<?php include("pied.php");?>
</div>

