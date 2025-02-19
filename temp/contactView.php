<!DOCTYPE html>
<ht lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>

    <?php
include "inc/baniereView.php";
include "inc/menuView.php"
    ?>
</body>

<div class="titre">
<h1>Contacts</h1>

<img src="img/contacts.jpg" alt="Les contacts">

    <div class="formFon">
        <h3>Contactez nous</h3>
    

        <form action="." method="text">
            <div class="form-group">
                <label for="#">Nom</label>
                <input type="text"></div>
            <div class="form-group"> 
                <label for="#">Prénom</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="#">Email</label>
                <input type="email">
            </div>        
            <div class="form-group">
                <label for="#">Message</label>
                <textarea name="message" id="message" ></textarea>            
            </div>
            <button type="submit">Envoyer</button>
        </form>
        </div>
    </div>
