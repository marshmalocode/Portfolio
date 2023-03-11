<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="asset/favicom.png" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js" defer></script>
    <title><?= $titre ?></title>
</head>

<body>
    <?php var_dump($lienDB) ?>
    <?php
    include '../View/inc/menu.php';
    ?>
    <?php foreach ($lienDB as $item) : ?>
        <h3><?= $item['titre'] ?></h3>
        <img src="<?= $item['image'] ?>" alt="">
        <p><?= $item['description'] ?></p>
        <a href="<?= $item['url'] ?>">lien</a>
    <?php
    endforeach;
    ?>
    <?php
    include '../View/inc/footer.php';
    ?>
</body>

</html>