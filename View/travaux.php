<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="asset/favicom.png" />
    <link rel="stylesheet" href="css/travaux.css.css">
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
    <?php foreach ($travauxDB as $item) : ?>
        <div class="card-work">
            <div class="title-p-work">
                <h3><?= $item['titre'] ?></h3>
                <p><?= $item['description'] ?></p>
            </div>
            <div class="button-work">
                <a href="<?= $item['url'] ?>" class="a-work"><img src="<?= $item['image_path'] ?>" alt="" class="img-work"></a>
            </div>

        </div>
    <?php
    endforeach;
    ?>
    </div>
    <?php
    include '../View/inc/footer.php';
    ?>
</body>

</html>