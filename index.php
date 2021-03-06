
<?php
session_start();

//Check if the user exists if he does not exist he is redirected to the connect.php page
// Vérifier si l'utilisateur existe s'il n'existe pas il est redirigé vers la page connect.php
if (!isset($_SESSION['user'])){
    header('Location: ./connect.php');
}

$pseudo = $_SESSION['user']['pseudo'];
$id = $_SESSION['user']['id'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tchat Éval</title>
    <link rel="stylesheet" href="css/style_global.css">
    <link rel="stylesheet" href="css/style_accueil.css">
    <script src="https://kit.fontawesome.com/9e5ac608ee.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="contains">
    <?php require_once 'partials/errorSuccess.php' ?>
    <div id="top">
        <div id="title">
            <h1 id="kaer">Kaer Mohren</h1>
        </div>
        <?php require_once 'partials/menu.php' ?>
    </div>
    <div id="tchat">
        <!-- Post location in div below -->
        <!-- Emplacement du message en div ci-dessous -->
        <div id="message">

        </div>

        <!-- Form to send messages -->
        <!-- Formulaire pour envoyer des messages -->
        <div id="writeTchat">
            <form action="Tchat.php?task=write" method="POST">
                <input type="text" name="user_fk" id="user_fk" value="<?= $id ?>" hidden>
                <input type="text" id="messageTxt" name="message" minlength="3" placeholder="Écri ton message ici mon ami !" required>
                <button type="submit"><i class="fas fa-scroll"></i></button>
            </form>
        </div>
    </div>
</div>

<script src="js/appindex.js"></script>

</body>
</html>