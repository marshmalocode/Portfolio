<?php
//controleur frontal
    if (isset($_GET["z"]) && ($_GET["z"]) === "contact"){
        require_once "../View/contact.php";
    }elseif (isset($_GET["z"]) && ($_GET["z"]) === "cv"){
        require_once "../View/cv.php";
    }elseif (isset($_GET["z"]) && ($_GET["z"]) === "lien"){
        $lienDB = DBlink($db);
        require_once "../View/lien.php";
    }elseif (isset($_GET["z"]) && ($_GET["z"]) === "tavaux"){
        $travauxDB = DBtravaux($db);
        require_once "../View/travaux.php";
    }elseif (isset($_GET["z"]) && ($_GET["z"]) === "contact"){
        $contactDB = DBcontact($db);
        require_once "../View/tutoriel.php";
    }elseif(isset($_POST['username'],$_POST['password'])){

        // protection des données utilisateurs
        $username = htmlspecialchars(strip_tags(trim($_POST['username'])),ENT_QUOTES);
        $password = htmlspecialchars(strip_tags(trim($_POST['password'])),ENT_QUOTES);
    
        // is_connected contient l'état de la connexion
        $is_connect = connectUser($db,$username,$password);
    
        // si c'est un chaîne de caractère
        if (is_string($is_connect)) {
            $erreur = $is_connect;
        }
    
        // redirection si connexion ok
        if ($is_connect===true) {
            // redirection sur index.php
            header("Location: ./");
            exit();
        }
        
    
    }elseif (isset($_GET["z"]) && $_GET["z"] === "accueil"){
        require_once "../View/homepage.php";
}else{
    require_once "../View/404.php";
}