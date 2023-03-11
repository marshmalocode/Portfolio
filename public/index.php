<?php
# PHP SESSION CONNECT
session_start();

# Dependencies
require_once "../config.php"; # 
//require_once "../model/UsersModel.php"; # table users
require_once "../model/MessagesModel.php"; # table messages
require_once "../model/MailModel.php"; # send mail
require_once "../model/LinkModel.php";
require_once "../model/travauxModel.php";
require_once "../model/UserModel.php";


# Connexion
try {
    # $PDOConnect = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='. DB_CHARSET.';port='.DB_PORT, DB_LOGIN, DB_PWD);
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
