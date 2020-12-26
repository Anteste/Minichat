<?php
/*
 * Démarrage de la session
 */
session_start();


/*
 * Numéro de la page ou l'on se trouve. Par défaut on affiche les 10 premiers
 * messages.
 *
 * !isset(page) => page = 0, On affichera les messages 0 à 9.
 * ?page=1 => On affiche du message 10 au 19
 * ?page=2 => On affiche du message 20 à 29
 * ...
 * ?p=x => On affiche du message 10x - 10 à (10x - 1)
 */
$page = (isset($_GET['page'])) ? filter_var($_GET['page'], FILTER_SANITIZE_NUMBER_INT) : 1;

$msg_min = $page * 10 - 10;
$msg_max = $page * 10 - 1;

/*
 * Connexion à la base de données
 */
require('dbConfig.php');


/*
 * Récupération des 10 derniers messages
 */
$req = 'SELECT
            pseudo,
            message,
            DATE_FORMAT(date, \'%d/%m/%Y - %Hh%i\') AS date
        FROM main
        ORDER BY ID DESC
        LIMIT '.$msg_min.','.$msg_max;
$msgs = $db->query($req);

$req = 'SELECT COUNT(*) AS nb_msg FROM main';
$nb_msg_rep = $db->query($req);

/*
 * Affichage du header et du formulaire
 */
require('views/header.php');
require('views/form.php');


/*
 * Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
 */
while ($msg = $msgs->fetch()) {
    // var_dump($msg);
    require('views/message.php');
}
$msgs->closeCursor();


/*
 * Affichage du nombre de pages
 */
$nb_msg = $nb_msg_rep->fetch();
require('views/page.php');
$nb_msg_rep->closeCursor();

/*
 * Affichage du footer
 */
require('views/footer.php');
