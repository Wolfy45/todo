<?php

/* 
 * Contrôlleur qui va supprimer definitivement la tache de la bdd
 * 
 * param : $get -> id de la tache a supprimer
 */

//intialisation
include "lib/init.php";

//on verifie que l'on est connecter
if(!empty($_SESSION['connecte'])){
    //on charge la tache avec l'id en post
    $tache = new tache($_GET['id']);

    //on verifie que l'utilisateur est bien l'auteur est que sont etat reste "a faire"
    if($tache->auteur->id == $_SESSION['id_user'] and $tache->etat->id == "1"){
        
        //si ok on peut alors supprimer la tâche
        $tache->delete($_GET['id']); 
        
    }
    

    //on charge l'utilisateur en cours
    $user=new user($_SESSION['id_user']);
    
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
