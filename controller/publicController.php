<?php
//controleur frontal
if (isset($_GET["z"])) {
    switch ($_GET["z"]) {

        case 'trav':
            $titre = "Travaux";
            include "../View/travaux.php";
            break;
        case 'cv':
            $titre = "Mon CV";
            include "../View/cv.php";
            break;
        case 'liens':
            $titre = "Liens";
            $lienDB = DBlink($db);
            include "../View/lien.php";
            break;
        case 'contact':
            $titre = "Contact";
            include "../View/contact.php";
            break;
        case 'tuto':
            $titre = "Tutoriel";
            include "../View/tutoriel.php";
            break;
        default:
            $titre = "404";
            include '../View/404.php';
    }
} else {
    $titre = "Accueil";
    include '../View/homepage.php';
}
