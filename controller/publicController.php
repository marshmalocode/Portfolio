<?php
//controleur frontal
if (isset($_GET["z"]) && ($_GET["z"]) === "contact") {
    // on veut envoyer un message
    if (isset($_POST['messagesmail'], $_POST['messagestext'])) {
        $mail = filter_var(trim($_POST['messagesmail']), FILTER_VALIDATE_EMAIL);
        $messageDB = htmlspecialchars(strip_tags(trim($_POST['messagestext'])), ENT_QUOTES);
        $messageMail = strip_tags(trim($_POST['messagestext']));

        if ($mail == false || empty($messageDB)) {
            $message = "Mail et/ou message non valides, veuillez recommencer !";
        } else {
            $insert = insertMessages($MysqliConnect, $mail, $messageDB);
            if (is_string($insert)) {
                $message = $insert;
            } else {
                $message = "Votre message à bien été envoyé!";

                // pour l'admin du site
                $mailMessage = "Mail envoyé par $mail \r\n \r\n " . $messageMail;
                $envoi = sendMail(MAIL_SERVER, MAIL_ADMIN, "Message sur votre site", $mailMessage);

                // pour l'utilisateur du site
                $mailMessage = "Votre message a bien été envoyé sur le site http://mailmvc.webdev-cf2m.be/";
                $envoi2 = sendMail(MAIL_SERVER, $mail, "Message du site mailmvc.webdev-cf2m.be", $mailMessage);

                if ($envoi === true && $envoi2 == true) {
                    $message .= "<br>Félicitation";
                }
            }
        }
    }
    require_once "../View/contact.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "cv") {
    require_once "../View/cv.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "tuto") {
    require_once "../View/tutoriel.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "liens") {
    $lienDB = DBlink($MysqliConnect);
    require_once "../View/lien.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "trav") {
    $travauxDB = DBtravaux($MysqliConnect);
    require_once "../View/travaux.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "contact") {
    require_once "../View/tutoriel.php";
} elseif (isset($_GET["z"]) && ($_GET["z"]) === "connect") {
    require_once "../View/../View/publicView.php";
} elseif (isset($_GET["z"]) && $_GET["z"] === "admin") {
    require_once "../View/privateView.php";
} else {
    require_once "../View/homepage.php";
}
// on veut se connecter
if (isset($_POST['username'], $_POST['password'])) {
    $user = htmlspecialchars(strip_tags(trim($_POST['username'])), ENT_QUOTES);
    $pwd = htmlspecialchars(strip_tags(trim($_POST['password'])), ENT_QUOTES);

    $connect = connectUsers($MysqliConnect, $user, $pwd);

    if (is_string($connect)) {
        $message = $connect;
    } else {
        header("Location: ./");
        exit();
    }
}
