<?php
/*
 * Démarrage de la session
 */
session_start();


/*
 * Connexion à la base de donnée
 */
require('dbConfig.php');


/*
 * Insertion du message dans la base de donnée à l'aide d'une requête préparée
 */

// 1. Récupération des valeurs et nettoyages :
$form = [
    'pseudo' => filter_var($_POST['pseudo'], FILTER_SANITIZE_STRING),
    'message' => filter_var($_POST['message'], FILTER_SANITIZE_STRING)
];

// 2. Insertion dans la base de donnée
$req = $db->prepare('INSERT INTO main (pseudo, message) VALUES(?, ?)');
$req->execute(array($form['pseudo'], $form['message']));


/*
 * Ajout du pseudo du visiteur dans la vatiable session
 */
$_SESSION['pseudo'] = $form['pseudo'];


/*
 * Redirection du visiteur vers la page du minichat
 */
header('Location: index.php');

?>
