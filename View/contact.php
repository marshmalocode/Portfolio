<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../public/asset/favicom.png" />
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/app.js" defer></script>
    <title><?= $titre ?></title>
</head>

<body>
    <?php
    include '../View/inc/menu.php';
    ?>
    <h1>Mon formulaire de contact</h1>
    <p>Merci de me laisser un message</p>
    <?php
    if (isset($erreur)) echo $erreur;
    else {
    ?>
        <form action="" method="post" name="contact">
            <input name="lenom" placeholder="Votre nom" required><br>
            <input name="lemail" placeholder="Votre mail" required><br>
            <input name="lesujet" placeholder="Sujet" required><br>
            <textarea name="lemessage" placeholder="Votre message" required></textarea><br>
            <input type="submit" value="Envoi du mail">
        <?php
    }
    var_dump($DBcontact)
        ?>

</body>

</html>