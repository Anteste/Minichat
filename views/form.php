<form action="post.php" method="post">
    <p>
    <label for="pseudo">Pseudo</label> :
    <input type="text"
        name="pseudo"
        id="pseudo"
        value="<?php echo (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : ''; ?>"/>
    <br />
    <label for="message">Message</label> :
    <input type="text" name="message" id="message" /><br />
    <input type="submit" value="Envoyer" />
    </p>
</form>
