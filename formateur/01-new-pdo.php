<?php

# PDO est une classe qui permet d'instancier (créer) un objet de type PDO

# $myBDD est un pointeur, un lien (drapeau, flag, etc...) vers l'instance (donc objet), et non pas une variable contenant la connexion. On l'appelle aussi l'instance de PDO.
$myBDD = new PDO(
    # dsn -> paramètres de connexion à la DB pdo_c2
    'mysql:host=localhost;dbname=pdo_c2;port=3306;charset=utf8', 
    # username -> login
    'root', 
    #password -> password
    '',
    # options (null ou tableau d'options)

);

$a = 5;
$b = $a; 
$a++; echo '$a a son espace propre : '."$a, et ".'$b également : '.$b;

// ceci n'est pas un clonage, mais la création d'un alias ou d'un lien symbolique vers la connexion !
$myBDD2 = $myBDD;

$myBDD3 = new PDO(
    # dsn -> paramètres de connexion à la DB pdo_c2
    'mysql:host=localhost;dbname=ecole;port=3306;charset=utf8',
    # username -> login
    'root', 
    #password -> password
    '',
    # options (null ou tableau d'options)

);

var_dump($myBDD,$myBDD2,$myBDD3);

// déconnexion, supprime en réalité le lien en MySQL et MariaDB
$myBDD = null;

// seul $myBDD est déconnecté, $myBDD2 est toujours connecté
var_dump($myBDD,$myBDD2,$myBDD3);

try{
    // instanciation d'une connexion PDO
    $db = new PDO(
    # dsn → paramètres de connexion à la DB pdo_c2
        'mysql:host=localhost;dbname=pdo_c2;port=3306;charset=utf8',
        # username -> login
        'root',
        #password -> password
        '',
    # options (null ou tableau d'options)
    );

// on capture l'erreur de type PDOException
// bonne pratique : utiliser plutôt Exception $e
}catch (PDOException $pdoe){
    // arrêt du script avec die()
    // et affichage de l'erreur
    die("Code Erreur PDO 
    : {$pdoe->getCode()}<br>
    Message de l'erreur {$pdoe->getMessage()}");
}

var_dump($db);

$db = null;