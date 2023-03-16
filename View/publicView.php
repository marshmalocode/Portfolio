<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="asset/favicom.png" />
    <link rel="stylesheet" href="css/public.css">
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
        <div class="admin">
            <div class="brand-logo">
                <img src="asset/icon-user.png" alt="" class="logo-user">
            </div>
            <div class="brand-title">CONNEXION</div>
            <form name="connexion" action="" method="post">
                <ul>
                    <li class="dropdown-item">
                        <label class="label-item">
                            <p class="p-admin">IDENTIFIANT</p>
                        </label><br>
                        <input class="script-item" name="username" placeholder="example@test.com" required></input>
                    </li>
                    <li class="dropdown-item">
                        <label class="label-item">
                            <p class="p-admin">PASSWORD</p>
                        </label><br>
                        <input name="password" placeholder="Min 8 charaters long" required></input>
                    </li>
                    <li class="dropdown-item">
                        <input type="submit" class="input-admin"></input>
                    </li>
            </form>
        </div>
    </div>
    <?php
    include '../View/inc/footer.php';
    ?>
</body>

</html>