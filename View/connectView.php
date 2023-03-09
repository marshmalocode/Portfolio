<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../public/asset/favicom.png" />
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil de notre site</title>
</head>
<body>
<?php
    include '../View/inc/menu.php';
    ?>
    
    <h1>Accueil de notre site</h1>
    <h2>Connexion</h2>
    <form action="./" method="POST">
        <?php if(isset($erreur)): ?>
        <h3 style="color:red;"><?=$erreur?></h3>
        <?php endif ?>
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>
        <input type="submit" id='submit' value='LOGIN' >
    </form>
    <?php
    include '../View/inc/footer.php';
    ?>
    <script src="javascript.js"></script>
    <script src=""></script>
</body>
</html>