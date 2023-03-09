<?php
//controleur frontal
if (isset($_GET["z"]) && ($_GET["z"]) === "contact") {
    require_once "../View/contact.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "cv") {
    require_once "../View/cv.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "tuto") {
    require_once "../View/tutoriel.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "liens") {
    $lienDB = DBlink($db);
    require_once "../View/lien.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "trav") {
    $travauxDB = DBtravaux($db);
    require_once "../View/travaux.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "contact") {

    require_once "../View/tutoriel.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "connect") {
    require_once "../View/connectView.php";
} elseif (isset($_GET["z"]) && $_GET["z"] === "accueil") {
    require_once "../View/homepage.php";
} else {
    require_once "../View/404.php";
}
