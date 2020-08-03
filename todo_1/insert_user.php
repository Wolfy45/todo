<?php

/* 
 * Contrôlleur qui va gerer l'insert d'un n ouvel utilisateur dans la BDD
 * 
 * paramètre :$_post (formulaire de crétaion de compte ) nom, prenom, email, password
 * 
 */

//initialisation
include"lib/init.php";

//on verifie que l'ont est connecter
if(!empty($_SESSION['connecte'])){
    
    //on charge l'utilisateur en cours
    $user =new user($_SESSION['id_user']);
    
    if($user->superviseur->id =="1"){

        $user = new user;

        $user->loadFromTab($_POST);

        $password=$_POST['password'];

        $user->hash($password);

        $user->insert();
    
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