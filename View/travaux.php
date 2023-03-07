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
    <?php var_dump($travauxDB) ?>

    <?php foreach ($travauxDB as $item) : ?>
        <h3><?= $item['titre'] ?></h3>
        <img src="<?= $item['image_path'] ?>" alt="">
        <p><?= $item['description'] ?></p>
        <a href="<?= $item['url'] ?>">lien</a>
    <?php
    endforeach;
    ?>
</body>

</html>