<?php

/* 
 * Contrôlleur qui va deconnecter l'utilisateur en cours et retourner a la page de connexion
 * 
 */

//intialisation
include"lib/init.php";

//on donne au variable session une valeur nul;
$_SESSION['connecte']=null;
$_SESSION['id_user']=null;

 //on donne le titre de la pag (title du head)
    $title = "Connection";

    //on affiche la page de connection
    include"templates/pages/connection.php";