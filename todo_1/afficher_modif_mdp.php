<?php

/* 
 * Contrôlleru qui va afficher le formulaire de modification du mot de passe;
 * 
 * 
 * 
 */

//intialisation
include"lib/init.php";

//on charge l'utilisateur en cours
$user =new user($_SESSION['id_user']);

//on verifie que l'on est connecter
if(!empty($_SESSION['connecte'])){
    
    //on donne le titre de la pag (title du head)
    $title = "Modifier mot de passe";

    //on affiche la page de connection
    include"templates/pages/form_modif_mdp.php";
    
    
}else{
     //on donne le titre de la pag (title du head)
    $title = "Connection";

    //on affiche la page de connection
    include"templates/pages/connection.php";
}