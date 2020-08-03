<?php

/* 
 *Contrôlleur qui va afficher le formulaire de création d'un utilisateur si le user en cours est un superviseur (1) 
 * 
 */

//initialisation
include"lib/init.php";

if(!empty($_SESSION['connecte'])){
    
    //on charge le user en cours;
    $user= new user($_SESSION['id_user']);
    
    //si le user est bien un superviseur alors on affiche le formulaire de création d'utilisateur
    if($user->superviseur->id == "1"){
        //on donne le titre de la pag (title du head)
    $title = "Ajout Utilisateur";

    //on affiche la page de connection
    include"templates/pages/form_user.php";
    
    
    }else{
        //on donne le titre de la pag (title du head)
    $title = "Connection";

    //on affiche la page de connection
    include"templates/pages/connection.php";
    }
    
    
    
    
}else{
    //on donne le titre de la pag (title du head)
    $title = "Connection";

    //on affiche la page de connection
    include"templates/pages/connection.php";
}