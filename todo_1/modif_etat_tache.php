<?php

/* 
 * Controlleur qui va maj l'etat de la tâche
 * 
 * param : en POST id de la tache et etat de la tache
 */

//intialisation
include"lib/init.php";

//on verifie que l'on est connecter
if(!empty($_SESSION['connecte'])){
    
    //on charge la tache avec l'id en post
        $tache =new tache($_POST['id']);
    
    //on verifie que l'utilisateur est bien le destinataire 
    if($tache->destinataire->id == $_SESSION['id_user']){
        

        //on maj l'etat de la tache
        $tache->etat=$_POST['etat'];

        //on update la tâche
        $tache->update($_POST['id']);
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

