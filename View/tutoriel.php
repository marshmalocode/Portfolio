<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="asset/favicom.png" />
    <link rel="stylesheet" href="css/tuto.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/app.js" defer></script>
    <title><?= $titre ?></title>
</head>

<body>
    <?php
    include '../View/inc/menu.php';
    ?> <section>
        <h1>
            Tutoriel
        </h1>
        <details>
            <summary>Menu déroulant en Css</summary>
            <h3>comment créer un menu de navigation en CSS.</h3>
            <h4>Voici les étapes à suivre :</h4>
            <p>Créez un nouveau fichier HTML et nommez-le "index.html". Ouvrez ce fichier dans un éditeur de texte ou un IDE de votre choix.</p>
            <p>Ajoutez une structure de base HTML. Nous allons inclure un titre de page, une section pour notre menu et une section pour notre contenu principal.</p>
            <h4>Voici le code en images pour cela :</h4>
            <img src="asset/tutoMenuCss1.png" alt="">
            <h4>Voici le code en images pour cela :</h4>
            <img src="asset/tutoMenuCss2.png" alt="">
            <h4>Exemple :</h4>
            <img src="asset/tuto1final.png" alt="">
        </details>
        <details>
            <summary>Menu déroulant en Css et java-script</summary>
            <h3>des sous-menus déroulants en utilisant JavaScript :</h3>
            <ol>
                <li>
                    <p>Tout d'abord, dans la section HEAD de la page HTML, nous avons ajouté des styles CSS pour créer le menu et
                        les
                        sous-menus déroulants. Les styles sont appliqués aux éléments HTML en utilisant des sélecteurs d'éléments et
                        de
                        classes.</p>
                    <h4>Voici le code en images pour cela :</h4>
                    <img src="asset/tutoMenuJs1.png" alt="">
                </li>
                <li>
                    <p>
                        "body" de la page HTML, nous avons ajouté le code HTML pour le menu de navigation. Chaque élément de menu
                        avec
                        des
                        sous-menus déroulants est créé en utilisant la classe CSS "has-submenu". Les sous-menus sont créés en
                        utilisant
                        des éléments HTML de liste imbriqués (éléments "ul" et "li") et sont cachés par défaut en utilisant la
                        propriété
                        CSS "display: none;".</p>
                    <h4>Voici le code en images pour cela :</h4>
                    <img src="asset/tutoMenuJs2.png" alt="">
                </li>
                <li>
                    <p>
                        "script" de la page HTML, nous avons ajouté du code JavaScript pour créer la fonctionnalité des sous - menus
                        déroulants.Le code récupère tous les éléments de menu avec des sous - menus en utilisant la méthode
                        "querySelectorAll()".Ensuite, une boucle "forEach()" est utilisée pour parcourir chaque élément de menu et
                        ajouter un écouteur d'événement de clic. Lorsque l'utilisateur clique sur un élément de menu, la fonction de
                        clic est déclenchée et le sous - menu associé est affiché ou masqué en fonction de son état actuel en
                        utilisant
                        la propriété CSS "display".</p>
                    <h4>Voici le code en images pour cela :</h4>
                    <img src="asset/tutoMenuJs3.png" alt="">
                </li>
            </ol>
            <h4>Exemple :</h4>
            <img src="asset/tutoMenu2Jsfinal.png" alt="">
        </details>
        <details>
            <summary>Prototypes d'objets JavaScript</summary>
            <p>Tous les objets JavaScript héritent des propriétés et des méthodes d'un prototype.</p>
            <p>Dans le chapitre précédent, nous avons appris à utli/liiser un constructeur d'objet :</p>
            <h2>Exemple en images</h2>
            <img src="asset/tutoW3S1.png" alt="">
            <p>Nous avons également appris qu'li/li est impossible d' ajouter une nouvelle propriété à un constructeur d'objet
                existant :</p>
            <h2>Exemple en images</h2>
            <img src="asset/tutoW3S2.png" alt="">
            <p>Pour ajouter une nouvelle propriété à un constructeur, vous devez l'ajouter à la fonction constructeur :</p>
            <h2>Exemple en images</h2>
            <img src="asset/tutoW3S3.png" alt="">
            <h2>Héritage des prototypes</h2>
            <h3>Tous les objets JavaScript héritent des propriétés et des méthodes d'un prototype :</h3>
            <ul>
                <li>
                    <p>Dateles objets héritent deDate.prototype</p>
                </li>
                <li>
                    <p>Arrayles objets héritent deArray.prototype</p>
                </li>
                <li>
                    <p>Personles objets héritent dePerson.prototype</p>
                </li>
            </ul>
            <p>
                Le Object.prototypeest au sommet de la chaîne d'héritage du prototype :
            </p>
            <p>Dateles objets, Arrayles objets et Personles objets héritent de Object.prototype.</p>
            <h3>Ajout de propriétés et de méthodes aux objets</h3>
            <p>Parfois, vous souhaitez ajouter de nouvelles propriétés (ou méthodes) à tous les objets existants d'un type donné.
            </p>
            <p>Parfois, vous souhaitez ajouter de nouvelles propriétés (ou méthodes) à un constructeur d'objet.</p>
            <h3>Utli/liisation de la propriété prototype</h3>
            <p>La propriété JavaScript prototypevous permet d'ajouter de nouvelles propriétés aux constructeurs d'objet :</p>
            <h2>Exemple en images</h2>
            <img src="asset/tutoW3S4.png" alt="">
            <p>La propriété JavaScript prototypepermet également d'ajouter de nouvelles méthodes aux constructeurs d'objets :</p>
            <h2>Exemple en images</h2>
            <img src="asset/tutoW3S5.png" alt="">
            <h2>Ne modifiez que vos propres prototypes. Ne modifiez jamais les prototypes d'objets JavaScript standards!!!!!</h2>
            <p>si vous voulez en savoir plus sur W3school rendez vous vite sur leur<a href="https://www.w3schools.com/js/js_object_prototypes.asp#"> site </a>vous y aprendrai tous se qu'il faut savoir
                sur diférents languages</p>
        </details>
    </section>
    <?php
    include '../View/inc/footer.php';
    ?>
</body>

</html>