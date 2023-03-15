<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="asset/favicom.png" />
    <link rel="stylesheet" href="css/homePage.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/app.js" defer></script>
    <title><?= $titre ?></title>
</head>

<body>
    <?php
    include '../View/inc/menu.php';
    ?>
    <div class="container">
        <form name="connexion" action="" method="post">
            <li class="dropdown-item">
                <input name="username" placeholder="Votre nom d'utilisateur" required></input>
            </li>
            <li>
                <input name="password" placeholder="Votre mot de passe" required></input>
            </li>
            <li>
                <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>
    <?php
    include '../View/inc/footer.php';
    ?>
</body>

</html>