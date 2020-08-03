<?php

/* 
 * Contrôlleur qui va afficher l'historique de l'utilisateur
 * 
 * 
 */

//initialisation
include"lib/init.php";

if(!empty($_SESSION['connecte'])){
    
    
    //on charge l'utilisateur en cours
    $user = new user($_SESSION['id_user']);
    
    //on donne le titre de la pag (title du head)
    $title = "Historique";

    //on affiche la page de connection
    include"templates/pages/historique.php";
    
    
}else{
    //on donne le titre de la pag (title du head)
    $title = "Connection";

    //on affiche la page de connection
    include"templates/pages/connection.php";
}

