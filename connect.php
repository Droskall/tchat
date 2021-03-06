
<?php
session_start();

//Redirection to the index page if the user is already logged in.
// Redirection vers la page d'index si l'utilisateur est déjà connecté.
if(isset($_SESSION['user'])){
    header('Location: ./index.php');
}

//User disconnection if the disconnection GET exists is equal to 0604
// Déconnexion de l'utilisateur si la déconnexion GET existe est égale à 0604
if(isset($_GET['deconnexion']) && $_GET['deconnexion'] === "0604"){
    session_unset();
    header('Location: ./connect.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style_global.css">
    <link rel="stylesheet" href="css/style_connection.css">
    <title>Connexion / Inscription</title>
</head>
<body>
<div id="contains">
    <?php require_once 'partials/errorSuccess.php' ?>

    <!------- Login form ----------->
    <!------- Formulaire de connexion ----------->
    <form action="partials/utils.php" method="POST">
        <h2>Connexion</h2>
        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" minlength="3" maxlength="50" required>
        <input type="password" name="password" id="password" placeholder="Mot de passe" minlength="6" maxlength="60" required>
        <button name="buttonValidateC" id="buttonValidateC">Se connecter</button>
    </form>

    <!------- Registration Form ------------->
    <!------- Formulaire d'inscription ------------->
    <form action="partials/utils.php" method="POST">
        <h2>Inscription</h2>
        <input type="text" name="pseudoInscript" id="pseudoInscript" placeholder="Votre pseudo" minlength="3" maxlength="50" required>
        <input type="text" name="emailInscript" id="emailInscript" placeholder="Votre email" required>
        <input type="password" name="passwordInscript" id="passwordInscript" placeholder="Créer un mot de passe" minlength="6" maxlength="60" required>
        <input type="password" name="passwordConfirmInscript" id="passwordConfirmInscript" placeholder="Confirmer le mot de passe" minlength="6" maxlength="60" required>
        <div>
            <input type="checkbox" name="acceptCheckBox" id="acceptCheckBox">
            <Label for="accept">Merci d'accepter de respecter les autres utilisateurs !</Label>
        </div>
        <button name="buttonValidateI" id="buttonValidateI">S'inscrire</button>
    </form>
</div>
<script src="js/connection.js"></script>
</body>
</html>