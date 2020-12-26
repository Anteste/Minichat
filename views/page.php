<?php
/*
 * Récupération du nombre total de message
 */
$nb = intval($nb_msg['nb_msg']);
?>

<form class="" action="index.php" method="get">
    <select name="page">
        <?php for ($i=0; $i < $nb; $i+=10): ?>
            <option value="<?= ($i/10)+1 ?>"><?= ($i/10)+1 ?></option>';
        <?php endfor; ?>

    </select>
    <button type="submmit" name="button">Go!</button>
</form>
