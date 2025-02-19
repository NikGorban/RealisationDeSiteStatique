<?php

if (isset($_GET['p'])){

    switch ($_GET['p']) {
        
        case 'accueil':
            include "../temp/accueilView.php";
            break;

        case 'galerie':
            include "../temp/galerieView.php";
            break;
        case 'geographie':
            include "../temp/geographieView.php";
            break;
        case 'culture':
            include "../temp/cultureView.php";
            break;
        case 'histoire':
            include "../temp/historiqueView.php";
            break;
        case 'liens':
            include "../temp/liensView.php";
            break;
        case 'contacts':
            include "../temp/contactView.php";
            break;
        default:
            include "../temp/page-404.php";
            break;
    }

}else{

    include "../temp/accueilView.php";

    }

?>