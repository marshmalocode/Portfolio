<?php
# PHP SESSION CONNECT
session_start();

# on va utiliser le namespace model\MappingClass\UserMapping
use model\MappingClass\UserMapping;

# Dependencies
require_once "../config.php"; # 

// Autoload de classes (qui portent le même nom que le fichier) ! Gestion des namespaces
spl_autoload_register(function ($className) {
    // par exemple si on est dans le dossier public, le str_replace va remplacer les \ des namespaces par des / et on
    // aura par exemple ../model/Entity.php
    $file = '../' . str_replace('\\', '/', $className) . '.php';
    // si le fichier existe, on le charge
    if (file_exists($file)) {
        require_once $file;
    }
});


# Connexion
try {
    $PDOConnect = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='. DB_CHARSET.';port='.DB_PORT, DB_LOGIN, DB_PWD);
    $MysqliConnect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($MysqliConnect, DB_CHARSET);
} catch (Exception $e) {
    exit($e->getMessage());
}




# Router

// connected
if (isset($_SESSION['myID']) && $_SESSION['myID'] == session_id()) {
    require_once "../controller/privateController.php";

    // public
} else {
    require_once "../controller/publicController.php";
}
