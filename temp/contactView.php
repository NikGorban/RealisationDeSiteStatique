<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>

    <?php
        include "inc/menuView.php"
    ?>
</body>
</html>

<h1>Contacts</h1>

<img src="img/contacts.jpg" alt="Les contacts">

<div class="formulaire"></div>
    <h2>Formulaire de contact</h2>
    <form action="." method="text">
    <label for="#">Nom</label>
    <input type="text">
    <label for="#">Prénom</label>
    <input type="text">
    <label for="#">Email</label>
    <input type="email">
    <label for="#">Message</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <button type="submit">Envoyer</button>
    </form>
</div>