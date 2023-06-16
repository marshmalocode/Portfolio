<?php
# PHP SESSION CONNECT
session_start();

# on va utiliser le namespace model\MappingClass\UserMapping
use model\MappingClass\UserMapping;
use model\ManagerClass\UserManager;

# Dependencies
require_once "../config.php"; #

// Autoload de classes (qui portent le même nom que le fichier) ! Gestion des namespaces
spl_autoload_register(function ($className) {
    // par exemple si on est dans le dossier public, le str_replace va remplacer les \ des namespaces par des / et on
    // aura par exemple ../model/Entity.php
    $file = '../' . str_replace('\\', '/', $className) . '.php';
    require_once $file;
});


# Connexion
try {
    $PDOConnect = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='. DB_CHARSET.';port='.DB_PORT, DB_LOGIN, DB_PWD);
    $MysqliConnect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($MysqliConnect, DB_CHARSET);
} catch (Exception $e) {
    exit($e->getMessage());
}

$userManager = new UserManager($PDOConnect);

$recupAllUser = $userManager->getAll();

echo"<pre>";

var_dump($recupAllUser);

echo"</pre>";

foreach ($recupAllUser as $item){
    echo $item->getIduser()."<br>";
    echo $item->getUsername()."<br>";
    echo $item->getEmail()."<br>";
    echo $item->getPassword()."<br>";
    echo $item->getCreate_time()."<br>";
    echo $item->getUniqid()."<br>";
    echo $item->getActif()."<br>";

}

$userOne = new UserMapping();
$userTwo = new UserMapping([
    'id' => 2,
    'name' => 'toto',
    'iduser' => 3,
    'delete'=> "DELETE FROM user WHERE 1=1;",
    'username'=> "toto",
]);
try {
    $userThree = new UserMapping([
        'id' => 2,
        'name' => 'toto',
        'iduser' => 3,
        'delete'=> "DELETE FROM user WHERE 1=1;",
        'username'=> "lo",
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $userFour = new UserMapping([
        'iduser' => 5,
        'username'=> "Pierre",
        'email'=> "pierre@andre",
        'password'=> "123456",
        'create_time'=> new DateTime("now"),
        'uniqid'=> "123456789",
        'actif'=> true,
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}


var_dump($userOne,$userTwo,$userThree,$userFour);

