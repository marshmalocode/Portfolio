<?php
//controleur frontal
if (isset($_GET["z"])) {
    switch ($_GET["z"]) {

        case 'trav':
            include "../View/travaux.php";
            break;
        case 'cv':
            include "../View/cv.php";
            break;
        case 'liens':
            $lienDB = DBlink($db);
            include "../View/lien.php";
            break;
        case 'contact':
            include "../View/contact.php";
            break;
        case 'tuto':
            include "../View/tutoriel.php";
            break;
        default:
            include '../View/404.php';
    }
} else {
    include '../View/homepage.php';
}
