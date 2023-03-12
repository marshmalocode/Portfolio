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
    <header class="">
        <!-- Post title-->
        <h1 class="">MailMVC</h1>
        <hr>

        <h3>Envoyez moi un message : </h3>
    </header>

    <form method="POST" action="" name="messages">
        <div>
            <?php
            if (isset($message)) :
            ?>
                <button type="button" class=""><?= $message ?></button><br>
            <?php
            endif;
            ?>
            <label for="exampleFormControlInput1" class="form-label">Votre adresse mail</label>
            <input name="messagesmail" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Votre commentaire</label>
            <textarea name="messagestext" class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
        </div>

        <button type="submit" class="">Submit</button>
    </form>
    <?php
    include '../View/inc/footer.php';
    ?>
</body>

</html>