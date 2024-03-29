<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="asset/favicom.png" />
    <link rel="stylesheet" href="css/lien.css">
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
        <div class="global-link">
            <?php foreach ($lienDB as $item) : ?>
                <div class="content-lien">
                    <div class="title-link">
                        <h3><?= $item['titre'] ?></h3>
                    </div>
                    <div class="content-link">
                        <img src="<?= $item['image'] ?>" alt="" class="img-link">
                        <p class="p-link"><?= $item['description'] ?></p>
                    </div>
                    <div class="button-link">
                        <a href="<?= $item['url'] ?>" class="a-link" target="_blank">Découvrir</a>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    <?php
    include '../View/inc/footer.php';
    ?>

</body>

</html>