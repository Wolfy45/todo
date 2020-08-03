<?php

/* 
 * Contrôlleur qui va afficher la page du tableau de bord  si connecter ou la page de connection
 */

//initialisation
include"lib/init.php";


if(!empty($_SESSION['connecte'])){
    
    //on charge l'utilisateur en cours
    $user = new user($_SESSION['id_user']);
    
    //on donne le titre de la pag (title du head)
    $title = "Tableaux de bord";

    //on affiche la page de connection
    include"templates/pages/tab_bord.php";
    
    
    
    
}else{
    //on donne le titre de la pag (title du head)
    $title = "Connection";

    //on affiche la page de connection
    include"templates/pages/connection.php";
}