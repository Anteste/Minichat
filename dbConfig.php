<?php
/*
 * Paramètres pour se connecter à la base de donnée
 */
$host = 'localhost';
$db_name = 'oc-minichat';
$db_username = 'root';
$db_password = 'root';

/*
 * Connexion à la base de donnée
 */
try {
    $db = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=utf8', $db_username, $db_password);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}
 ?>
