<?php
session_start();
# Dependencies
require_once "../config.php"; # DB
require_once "../model/LinkModel.php";
require_once "../model/ContactModel.php";
require_once "../model/travauxModel.php";
require_once "../model/UserModel.php";
//require_once "../model/dOSSIER MODEL";# table category

# Connexion
try {
    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);
} catch (Exception $e) {
    exit($e->getMessage());
}
# Router

// connected controller
if (isset($_SESSION['monId'])&&$_SESSION['monId']==session_id()) {
    require_once "../controller/privateController.php";
    // public
} else {
    require_once "../controller/publicController.php";
}


# good practice
mysqli_close($db);
