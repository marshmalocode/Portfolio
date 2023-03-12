<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="asset/favicom.png" />
    <link rel="stylesheet" href="css/homePage.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/app.js" defer></script>
    <title>Admin de notre site</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="./">Mailmvc - admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="./">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="./?disconnect">Déconnexion</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="">

        <!-- Post header-->
        <header class="">
            <!-- Post title-->
            <h1 class="">MailMVC - admin</h1>
            <hr>

            <h3>Voir les messages : </h3>
        </header>

        <?php
        if (isset($message)) :
        ?>
            <button type="button" class=""><?= $message ?></button><br>
            <?php
        else :
            foreach ($responseMessages as $item) :
            ?>
                <article>
                    <h4>Date : <?= $item['messagesdate'] ?> Par <?= $item['messagesmail'] ?></h4>
                    <p><?= nl2br($item['messagestext']) ?></p>
                </article>
        <?php
            endforeach;
        endif;
        ?>


        <?php
        var_dump($_SESSION, $_POST);
        ?>


    </div>
</body>

</html>