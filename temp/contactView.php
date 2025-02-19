<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>

    <?php
include "inc/baniereView.php";
include "inc/menuView.php"
    ?>
</body>
</html>

<h1>Contacts</h1>

<img src="img/contacts.jpg" alt="Les contacts">

<div class="formFon">
    <h2>Formulaire de contact</h2>
    <div class="formulaire">

        <form action="." method="text">
            <div>
                <label for="#">Nom</label>
                <input type="text"></div>
            <div> 
                <label for="#">Prénom</label>
                <input type="text">
            </div>
            <div>
                <label for="#">Email</label>
                <input type="email">
            </div>        
            <div>
                <label for="#">Message</label>
                <textarea name="message" id="message" ></textarea>            
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</div>